<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

<head>
    @include('layouts.partials/title-meta', ['title' => $title])

    @yield('css')

    @include('layouts.partials/head-css')
</head>

<body>

    @include('layouts.partials/topbar')

    @include('layouts.partials/startbar')

    <div class="page-wrapper">

        <div class="page-content">
            <div class="container-xxl">

                @yield('content')

            </div>

            @include('layouts.partials/endbar')

            @include('layouts.partials/footer')

        </div>
    </div>

    @vite(['resources/js/app.js'])

    @yield('script')

    @include('layouts.partials/vendorjs')


</body>

</html>
