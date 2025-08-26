<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center header_class_name">
   {{-- <div class="topbar">
   <div class="container">
      <div class="d-flex align-items-center justify-content-between flex-wrap">
         <div class="ticker-container d-flex align-items-center">
            <h3 class="ticker-title fs-6 mb-0 me-2">Latest Updates</h3>
            <div class="ticker-text">
               <p class="mb-0 small">This Website is Owned by Jungle Safari India, Visitors Can Book Safari For Gir Jungle Safari, Devalia Safari Park and Kankai Nature Ride.</p>
            </div>
         </div>
      </div>
   </div>
</div> --}}

   <div class="container-fluid container-xl d-flex align-items-center justify-content-between stickynav"
      id="navcontainer">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('frontend/img/gir_new.png')}}" alt="" />
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
         <ul>
            <li><a href="{{ url('/') }}" class="active">Home</a></li>
            <li><a href="{{route('girJungle')}}" class="">Gir Jungle Safari</a></li>
            <li><a href="{{ route('girDevaliya')}}" class="">Devalia Gypsy Safari</a></li>
            <li><a href="{{ route('contactUs')}}" class="">Contact us</a></li>
         </ul>
      </nav>
      <!-- .navbar -->
   </div>
</header>
<!-- End Header -->
