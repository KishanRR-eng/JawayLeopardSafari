<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="{{ route('backend.booking.index') }}" class="logo">
            <span>
                <img src="{{ asset('frontend/img/gir_logo.png') }}" width="100px" alt="logo-small" class="logo">
            </span>
        </a>
    </div>
    <!--end brand-->
    <!--start startbar-menu-->
    <div class="startbar-menu">
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">
                <!-- Navigation -->
                <ul class="navbar-nav mb-auto w-100">
                    <li class="menu-label pt-0 mt-0">
                        <span>Main Menu</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.disabled.slot.index') }}">
                            <i class="iconoir-timer-off menu-icon"></i>
                            <span>Disabled Slots</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.package.index') }}">
                            <i class="fa-solid fa-suitcase-rolling menu-icon"></i>
                            <span>Packages</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.booking.index') }}">
                            <i class="fa-solid fa-suitcase-rolling menu-icon"></i>
                            <span>Bookings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.blog.index') }}">
                            <i class="fa-solid fa-rss menu-icon"></i>
                            <span>Blog</span>
                        </a>
                    </li>
                </ul><!--end navbar-nav--->

            </div>
        </div><!--end startbar-collapse-->
    </div><!--end startbar-menu-->
</div><!--end startbar-->
<div class="startbar-overlay d-print-none"></div>
