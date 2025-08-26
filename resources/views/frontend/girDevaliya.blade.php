@extends('frontend.layout.main')
@section('title', 'Gir Jungle Safari Booking')
@section('content')
    <div class="breadcrumbs_gir d-flex align-items-center">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade"></div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- ======= Get Started Section ======= -->
    <div id="let-started" class="let-started">
        <div class="container">
            <div class="row justify-content-between gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex align-items-center" data-aos="fade-up">
                    <div class="content">
                        <!-- <h3>Tarrif</h3> -->
                        <table class="table-bordered">
                            <thead class="">
                                <tr>
                                    <th colspan="2" class="py-3 px-6 text-center">
                                        Devalia National Park Safari Booking -Tariff
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white text-black">
                                    <td class="py-3 px-6">Safari Zones</td>
                                    <td class="py-3 px-6">
                                        Devalia Park Gypsy Safari (Maximum 6 Adults and 1 Child
                                        are allowed in 1 Gypsy)
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-6">Price (Indian)</td>
                                    <td class="py-3 px-6">
                                        Prices may vary, Between 4300 to 6500 (Inclusive of
                                        Permit, Gypsy & Guide Charges, Services & Taxes)
                                        Depends on Weekends, Number of Persons, Festivals, Long
                                        Weekends
                                    </td>
                                </tr>
                                <tr class="bg-white text-black">
                                    <td class="py-3 px-6">Price (Foreigner)</td>
                                    <td class="py-3 px-6">
                                        Prices may vary, Between 15500 to 17500 (Inclusive of
                                        Permit, Gypsy & Guide Charges, Services & Taxes)
                                        Depends on Weekends, Number of Persons, Festivals, Long
                                        Weekends
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-6">Note</td>
                                    <td class="py-3 px-6">
                                        The Payment does not guarantee booking confirmation.
                                        Booking would be available only as per seat
                                        availability. After payment, visitors will have to call
                                        us to confirm their booking. If the booking is not
                                        available, your booking will be rescheduled for another
                                        date and time with your consent or will be refunded.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 mobilecalendar" style="margin-top: 24px">
                    @include('frontend.form')
                </div>
                <!-- End Quote Form -->
            </div>
        </div>
    </div>
    <!-- End Get Started Section -->
    <section id="devalia_price" class="devaliaprice">
        <div class="container">
            <div class="section-header">
                <h2>DEVALIA SAFARI TIMING</h2>
            </div>
            <table class="table table-dark table-striped table-bordered border-warning">
                <thead>
                    <tr>
                        <th>Season
                        </th>
                        <th>Days
                        </th>
                        <th>Morning Timings
                        </th>
                        <th>Evening Timings
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="5">
                            <label>
                                Winter
                                <br>
                                (16<sup>th</sup> June<br>
                                To<br>
                                28<sup>th</sup>/29<sup>th</sup> February)</label>
                        </td>
                        <td rowspan="5"><label>Monday To Sunday</label></td>
                    </tr>
                    <tr>
                        <td> <label>7 am to 7:55 am</label></td>
                        <td><label>3 pm to 3:55 pm</label></td>
                    </tr>
                    <tr>
                        <td><label>8 am to 8:55 am</label></td>
                        <td><label>4 pm to 4:55 pm</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label>9 am to 9:55 am</label></td>
                        <td><label>5 pm to 5:55 pm</label></td>
                    </tr>
                    <tr>
                        <td><label>10 am to 10:55 am</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="5">
                            <label>
                                Summer
                                <br>
                                (1<sup>st</sup> March<br>
                                To<br>
                                15<sup>th</sup><sup>th</sup> June)</label>
                        </td>
                        <td rowspan="5"> <label>Monday To Sunday</label></td>
                    </tr>
                    <tr>
                        <td><label>6:30 am to 7:25 am</label></td>
                        <td><label>3:45 pm to 4:40 pm</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label>7:30 am to 8:25 am</label>
                        </td>
                        <td><label>4:45 pm to 5:40 pm</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label>8:30 am to 9:25 am</label>
                        </td>
                        <td><label>5:45 pm to 6:40 pm</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label>9:30 am to 10:25 am</label>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="color: #ff9100; font-size: 18px; text-align: justify;">
                            <strong>Note: Devalia Safari Park remains closed on every wednesday. </strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
        <div class="container">
            <div class="section-header">
                <h1>DEVALIA SAFARI PARK</h1>
                <p>Ever wondered what it feels like to be surrounded by wild animals in their natural habitat? Stop imagining and experience it firsthand at Devalia Safari Park! Located in Talala Gir, Gujarat, this park—also known as the Gir Interpretation Zone—is a compact version of the Gir Jungle
                    Safari. It offers an excellent opportunity to observe wildlife up close without venturing deep into the forest. If you're ready for a wild adventure, don’t wait—book your Devalia Safari online today for a hassle-free experience.
                </p>
                <p>Devalia Safari Park allows you to spot a variety of wild animals quickly and affordably. It's a popular alternative to the full Gir Jungle Safari. The park is well-known for sightings of Asiatic lions, as well as other species such as the blue bull (nilgai), sambar deer, chital, and
                    jackals. Bird lovers will also enjoy seeing vibrant peafowl, vultures, and many other bird species during the ride.
                </p>
            </div>
        </div>
    </section>
    <!-- End Constructions Section -->
    <!-- ======= Services Section ======= -->
    <div id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Interesting Facts About Devalia Safari Park</h2>
                <p>If you’re eager to witness lions up close in their natural surroundings, Devalia Safari Park is a must-visit. Often referred to as "The Majestic Home of Royal Lions," this park is part of the Gir Interpretation Zone and offers a unique glimpse into the wildlife of Gujarat. Sasan Gir
                    National Park was officially declared a protected area by the government on 18th September 1965. Since then, hunting and poaching have been strictly prohibited to safeguard the Asiatic lion population. Outside of Africa, Gir is one of the only places in the world where you can
                    observe these magnificent lions in the wild.
                </p>
            </div>
        </div>
    </div>
    <!-- End Services Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>DEVALIA ENTRY PERMIT</h2>
                <div>
                    <img src="assets/img/arrow.png" alt="devalia entry permit">
                    <p style="text-align: left; margin-top: 20px">
                        A permit pass is required to visit Devalia Park. Since the number of permits is limited, they are issued on a first-come, first-served basis starting each morning at the Tourist Reception Center.
                    </p>
                    <br>
                </div>
                <p style="text-align: left" class="mb-2">
                    Want to skip the long queues for permits? Opt for Devalia Safari Online Booking to secure your permit in advance. You can also pay the entry fees online, making your trip smoother and more organized. Please note that each permit is valid for a single ride only, so plan your schedule
                    accordingly for the best experience. The booking process is simple, quick, and highly convenient.
                </p>
                <p style="text-align: left" class="mb-2">
                    To avoid last-minute hassles, it’s recommended to apply for your permit up to 90 days before your planned visit. You’ll need to submit valid ID proofs for all safari participants, and these same IDs must be carried during the safari. For foreign nationals, only a passport is accepted
                    as valid identification.
                </p>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <section id="constructions" class="constructions">
        <div class="container">
            <div class="section-header">
                <h2>Safety at Gir National Park</h2>
                <p>
                    Gir National Park offers an incredible opportunity to witness wildlife in their natural habitat—and it’s completely safe. All safari tours are led by government-certified guides who are well-trained in handling forest routes and ensuring visitor security. Additionally, the park is
                    equipped with surveillance cameras throughout, allowing you to enjoy the safari with peace of mind.
                </p>
            </div>
        </div>
    </section>
@endsection
