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
            <div class="row justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex align-items-center" data-aos="fade-up">
                    <div class="content">
                        <!-- <h3>Tarrif</h3> -->
                        <table class="table-bordered">
                            <thead class="">
                                <tr>
                                    <th colspan="2" class="py-3 px-6 text-center">
                                        Gir National Park Safari Booking -Tariff
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white text-black">
                                    <td class="py-3 px-6">Safari Zones</td>
                                    <td class="py-3 px-6">
                                        Gir Jungle Safari (Maximum 6 Adults and 1 Child are
                                        allowed in 1 Gypsy)
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-6">Price (Indian)</td>
                                    <td class="py-3 px-6">
                                        Prices may vary, Between 2900 (Inclusive of
                                        Permit, Gypsy & Guide Charges, Services & Taxes)
                                        Depends on Weekends, Number of Persons, Festivals, Long
                                        Weekends
                                    </td>
                                </tr>
                                <tr class="bg-white text-black">
                                    <td class="py-3 px-6">Price (Foreigner)</td>
                                    <td class="py-3 px-6">
                                        Prices may vary, Between 16500 to 18500 (Inclusive of
                                        Permit, Gypsy & Guide Charges, Services & Taxes)
                                        Depends on Weekends, Number of Persons, Festivals, Long
                                        Weekends
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-6">Note</td>
                                    <td class="py-3 px-6">
                                        Please note that making a payment does not guarantee booking confirmation. Safari bookings are subject to seat availability. After completing the payment, visitors are required to contact us to confirm their reservation.
                                        In case the selected slot is unavailable, we will either reschedule your booking to another date and time with your consent, or process a full refund.
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
    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h1>Gir Jungle Safari</h1>
                <p>
                    If you’re passionate about wildlife and eager to explore a forest teeming with diverse species, then the Gir Jungle Safari is the perfect destination for you.
                </p>
                <p>
                    Also known as Sasan Gir, Gir National Park and Wildlife Sanctuary is located in Gujarat and spans an expansive area of 1,412 square kilometers. The park is home to around 600 Asiatic lions, over 300 bird species, 37 types of reptiles, and 38 species of mammals, offering an incredible
                    experience for nature enthusiasts.
                </p>
                <p>
                    For those seeking a truly memorable adventure and a thrilling safari experience, visiting Gir National Park is an absolute must.
                </p>
            </div>
        </div>
    </section>
    <!-- End Constructions Section -->
    <section id="gir_price" class="gir_pricetable mt-0 pt-0">
        <div class="container">
            <div class="section-header">
                <h2>GIR SAFARI TIMING</h2>
            </div>
            <table class="table table-striped table-bordered border-warning">
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
                        <td data-th="Season">
                            <label>
                                Winter
                                <br>
                                (16<sup>th</sup> October To 28<sup>th</sup>/29<sup>th</sup> February)</label>
                        </td>
                        <td data-th="Days">
                            <label>Monday To Sunday</label>
                        </td>
                        <td data-th=" Morning Timings">
                            <label>6:45 AM to 9:45 AM</label>
                        </td>
                        <td data-th=" Evening Timings">
                            <label>3 PM to 6 PM</label>
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Season">
                            <label>Winter/Summer</label>
                        </td>
                        <td data-th="Days">
                            <label>Monday To Sunday</label>
                        </td>
                        <td data-th=" Morning Timings">
                            <label>8:30 AM to 11:30 AM</label>
                        </td>
                        <td style="text-align: center">
                            <label>- </label>
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Season">
                            <label>
                                Summer
                                <br>
                                (1<sup>st</sup> March To 15<sup>th</sup> June)</label>
                        </td>
                        <td data-th="Days">
                            <label>Monday To Sunday</label>
                        </td>
                        <td data-th=" Morning Timings">
                            <label>6:00 AM to 9:00 AM</label>
                        </td>
                        <td data-th=" Evening Timings">
                            <label>4 PM to 7 PM </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="color: #4E3B31 !important;  font-size: 18px; text-align: justify;">
                            <strong>Note: Gir Jungle Safari is closed from 16th June to 15th Oct every year.
                            </strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- ======= Services Section ======= -->
    <div id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Facts About Gir Jungle Safari</h2>
                <p>
                    What makes the Gir Safari truly unique is the opportunity to witness Asiatic lions and other wildlife roaming freely in their natural environment. These safaris are conducted in open gypsies, operated by trained professionals to ensure both your safety and an unforgettable
                    experience. Exploring Gir National Park is only possible through these authorized gypsy rides—other forms of transport like horses, camels, or elephants are not permitted within the sanctuary.
                </p>
            </div>
        </div>
    </div>
    <!-- End Services Section --> <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
        <div class="container">
            <h3>How to Book a Safari Ride at Gir National Park Online?</h3>
            <p>
                Planning to experience everything Gir National Park has to offer? Then you’ll need to secure your safari booking in advance. Since the park attracts a high number of visitors, walk-in bookings are rarely available. To avoid last-minute hassles, it’s best to reserve your spot early.
                Here’s how you can quickly book your Gir safari online in just a few easy steps:
            </p>
            <dl class="bookingfaq">
                <dt class="mb-2">Go to https://www.girsafaribooking.in/</dt>
                <dt class="mb-2">Enter your full name accurately in the form.</dt>
                <dt class="mb-2">Select your preferred safari date and time slot (morning or afternoon).</dt>
                <dt class="mb-2">Provide the details of the ID proof you'll be carrying with you.</dt>
                <dt class="mb-2">Make sure to bring the same ID during your safari—it’s mandatory.</dt>
                <dt class="mb-2">And in case your plans change, don’t worry—we have a clear refund policy in place.</dt>
            </dl>
        </div>
    </section>
    <!-- End Features Section -->
@endsection
