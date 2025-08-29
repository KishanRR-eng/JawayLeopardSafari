@extends('frontend.layout.main')
@section('title', 'Jaway Leopard Safari Booking')

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.html')">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h1>Booking Details</h1>
        </div>
    </div>
    <section id="contact" class="contact">
        <div class="container">
            <div class="row info-item">
                <div class="col-md-4">
                    <p><strong>Name:</strong> {{ $data->first_name }} {{ $data->last_name }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Mobile no:</strong> +{{ $data->phone_code }} {{ $data->mobile_no }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Email:</strong> {{ $data->email ?? '-' }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Booking Date:</strong> {{ date('Y-m-d', strtotime($data->booking_date)) }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Adult:</strong> {{ $data->adult }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Children:</strong> {{ $data->child }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Time slot:</strong> {{ $data->timeSlot->name }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Transportation Vehicle:</strong> {{ $data->vehicle_name }} ({{ $data->vehicle_price }} /-)</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Price:</strong> {{ $data->price }} /-</p>
                </div>
                <div class="tourist__details mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Person</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->details as $person)
                                <tr>
                                    <td>{{ $person->first_name }} {{ $person->last_name }}</td>
                                    <td>{{ $person->age }}</td>
                                    <td>{{ $genders[$person->gender] }}</td>
                                    <td>{{ $person->type == 0 ? 'Adult' : 'Child' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <p class="text-danger"><strong>Note:</strong> Vehicle charges have to be paid at the location.</p>
                </div>
            </div>
            @if (@session('success') || isset($data->payment_id))
                <div class="alert alert-info border-2 mt-5" role="alert">
                    <h4 class="alert-heading font-18 text-center">Payment Success</h4>
                    <p class="text-center">Your booking has been successfully completed. Thank you for choosing Gir Safari Booking.</p>
                </div>
            @elseif (@session('error'))
                <div class="alert alert-danger border-2 mt-5" role="alert">
                    <h4 class="alert-heading font-18 text-center">Payment Failed</h4>
                    <p class="text-center">Due to payment failure your booking has been not confirmed. Admin will contact you shortly for further process.</p>
                </div>
            @elseif(empty($data->payment_id))
                <form id="paymentForm" action="{{ route('booking.callback', ['id' => request()->route('id')]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="payment_id" value="">
                    <div class="col-md-12 mt-5 text-center">
                        <script class="button-29 w-50" src="https://checkout.razorpay.com/v1/checkout.js" onclick="startPayment()">
                            Pay
                        </script>
                    </div>
                </form>
            @endif
        </div>
    </section>
@endsection
@section('script')
    <script>
        const startPayment = () => {
            const razor = new Razorpay({
                key: "{{ env('RAZORPAY_KEY_ID') }}",
                amount: "{{ $data->price * 100 }}", // Amount in paisa
                currency: "INR",
                name: "Jaway Leopard Safari",
                description: "Booking Payment",
                handler: function(response) {
                    // Handle successful payment here
                    $('input[name="payment_id"]').val(response.razorpay_payment_id);
                    $('form#paymentForm').submit();
                },
                prefill: {
                    name: "Jaway Leopard Safari",
                    email: "jawaijunglecamp2019@gmail.com",
                    contact: "+91 7339919554"
                },
            });
            razor.open();
        }
    </script>
@endsection
