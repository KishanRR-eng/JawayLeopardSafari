<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center header_class_name">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between stickynav" id="navcontainer">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('frontend/img/lpd_logo.png') }}" alt="logo" />
        </a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                {{-- <li><a href="{{ route('about')}}">About Us</a></li> --}}
                <li><a href="{{ request()->route()->getName() == 'root' ? '#checkForm' : route('safari') }}" class=""> Book Safari</a></li>
                <li><a href="{{ request()->route()->getName() == 'root' ? '#checkForm' : route('gallery') }}" class="">gallery</a></li>
                <li><a href="{{ request()->route()->getName() == 'root' ? '#checkForm' : route('blogs') }}" class="">Blog</a></li>
                <li><a href="{{ request()->route()->getName() == 'root' ? '#checkForm' : route('contactUs') }}" class="">Contact us</a></li>
            </ul>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->