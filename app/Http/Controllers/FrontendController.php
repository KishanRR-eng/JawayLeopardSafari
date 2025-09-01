<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingInquiryRequest;
use App\Http\Requests\InquiryRequest;
use App\Http\Requests\StoreBookingDetailRequest;
use App\Http\Requests\StoreFormRequest;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\DisabledSlot;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;

class FrontendController
{
    protected $genders = ['Male', 'Female', 'Other'];

    public function index()
    {
        return view('frontend.index', [
            'blogs' => Blog::where('isVisible', true)->get()
        ]);
    }

    public function safari()
    {
        return view('frontend.safari', [
            'weekday' => (object)[
                'indian' => Package::with(['timeSlots'])->where(['status' => true, 'tourist_type' => '0', 'day_type' => '0'])->first(),
                'foreigner' => Package::with(['timeSlots'])->where(['status' => true, 'tourist_type' => '1', 'day_type' => '0'])->first(),
            ],
            'weekend' => (object)[
                'indian' => Package::with(['timeSlots'])->where(['status' => true, 'tourist_type' => '0', 'day_type' => '1'])->first(),
                'foreigner' => Package::with(['timeSlots'])->where(['status' => true, 'tourist_type' => '1', 'day_type' => '1'])->first(),
            ],
            'disabledSlots' => DisabledSlot::where('date', '>=', date('Y-m-d'))->get()
        ]);
    }

