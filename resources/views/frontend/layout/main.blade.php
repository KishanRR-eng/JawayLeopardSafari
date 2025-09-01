<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> @yield('title', 'Jawai Leopard Safari | Official Booking Website') </title>
    <link rel=" shortcut icon" type="image/png" sizes="16x16" href="{{ asset('frontend/img/gir_logo.png') }}">
    <!-- Meta Description -->
    <meta name="description" content="Jawai Leopard Safari with licensed jeeps & guides. Official bookings as per Rajasthan Forest Dept. rules. Safe, eco-friendly & best price guarantee.">
    @yield('css')
    @include('frontend.layout.css')
    @if (config('app.env') == 'production')
        <meta name="google-site-verification" content="mDJCF9GYWMRkULW45Ee1vIx7AEaCVFLnXiIYo7rBuu0" />
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-TWVTMB7T');</script>
        <!-- End Google Tag Manager -->

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-87J7C83BGG"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());

            gtag('config', 'G-87J7C83BGG');
        </script>
    @endif
</head>

<body class="bg-light">
    @if (config('app.env') == 'production')
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWVTMB7T" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    @endif
    @include('frontend.layout.header')
    <main id="main">
        @yield('content')
    </main>

    @include('frontend.layout.footer')
    @vite(['resources/js/app.js'])
    @yield('script')
    @include('frontend.layout.script')
</body>

</html>