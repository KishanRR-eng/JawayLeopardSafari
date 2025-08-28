<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryRequest;
use App\Http\Requests\StoreBookingDetailRequest;
use App\Http\Requests\StoreFormRequest;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\DisabledSlot;
use App\Models\Package;
use App\Models\TimeSlot;
use App\Models\TransportationVehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use PHPMailer\PHPMailer\PHPMailer;
use Razorpay\Api\Api;
use ZipArchive;

class FrontendController
{
    protected $genders = ['Male', 'Female', 'Other'];
    protected $identityProofTypes = ['None', 'Aadhar Card', 'Pan Card', 'Driving License', 'Passport'];

    public function index()
    {
        return view('frontend.index')->with('error', 'Booking details already submitted.');
    }

    public function girJungle()
    {
        return view('frontend.girJungle', [
            'weekday' => (object)[
                'indian' => Package::with(['transportationVehicles'])->where(['status' => true, 'type' => '0', 'tourist_type' => '0', 'day_type' => '0'])->first(),
                'foreigner' => Package::with(['transportationVehicles'])->where(['status' => true, 'type' => '0', 'tourist_type' => '1', 'day_type' => '0'])->first(),
            ],
            'weekend' => (object)[
                'indian' => Package::with(['transportationVehicles'])->where(['status' => true, 'type' => '0', 'tourist_type' => '0', 'day_type' => '1'])->first(),
                'foreigner' => Package::with(['transportationVehicles'])->where(['status' => true, 'type' => '0', 'tourist_type' => '1', 'day_type' => '1'])->first(),
            ],
            'slots' => TimeSlot::where('type', '0')->get(),
            'disabledSlots' => DisabledSlot::whereHas('timeSlot', function ($q) {
                $q->where('type', '0');
            })->where('date', '>=', date('Y-m-d'))->get()
        ]);
    }

    public function girDevaliya()
    {
        return view('frontend.girDevaliya', [
            'weekday' => (object)[
                'indian' => Package::with(['transportationVehicles'])->where(['status' => true, 'type' => '1', 'tourist_type' => '0', 'day_type' => '0'])->first(),
                'foreigner' => Package::with(['transportationVehicles'])->where(['status' => true, 'type' => '1', 'tourist_type' => '1', 'day_type' => '0'])->first(),
            ],
            'weekend' => (object)[
                'indian' => Package::with(['transportationVehicles'])->where(['status' => true, 'type' => '1', 'tourist_type' => '0', 'day_type' => '1'])->first(),
                'foreigner' => Package::with(['transportationVehicles'])->where(['status' => true, 'type' => '1', 'tourist_type' => '1', 'day_type' => '1'])->first(),
            ],
            'slots' => TimeSlot::where('type', '1')->get(),
            'disabledSlots' => DisabledSlot::whereHas('timeSlot', function ($q) {
                $q->where('type', '1');
            })->where('date', '>=', date('Y-m-d'))->get()
        ]);
    }

    public function contactus()
    {
        return view('frontend.contactUs');
    }