    public function contactus()
    {
        return view('frontend.contactUs');
    }
    public function gurentees()
    {
        return view('frontend.gurentees');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function howtoreach()
    {
        return view('frontend.howtoreach');
    }

    public function dosdonts()
    {
        return view('frontend.dosdonts');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function cancellationpolicy()
    {
        return view('frontend.cancellationpolicy');
    }
    public function blogs()
    {
        return view('frontend.blog', [
            'blogs' => Blog::where('isVisible', true)->get()
        ]);
    }
    public function blogDetails($id)
    {
        return view('frontend.blogDetails', [
            'data' => Blog::where('slug', $id)->first()
        ]);
    }
    public function terms()
    {
        return view('frontend.terms');
    }
    public function booking(StoreFormRequest $request)
    {
        try {
            $id = explode('-', $request->timing);
            $package = Package::find($id[0]);
            $request->mobile_no = preg_replace('/\s+/', "", $request->phone_code == '91' ? ltrim($request->mobile_no, '0') : $request->mobile_no);

            $booking = Booking::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_code' => $request->phone_code,
                'mobile_no' => $request->mobile_no,
                'email' => $request->email,
                'price' => $package->price,
                'time_slot_id' => $id[1],
                'adult' => $request->adults,
                'child' => $request->children,
                'tourist_type' => $package->tourist_type,
                'day_type' => $package->day_type,
                'booking_date' => $request->date,
            ]);
            return redirect()->route('booking.details', ['id' => Crypt::encrypt($booking->id)])->with('success', 'Booking created successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            return back();
        }
    }

    public function bookingDetails($id)
    {
        $bookingDetailExists = BookingDetail::where('booking_id', Crypt::decrypt($id))->exists();
        if ($bookingDetailExists) {
            return redirect()->route('root')->with('error', 'Booking details already submitted.');
        }

        return view('frontend.detailsForm', ['data' => Booking::with(['timeSlot'])->find(Crypt::decrypt($id))]);
    }

    public function saveDetails(StoreBookingDetailRequest $request, $id)
    {
        try {
            $id = Crypt::decrypt($id);
            $adultBookingDetails = BookingDetail::where(['booking_id' => $id, 'type' => '0'])->get();
            foreach ($request->adult_first_name as $key => $value) {
                if (isset($adultBookingDetails[$key])) {

                    $adultBookingDetails[$key]->first_name = $value;
                    $adultBookingDetails[$key]->last_name = $request->adult_last_name[$key];
                    $adultBookingDetails[$key]->age = $request->adult_age[$key];
                    $adultBookingDetails[$key]->gender = $request->adult_gender[$key];
                    $adultBookingDetails[$key]->save();
                } else {
                    BookingDetail::create([
                        'booking_id' => $id,
                        'first_name' => $value,
                        'last_name' => $request->adult_last_name[$key],
                        'age' => $request->adult_age[$key],
                        'gender' => $request->adult_gender[$key],
                        'type' => '0',
                    ]);
                }
            }

            if (isset($request->child_first_name)) {
                $childBookingDetails = BookingDetail::where(['booking_id' => $id, 'type' => '1'])->get();
                foreach ($request->child_first_name as $key => $value) {
                    if (isset($childBookingDetails[$key])) {
                        $childBookingDetails[$key]->first_name = $value;
                        $childBookingDetails[$key]->last_name = $request->child_last_name[$key];
                        $childBookingDetails[$key]->age = $request->child_age[$key];
                        $childBookingDetails[$key]->gender = $request->child_gender[$key];
                        $childBookingDetails[$key]->save();
                    } else {
                        BookingDetail::create([
                            'booking_id' => $id,
                            'first_name' => $value,
                            'last_name' => $request->child_last_name[$key],
                            'age' => $request->child_age[$key],
                            'gender' => $request->child_gender[$key],
                            'type' => '1',
                        ]);
                    }
                }
            }
            session()->flush();
            return redirect()->route('booking.payment', ['id' => Crypt::encrypt($id)]);
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            return back();
        }
    }

    public function bookingPayment($id)
    {
        $booking = Booking::with(['details', 'timeSlot'])->find(Crypt::decrypt($id));
        return view('frontend.payment', [
            'data' => $booking,
            'genders' => $this->genders,
        ]);
    }

    public function bookingCallback(Request $request, $id)
    {
        if (!empty($request->payment_id)) {
            $booking = Booking::find(Crypt::decrypt($id))->first();
            if ($booking) {
                $booking->payment_id = $request->payment_id;
                $booking->save();
            }
            return back()->with('success', 'Payment successful. Booking details saved.');
        } else {
            return back()->with('error', 'Payment failed. Please try again.');
        }
    }

    public function bookingInquiry(BookingInquiryRequest $request)
    {
        try {
            $request->mobile_no = preg_replace('/\s+/', "", $request->phone_code == '91' ? ltrim($request->mobile_no, '0') : $request->mobile_no);;

            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = config('mail.mailers.smtp.host');
            $mail->SMTPAuth = true;
            $mail->Username = config('mail.mailers.smtp.username');
            $mail->Password = config('mail.mailers.smtp.password');
            $mail->SMTPSecure = config('mail.mailers.smtp.encryption');
            $mail->Port = config('mail.mailers.smtp.port');
            $mail->setFrom(config('mail.from.address'), config('mail.from.name'));
            $mail->addAddress($request->email);
            $mail->addCC(config('app.env') == 'production' ? config('mail.from.address') : 'jeel@yopmail.com');
            $mail->isHTML(true);
            $mail->Subject = "Inquiry Has Been Generated";
            $mail->Body = "
                <div>
                    <p>Inquiry Details : <p>
                    <ul>
                        <li><b>Name :</b> {$request->first_name} {$request->last_name}</li>
                        <li><b>Email :</b> {$request->email}</li>
                        <li><b>Phone Number :</b> +{$request->phone_code} {$request->mobile_no}</li>
                    </ul>
                </div>
            ";
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
        }
        return redirect()->route('safari')->with([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
        ]);
    }

    public function inquiry(InquiryRequest $request)
    {
        try {
            $request->mobile_no = preg_replace('/\s+/', "", $request->phone_code == '91' ? ltrim($request->mobile_no, '0') : $request->mobile_no);
            $request->email = $request->email ?? '-';
            $request->message = $request->message ?? '-';

            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = config('mail.mailers.smtp.host');
            $mail->SMTPAuth = true;
            $mail->Username = config('mail.mailers.smtp.username');
            $mail->Password = config('mail.mailers.smtp.password');
            $mail->SMTPSecure = config('mail.mailers.smtp.encryption');
            $mail->Port = config('mail.mailers.smtp.port');
            $mail->setFrom(config('mail.from.address'), config('mail.from.name'));
            $mail->addAddress($request->email);
            $mail->addCC(config('app.env') == 'production' ? config('mail.from.address') : 'jeel@yopmail.com');
            $mail->isHTML(true);
            $mail->Subject = "Inquiry Has Been Generated";
            $mail->Body = "
                <div>
                    <p>Inquiry Details : <p>
                    <ul>
                        <li><b>Name :</b> {$request->first_name} {$request->last_name}</li>
                        <li><b>Phone Number :</b> +{$request->phone_code} {$request->mobile_no}</li>
                        <li><b>Email :</b> {$request->email}</li>
                        <li><b>Message :</b> {$request->message}</li>
                    </ul>
                </div>
            ";
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
        }
        return back();
    }
}
