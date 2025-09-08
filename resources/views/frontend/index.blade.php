@extends('frontend.layout.main')
@section('title', 'Jawai Leopard Safari | Private Booking Website')
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
    <section id="hero mb-hero" class="hero" style="background-image: url('{{ asset('frontend/img/gallery/2.jpg') }}');
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
                <div class="col-lg-5 col-md-12 offset-lg-1" id="checkForm">
                    <form class="firststep_form" method="POST" action="{{ route('bookingInquiry') }}">
                        @csrf
                        <h3 class="form-title text-white">Check Availability & Book</h3>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name*" value="{{ old('first_name') ?? '' }}" required>
                                <div class="text-sm text-danger">{{ $errors->first('first_name') ?? '' }}</div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name*" value="{{ old('last_name') ?? '' }}" required>
                                <div class="text-sm text-danger">{{ $errors->first('last_name') ?? '' }}</div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ old('mobile_no') ?? '' }}" required>
                                <input type="hidden" name="phone_code" id="phone_code" value="{{ old('phone_code') ?? '91' }}">
                                <div class="text-sm text-danger">{{ $errors->first('mobile_no') ?? '' }}</div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email') ?? '' }}">
                                <div class="text-sm text-danger">{{ $errors->first('email') ?? '' }}</div>
                            </div>
                            <div class="col-md-12 mb-2 text-center">
                                <button class="button-29" type="submit">Check availablity</button>
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
                    <a href="#checkForm" class="btn-book">Book Your Safari</a>
                </div>

                <!-- Right Side Image -->
                <div class="col-lg-6 col-md-12 text-center">
                    <img src="{{ asset('frontend/img/jawai-leopard-safari.jpg') }}" alt="Jawai Leopard Safari" class="img-fluid rounded shadow">
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
                <p class="text-muted">Stay updated with the latest news and stories from Jawai Leopard Safari</p>
            </div>
            <div class="row g-4">
                <!-- Blog Card -->
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-card shadow-sm h-100">
                            <div class="blog-img">
                                <a href="{{ route('blogDetails', ['id' => $blog->slug]) }}">
                                    <img src="/storage/{{ storage_path($blog->primary_media_path) }}" alt="Blog" class="img-fluid rounded-top w-100">
                                </a>
                            </div>
                            <div class="blog-content p-3">
                                <a href="{{ route('blogDetails', ['id' => $blog->slug]) }}" class="text-decoration-none">
                                    <h5 class="fw-bold mb-2">{{ $blog->title }}</h5>
                                </a>
                                <a href="{{ route('blogDetails', ['id' => $blog->slug]) }}" class="btn btn-outline-warning btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ===== Google Reviews Section (HTML + CSS only) ===== -->
{{-- <section class="gmb-reviews">
  <div class="gmb-container">
    <header class="gmb-header">
      <div class="gmb-brand">
        <!-- Google "G" logo (SVG) -->
        <svg class="gmb-g" viewBox="0 0 48 48" aria-hidden="true">
          <path fill="#FFC107" d="M43.6 20.5H42V20H24v8h11.3C33.6 31.7 29.3 35 24 35c-6.6 0-12-5.4-12-12S17.4 11 24 11c3 0 5.7 1.1 7.8 3l5.7-5.7C33.6 4.9 29.1 3 24 3 12.4 3 3 12.4 3 24s9.4 21 21 21c10.5 0 20-7.6 20-21 0-1.2-.1-2.3-.4-3.5z"/>
          <path fill="#FF3D00" d="M6.3 14.7l6.6 4.8C14.4 16.2 18.8 13 24 13c3 0 5.7 1.1 7.8 3l5.7-5.7C33.6 4.9 29.1 3 24 3 16 3 9.2 7.3 6.3 14.7z"/>
          <path fill="#4CAF50" d="M24 45c5 0 9.6-1.9 13-5.1l-6-4.9c-2 1.4-4.6 2.2-7 2.2-5.2 0-9.6-3.3-11.1-7.9l-6.6 5.1C9.2 40.7 16 45 24 45z"/>
          <path fill="#1976D2" d="M43.6 20.5H42V20H24v8h11.3c-1.3 3.7-4.8 7-11.3 7-5.2 0-9.6-3.3-11.1-7.9l-6.6 5.1C9.2 40.7 16 45 24 45c10.5 0 20-7.6 20-21 0-1.2-.1-2.3-.4-3.5z"/>
        </svg>
        <div>
          <h2 class="gmb-title">What customers say</h2>
          <p class="gmb-subtitle">Verified Google reviews</p>
        </div>
      </div>

      <div class="gmb-aggregate">
        <div class="gmb-score">
          <span class="gmb-score-number">5.0</span>
          <span class="gmb-score-stars" aria-label="4.8 out of 5 stars">
            <!-- 5 stars -->
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star half">★</span>
          </span>
        </div>
        <div class="gmb-count">Based on 64 Google reviews</div>
        <a class="gmb-btn" href="https://www.google.com/search?sca_esv=a46a1b8edd07c513&hl=en&gl=in&si=AMgyJEtREmoPL4P1I5IDCfuA8gybfVI2d5Uj7QMwYCZHKDZ-E2dILliPLY0UItDZpgViht4860cyPNTQPWz8fuE13dUJCtzFwjWt6RaqzoDJtKhFFhF-9rwzpxHNtzRIoRruHSPpatFkvptXTXoSKLiAKjDStKYpog%3D%3D&q=Jawai+Leopard+Safari+Booking+Reviews&sa=X&ved=2ahUKEwjh0o79x76PAxW9yDgGHTORN8gQ0bkNegQIIhAE&biw=1280&bih=593&dpr=1.5" target="_blank" rel="noopener">
          View on Google
        </a>
      </div>
    </header>

    <div class="gmb-grid">
      <!-- Review Card 1 -->
      <article class="gmb-card">
        <div class="gmb-card-head">
          <div class="gmb-avatar" aria-hidden="true">H</div>
          <div class="gmb-user">
            <h3 class="gmb-name">Hitesh Sharma</h3>
            <div class="gmb-stars" aria-label="5 out of 5 stars">
              <span>★★★★★</span>
            </div>
          </div>
          <time class="gmb-time">sept 2025</time>
        </div>
        <p class="gmb-text">
          Beutiful property with decent atmosphere staff is too good and supportive we enjoyed it a lot
        </p>
        <div class="gmb-badge">From Google</div>
      </article>

      <!-- Review Card 2 -->
      <article class="gmb-card">
        <div class="gmb-card-head">
          <div class="gmb-avatar">N</div>
          <div class="gmb-user">
            <h3 class="gmb-name">Nishpal singh sonigra</h3>
            <div class="gmb-stars" aria-label="5 out of 5 stars">
              <span>★★★★★</span>
            </div>
          </div>
          <time class="gmb-time">Sept 2025</time>
        </div>
        <p class="gmb-text">
          "The drive is unbelievable. To be able to sight one or more leopards is only a bonus. The ride is once in a lifetime experience." 👌🏻👍🏻
        </p>
        <div class="gmb-badge">From Google</div>
      </article>

      <!-- Review Card 3 -->
      <article class="gmb-card">
        <div class="gmb-card-head">
          <div class="gmb-avatar">B</div>
          <div class="gmb-user">
            <h3 class="gmb-name">Bhagwan Singh</h3>
            <div class="gmb-stars" aria-label="5 out of 5 stars">
              <span>★★★★★</span>
            </div>
          </div>
          <time class="gmb-time">Sept 2025</time>
        </div>
        <p class="gmb-text">
          Very good experience with safari in Jawai
Thanks to Gajendra for helping with guide and more exploring in Jawai Rajasthan
        </p>
        <div class="gmb-badge">From Google</div>
      </article>

      <!-- Add more cards as needed -->
    </div>
  </div>
</section> --}}




@endsection
@section('script')
    @vite(['resources/js/pages/forms-advanced.js'])
@endsection
