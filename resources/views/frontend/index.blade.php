@extends('frontend.layout.main')
@section('title', 'Jaway Leapord Safari')
@section('css')
    @vite(['node_modules/intl-tel-input/build/css/intlTelInput.min.css', 'node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
    <style>
        .iti--allow-dropdown {
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <!-- ======= Hero Section ======= -->
    <!-- Hero Section -->
    <section id="hero" class="hero"
        style="background-image: url('{{ asset('frontend/img/leopard.jpg') }}');
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
          min-height: 100vh;
          display: flex;
          align-items: center; ">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Side Text -->
                <div class="col-lg-6 col-md-12 text-white text-center text-lg-start mb-5 mb-lg-0">
                    <h3 class="text-left text-white">Updates</h3>
                    <ul class="updates mt-2">
                        <li><span>Innovative Conservation Through Community and Culture: Safeguarding Leopards in Jawai</span></li>
                        <li><span>Exploring the Natural Palette of Jawai’s Granite Hills and Rivers</span></li>
                        <li><span>World Leopard Day: Celebrating the Mystique of Jawai’s Spotted Predator</span></li>
                        <li><span>The Unexpected Encounter: Leopards and Shepherds Sharing the Same Landscape</span></li>
                        <li><span>Early Discoveries into Jawai’s Unique Coexistence of Leopards, Birds, and Crocodiles</span></li>
                    </ul>
                </div>

                <!-- Right Side Inquiry Form -->
                <div class="col-lg-5 col-md-12 offset-lg-1">
                    <form class="firststep_form" method="POST" action="{{ route('inquiry') }}">
                        @csrf
                        <h3 class="form-title text-white">Check Availability & Book</h3>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Enter First Name*" value="{{ old('first_name') ?? '' }}" required>
                                <div class="text-sm text-danger">{{ $errors->first('first_name') ?? '' }}</div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Enter Last Name*" value="{{ old('last_name') ?? '' }}" required>
                                <div class="text-sm text-danger">{{ $errors->first('last_name') ?? '' }}</div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                                    value="{{ old('mobile_no') ?? '' }}" required>
                                <input type="hidden" name="phone_code" id="phone_code"
                                    value="{{ old('phone_code') ?? '91' }}">
                                <div class="text-sm text-danger">{{ $errors->first('mobile_no') ?? '' }}</div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter Email" value="{{ old('email') ?? '' }}">
                                <div class="text-sm text-danger">{{ $errors->first('email') ?? '' }}</div>
                            </div>
                            <div class="col-md-12 mb-2 text-center">
                                <button class="button-29" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>



    {{-- why visit --}}
    <section class="jawai-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Text -->
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <h2 class="section-title">Welcome to Jawai Leopard Safari</h2>
                    <h4 class="section-subtitle">Why You Should Visit Jawai Leopard Safari</h4>
                    <p class="section-text">
                        Jawai Leopard Safari is where wilderness meets serenity. Nestled in the rugged hills of Rajasthan,
                        it’s one of the rare places on earth where leopards roam freely among stunning granite landscapes
                        and live in harmony with local communities. From breathtaking sunsets to vibrant birdlife and the
                        cultural charm of the Rabari shepherds, every moment here is unforgettable.
                    </p>
                    <p class="section-text">
                        Discover the thrill of the wild, the beauty of nature, and the soul of Rajasthan—all in one journey.
                    </p>
                    <a href="{{ route('safari') }}" class="btn-book">Book Your Safari</a>
                </div>

                <!-- Right Side Image -->
                <div class="col-lg-6 col-md-12 text-center">
                    <img src="{{ asset('frontend/img/jawai-leopard-safari.jpg') }}" alt="Jawai Leopard Safari"
                        class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    {{-- ends --}}

    {{-- how to book safari --}}
    <section class="booking-steps">
        <div class="container">
            <h2 class="section-title">How to Book Your Jawai Leopard Safari</h2>
            <p class="section-subtitle">
                Booking your Jawai Leopard Safari is quick and simple. Just follow these steps:
            </p>

            <div class="steps-wrapper">
                <!-- Step 1 -->
                <div class="step">
                    <div class="step-circle">1</div>
                    <div class="step-content">
                        <h3>Choose Your Safari</h3>
                        <p>Morning or Evening, Private or Group Jeep Safari.</p>
                    </div>
                </div>
                <div class="arrow">➔</div>

                <!-- Step 2 -->
                <div class="step">
                    <div class="step-circle">2</div>
                    <div class="step-content">
                        <h3>Check Dates</h3>
                        <p>Tell us your travel date so we can confirm availability.</p>
                    </div>
                </div>
                <div class="arrow">➔</div>

                <!-- Step 3 -->
                <div class="step">
                    <div class="step-circle">3</div>
                    <div class="step-content">
                        <h3>Get Price & Details</h3>
                        <p>We share the ticket price, timings, and safari info.</p>
                    </div>
                </div>
                <div class="arrow">➔</div>

                <!-- Step 4 -->
                <div class="step">
                    <div class="step-circle">4</div>
                    <div class="step-content">
                        <h3>Confirm & Pay</h3>
                        <p>Reserve your seat online or through WhatsApp/Call.</p>
                    </div>
                </div>
                <div class="arrow">➔</div>

                <!-- Step 5 -->
                <div class="step">
                    <div class="step-circle">5</div>
                    <div class="step-content">
                        <h3>Enjoy the Safari</h3>
                        <p>Meet at the starting point and explore the wild with our expert local guide.</p>
                    </div>
                </div>
            </div>

            <p class="tip-box">
                💡 Tip: Book at least 1–2 days in advance to get your preferred time slot and better chances of spotting
                leopards.
            </p>
        </div>
    </section>

    {{-- END how to book --}}
    <!-- ======= how to reach ======= -->
   <section class="how-to-reach py-5 bg-light">
  <div class="container">
    <div class="section-heading text-center mb-5">
      <h2 class="title">How to Reach Jawai</h2>
      <p class="subtitle">Explore different travel options to comfortably reach Jawai</p>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle text-center reach-table">
        <thead class="table-primary">
          <tr>
            <th scope="col">Mode</th>
            <th scope="col">Nearest Point</th>
            <th scope="col">Distance</th>
            <th scope="col">Connectivity</th>
            <th scope="col">Travel Option</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>By Air</strong></td>
            <td>Udaipur Maharana Pratap Airport (UDR)</td>
            <td>140 km</td>
            <td>Delhi, Mumbai, Jaipur (Direct Flights)</td>
            <td>Taxis / Pre-arranged Transfers</td>
          </tr>
          <tr>
            <td><strong>By Train</strong></td>
            <td>
              Jawai Bandh (20 km) <br>
              Falna (30 km)
            </td>
            <td>20–30 km</td>
            <td>Mumbai, Delhi, Ahmedabad, Jaipur</td>
            <td>Local Taxis / Jeeps</td>
          </tr>
          <tr>
            <td><strong>By Road</strong></td>
            <td>
              Udaipur – 140 km <br>
              Jodhpur – 120 km <br>
              Ahmedabad – 320 km
            </td>
            <td>3–7 hours</td>
            <td>Highways, Scenic Drive</td>
            <td>Private Taxis / Cars / Buses</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
    <!-- how to reach -->
    <section class="blog-section py-5">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="fw-bold">Latest Blogs</h2>
                <p class="text-muted">Stay updated with the latest news and stories from Jaway Leapord Safari</p>
            </div>
            <div class="row g-4">
                <!-- Blog Card -->
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-card shadow-sm h-100">
                            <div class="blog-img">
                                <a href="{{ route('blogDetails', ['id' => $blog->slug]) }}">
                                    <img src="/storage/{{ storage_path($blog->primary_media_path) }}" alt="Blog"
                                        class="img-fluid rounded-top w-100">
                                </a>
                            </div>
                            <div class="blog-content p-3">
                                <a href="{{ route('blogDetails', ['id' => $blog->slug]) }}" class="text-decoration-none">
                                    <h5 class="fw-bold mb-2">{{ $blog->title }}</h5>
                                </a>
                                <a href="{{ route('blogDetails', ['id' => $blog->slug]) }}"
                                    class="btn btn-outline-warning btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('script')
    @vite(['resources/js/pages/forms-advanced.js'])
@endsection