    public function faq()
    {
        return view('frontend.faq');
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
    public function blog()
    {
        return view('frontend.blog');
    }
    public function bdetails()
    {
        return view('frontend.bdetails');
    }
    public function terms()
    {
        return view('frontend.terms');
    }
    public function booking(StoreFormRequest $request)
    {
        try {
            $id = explode('-', $request->vehicle);
            $package = Package::find($id[0]);
            $vehicle = TransportationVehicle::find($id[1]);
            $request->mobile_no = preg_replace('/\s+/', "", $request->phone_code == '91' ? ltrim($request->mobile_no, '0') : $request->mobile_no);

            $booking = Booking::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_code' => $request->phone_code,
                'mobile_no' => $request->mobile_no,
                'email' => $request->email,
                'price' => $package->price,
                'time_slot_id' => $request->timing,
                'vehicle_name' => $vehicle->name,
                'seats' => $vehicle->seats,
                'vehicle_price' => $vehicle->price,
                'adult' => $request->adults,
                'child' => $request->children,
                'tourist_type' => $package->tourist_type,
                'day_type' => $package->day_type,
                'type' => $package->type,
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
                $filePath = null;
                // if (isset($request->adult_identity[$key]) && !empty($request->adult_identity[$key])) {
                //     $fileName = $request->adult_identity[$key]->getClientOriginalName();
                //     $fileName = File::name($fileName) . '_' . time() . '.' . File::extension($fileName);
                //     $filePath = BookingDetail::$path . '/' . $id . '/' . $fileName;
                //     $request->adult_identity[$key]->move(Storage::disk('public')->path(BookingDetail::$path), $fileName);
                // }
                if (isset($adultBookingDetails[$key])) {
                    // Storage::disk('public')->delete($adultBookingDetails[$key]->identity_proof);

                    $adultBookingDetails[$key]->first_name = $value;
                    $adultBookingDetails[$key]->last_name = $request->adult_last_name[$key];
                    $adultBookingDetails[$key]->age = $request->adult_age[$key];
                    $adultBookingDetails[$key]->gender = $request->adult_gender[$key];
                    $adultBookingDetails[$key]->identity_proof_type = $request->adult_identity_proof_type[$key];
                    $adultBookingDetails[$key]->identity_proof_id = empty($request->adult_identity_proof_id[$key]) ? null : $request->adult_identity_proof_id[$key];
                    $adultBookingDetails[$key]->identity_proof = $filePath;
                    $adultBookingDetails[$key]->save();
                } else {
                    BookingDetail::create([
                        'booking_id' => $id,
                        'first_name' => $value,
                        'last_name' => $request->adult_last_name[$key],
                        'age' => $request->adult_age[$key],
                        'gender' => $request->adult_gender[$key],
                        'identity_proof_type' => $request->adult_identity_proof_type[$key],
                        'identity_proof_id' => empty($request->adult_identity_proof_id[$key]) ? null : $request->adult_identity_proof_id[$key],
                        'identity_proof' => $filePath,
                        'type' => '0',
                    ]);
                }
            }

            if (isset($request->child_first_name)) {
                $childBookingDetails = BookingDetail::where(['booking_id' => $id, 'type' => '1'])->get();
                foreach ($request->child_first_name as $key => $value) {
                    $filePath = null;
                    // if (isset($request->child_identity[$key]) && !empty($request->child_identity[$key])) {
                    //     $fileName = $request->child_identity[$key]->getClientOriginalName();
                    //     $fileName = File::name($fileName) . '_' . time() . '.' . File::extension($fileName);
                    //     $filePath = BookingDetail::$path . '/' . $id . '/' . $fileName;
                    //     $request->child_identity[$key]->move(Storage::disk('public')->path(BookingDetail::$path), $fileName);
                    // }
                    if (isset($childBookingDetails[$key])) {
                        // Storage::disk('public')->delete($childBookingDetails[$key]->identity_proof);

                        $childBookingDetails[$key]->first_name = $value;
                        $childBookingDetails[$key]->last_name = $request->child_last_name[$key];
                        $childBookingDetails[$key]->age = $request->child_age[$key];
                        $childBookingDetails[$key]->gender = $request->child_gender[$key];
                        $childBookingDetails[$key]->child_identity_proof_type = $request->child_identity_proof_type[$key];
                        $childBookingDetails[$key]->child_identity_proof_id = empty($request->child_identity_proof_id[$key]) ? null : $request->child_identity_proof_id[$key];
                        $childBookingDetails[$key]->identity_proof = $filePath;
                        $childBookingDetails[$key]->save();
                    } else {
                        BookingDetail::create([
                            'booking_id' => $id,
                            'first_name' => $value,
                            'last_name' => $request->child_last_name[$key],
                            'age' => $request->child_age[$key],
                            'gender' => $request->child_gender[$key],
                            'identity_proof_type' => $request->child_identity_proof_type[$key],
                            'identity_proof_id' => empty($request->child_identity_proof_id[$key]) ? null : $request->child_identity_proof_id[$key],
                            'identity_proof' => $filePath,
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
            'identityProofTypes' => $this->identityProofTypes
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

    public function inquiry(InquiryRequest $request)
    {
        try {
            $request->mobile_no = preg_replace('/\s+/', "", $request->phone_code == '91' ? ltrim($request->mobile_no, '0') : $request->mobile_no);;
            $type = $request->type == '0' ? 'Gir Jungle Safari' : 'Devalia Safari';

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
                        <li><b>Safari :</b> {$type}</li>
                    </ul>
                </div>
            ";
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
        }
        return redirect()->route($request->type == '0' ? 'girJungle' : 'girDevaliya')->with([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
        ]);
    }

    /**
     * Download the specified resource from storage.
     */
    public function download(Request $request)
    {
        try {
            if ($request->downloadType == 'single') {
                $filePath = $request->id;
                $fileNameExplode = explode('/', $filePath);
                $fileName = end($fileNameExplode);
                ob_end_clean();
                $contentType = File::mimeType(Storage::path('/public/' . $filePath));
                $headers = ['Content-Type' => $contentType, 'fileName' => $fileName];
                return Storage::download('/public/' . $filePath, $fileName, $headers);
            } else {
                $zip = new ZipArchive();
                $idExplode = explode('/', $request->id);
                $attachments = BookingDetail::whereIn(['id' => $idExplode[0], 'type' => end($idExplode)])->get();

                $fileName = 'attachments_' . time() . '.zip';
                $filePath = BookingDetail::$downloadPath . '/' . $fileName;

                if ($zip->open(Storage::path($filePath), ZipArchive::CREATE) === TRUE) {
                    foreach ($attachments as $attachment) {
                        $path = $attachment->identity_proof;
                        $absolutePath = Storage::path("public/$path");
                        $nameFolder = $attachment->type == 0 ? 'Adult' : 'Children';
                        $fileNameInZip = $nameFolder . '/' . basename($absolutePath);
                        $zip->addFile($absolutePath, $fileNameInZip);
                    }
                    $zip->close();

                    ob_end_clean(); // Ensure clean output for download
                    $contentType = File::mimeType(Storage::path($filePath));
                    $headers = ['Content-Type' => $contentType, 'fileName' => $fileName];
                    return response()->download(Storage::path($filePath), $fileName, $headers)->deleteFileAfterSend(true);
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Could not create ZIP file'], 500);
                    abort(404);
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }
}
