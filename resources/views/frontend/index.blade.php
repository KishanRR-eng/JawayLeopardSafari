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
<section id="hero" class="hero" style="background-image: url('{{ asset('frontend/img/jawai-leopard-safari-booking-desktop-banner.webp') }}');
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
            <h3 class="text-left">Updates</h3>
            <ul class="updates mt-2">
               <li><span>Innovative Conservation Through Technology: Research and Monitoring in the Gir Ecosystem</span></li>
               <li><span>Exploring Gir’s Natural Colors</span></li>
               <li><span>World Lion Day: A Tribute to the King of the Jungle</span></li>
               <li><span>An Unlikely Standoff: Will the Turtle Survive the Lion Encounter?</span></li>
               <li><span>Early Insights into the Habitats and Migration Paths of Four Endangered Raptors in Central Asia</span></li>
            </ul>
         </div>

         <!-- Right Side Inquiry Form -->
         <div class="col-lg-5 col-md-12 offset-lg-1">
            <form class="firststep_form" method="POST" action="{{ route('inquiry') }}">
               @csrf
               <h3 class="form-title">Check Availability & Book</h3>
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
        <a href="{{route('girJungle')}}" class="btn-book">Book Your Safari</a>
      </div>

      <!-- Right Side Image -->
      <div class="col-lg-6 col-md-12 text-center">
        <img src="{{asset('frontend/img/jawai-leopard-safari.jpg')}}"
             alt="Jawai Leopard Safari" class="img-fluid rounded shadow">
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
      💡 Tip: Book at least 1–2 days in advance to get your preferred time slot and better chances of spotting leopards.
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

    <div class="row g-4">
      <!-- By Air -->
      <div class="col-lg-4 col-md-6">
        <div class="reach-box h-100">
          <h3 class="reach-title">By Air</h3>
          <p class="reach-text">
            The nearest airport is <strong>Udaipur Maharana Pratap Airport (UDR)</strong>, approximately 140 km from Jawai.
            Udaipur is well-connected to major Indian cities like Delhi, Mumbai, and Jaipur.
            From the airport, you can hire a taxi or take a pre-arranged transfer to Jawai.
          </p>
        </div>
      </div>

      <!-- By Train -->
      <div class="col-lg-4 col-md-6">
        <div class="reach-box h-100">
          <h3 class="reach-title">By Train</h3>
          <p class="reach-text">
            The closest railway stations are <strong>Jawai Bandh Railway Station (20 km)</strong> and
            <strong>Falna Railway Station (30 km)</strong>.
            Both have good connectivity with major cities such as Mumbai, Delhi, Ahmedabad, and Jaipur.
            Local taxis and jeeps are available at the stations for onward travel to Jawai.
          </p>
        </div>
      </div>

      <!-- By Road -->
      <div class="col-lg-4 col-md-12">
        <div class="reach-box h-100">
          <h3 class="reach-title">By Road</h3>
          <p class="reach-text">
            Jawai is accessible via well-maintained highways from nearby cities:
          </p>
          <ul class="reach-list">
            <li>Udaipur to Jawai: <strong>3.5 hours (140 km)</strong></li>
            <li>Jodhpur to Jawai: <strong>3 hours (120 km)</strong></li>
            <li>Ahmedabad to Jawai: <strong>6-7 hours (320 km)</strong></li>
          </ul>
          <p class="reach-text">
            Private taxis, rental cars, and buses connect Jawai with these cities.
            The drive offers scenic views of Rajasthan’s countryside.
          </p>
        </div>
      </div>
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
         <div class="col-md-6 col-lg-4">
            <div class="blog-card shadow-sm h-100">
               <div class="blog-img">
                  <a href="{{route('bdetails')}}">
                  <img src="{{asset('frontend/img/jawai-leopard-safari.jpg')}}" alt="Blog" class="img-fluid rounded-top w-100">
                  </a>
               </div>
               <div class="blog-content p-3">
                  <a href="{{route('bdetails')}}" class="text-decoration-none">
                     <h5 class="fw-bold mb-2">Safari Experience Guide</h5>
                  </a>
                  <p class="text-muted mb-3 truncate-text">
                     Make the most of your wildlife adventure with these essential do’s and don’ts.
                     Exploring the jungle is a once-in-a-lifetime experience, but it comes with responsibilities. To ensure your safety, respect for wildlife, and a smooth journey, please follow the guidelines below
                  </p>
                  <a href="{{route('bdetails')}}" class="btn btn-outline-warning btn-sm">Read More</a>
               </div>
            </div>
         </div>
         <!-- Repeat Cards -->
         <div class="col-md-6 col-lg-4">
            <div class="blog-card shadow-sm h-100">
               <div class="blog-img">
                  <a href="{{route('bdetails')}}">
                  <img src="{{asset('frontend/img/jawai-leopard-safari.jpg')}}" alt="Blog" class="img-fluid rounded-top w-100">
                  </a>
               </div>
               <div class="blog-content p-3">
                  <a href="{{route('bdetails')}}" class="text-decoration-none">
                     <h5 class="fw-bold mb-2">Safari Experience Guide</h5>
                  </a>
                  <p class="text-muted mb-3 truncate-text">
                     Learn about the latest conservation initiatives protecting the Asiatic lion and biodiversity of Gir National Park...
                  </p>
                  <a href="{{route('bdetails')}}" class="btn btn-outline-warning btn-sm">Read More</a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="blog-card shadow-sm h-100">
               <div class="blog-img">
                  <a href="{{route('bdetails')}}">
                  <img src="{{asset('frontend/img/jawai-leopard-safari.jpg')}}" alt="Blog" class="img-fluid rounded-top w-100">
                  </a>
               </div>
               <div class="blog-content p-3">
                  <a href="{{route('bdetails')}}" class="text-decoration-none">
                     <h5 class="fw-bold mb-2">Safari Experience Guide</h5>
                  </a>
                  <p class="text-muted mb-3 truncate-text">
                     Make the most of your wildlife adventure with these essential do’s and don’ts.
                     Exploring the jungle is a once-in-a-lifetime experience, but it comes with responsibilities. To ensure your safety, respect for wildlife, and a smooth journey, please follow the guidelines below
                  </p>
                  <a href="{{route('bdetails')}}" class="btn btn-outline-warning btn-sm">Read More</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@section('script')
@vite(['resources/js/pages/forms-advanced.js'])
@endsection
