@extends('frontend.layout.main')
@section('title', 'Booking - Jawai Leopard Safari')
@section('content')
<div class="breadcrumbs_gir d-flex align-items-center">
</div>
<!-- End Breadcrumbs -->
<!-- ======= Get Started Section ======= -->
<div id="let-started" class="let-started section-bg">
   <div class="overlay"></div>
   <div class="container position-relative">
      <div class="section-title text-center mb-5 text-white">
         <h2 class="fw-bold" style="color: #C98A45;">Safari Booking – Jawai Leopard Safari</h2>
         {{-- <p class="text-light">Secure your seat and get closer to the majestic leopards of Jawai</p> --}}
      </div>
      <div class="row justify-content-between">
         <!-- Tariff Table -->
         <div class="col-lg-6 order-2 order-lg-1 d-flex align-items-center">
            <div class="content w-100 card-box">
               <table class="tariff-table">
                  <thead>
                     <tr>
                        <th colspan="2">Jawai Leopard Safari - Tariff</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Safari Zones</td>
                        <td>Jawai Leopard Safari (Max 6 Adults + 1 Child per Gypsy)</td>
                     </tr>
                     <tr>
                        <td>Price (Indian)</td>
                        <td>
                           ₹4000 – ₹5000 (Inclusive of Permit, Gypsy, Guide Charges, Services & Taxes).
                           Varies by weekends, number of persons, festivals, and holidays.
                        </td>
                     </tr>
                     <tr>
                        <td>Price (Foreigner)</td>
                        <td>
                           ₹4000 – ₹5000 (Inclusive of Permit, Gypsy, Guide Charges, Services & Taxes).
                           Varies by weekends, number of persons, festivals, and holidays.
                        </td>
                     </tr>
                    <tr>
  <td>Note</td>
  <td>
    Once the payment is made, you will receive confirmation by WhatsApp and email.
    <br/>If you wish to change or reschedule, please call us at <b>+91-7339919554</b> (our official booking number).
    <br/><br/>

    <b>Safari Rates</b><br/>
    Weekdays: ₹4,000 per jeep<br/>
    Weekends: ₹4,500 per jeep<br/>
    Peak season (Diwali: 18–26 Oct, New Year: 22–31 Dec): ₹5,000 per jeep<br/>
    <i>All rates are inclusive of permit, gypsy, guide charges, services, and taxes.</i>
    <br/><br/>

    <b>Advance Payment</b><br/>
    ₹1,500 for weekdays<br/>
    ₹2,000 for weekends<br/>
    Remaining balance can be paid at the safari starting point (cash/online).
    <br/><br/>

    <b>Contact</b><br/>
    Concern Person: Gajendra Singh (Owner)<br/>
    📞 Phone: +91-7339919554<br/>
    📧 Email: <a href="mailto:info@jawaileopardsafaribooking.in">info@jawaileopardsafaribooking.in</a><br/>
    🌐 Website: <a href="https://www.jawaileopardsafaribooking.in" target="_blank">www.jawaileopardsafaribooking.in</a>
    <br/><br/>

    <b>Disclaimer</b><br/>
    We are a private safari booking agency. This is not an official government portal.<br/>
    All safaris are operated with licensed gypsies and trained local guides.
    <br/><br/>

    <b>Please review our policies before booking:</b><br/>
    <a href="{{ route('terms')}}" target="_blank">Terms of Use</a><br/>
    <a href="{{ route('privacy')}}" target="_blank">Privacy Policy</a><br/>
    <a href="{{ route('cancellationpolicy')}}" target="_blank">Cancellation Policy</a>
  </td>
</tr>

                  </tbody>
               </table>
            </div>
         </div>
         <!-- Booking Form -->
         <div class="col-lg-6 order-lg-2 order-1 mobilecalendar card-box mt-3 mt-lg-0">
            @include('frontend.form')
         </div>
      </div>
   </div>
</div>
<!-- End Get Started Section -->
<!-- ======= Services Section ======= -->
<section class="packages-section" id="safari-pack">
   <h2 class="packages-heading">Safari Packages</h2>
   <div class="packages-grid">
      <!-- Morning Safari -->
      <div class="package-card">
         <h3 class="package-title">Morning Leopard Safari</h3>
         <p class="package-info"><i class="fas fa-clock"></i> 5:30 AM – 8:30 AM</p>
         <p class="package-info"><i class="fas fa-hourglass-half"></i> Duration: 3 hours</p>
         <p class="package-price">₹4,000 / Jeep (up to 6) | ₹1,000 / Person (shared)</p>
         <div class="package-highlights">
            <strong>Highlights:</strong>
            <ul>
               <li>Leopard Safari </li>
               <li>Adventure hill ride</li>
               <li>Dam visit</li>
               <li>Bird Watching</li>
               <li>Adventure hill ride</li>
               <li>Sunrise point</li>
               <li>Additional HI-TEA charges : 100/- per person</li>
            </ul>
         </div>
         <div class="package-includes">
            <strong>Includes:</strong>
            <ul>
               <li>4x4 open jeep</li>
               <li>Expert guide</li>
               <li>Park permits</li>
            </ul>
         </div>
      </div>
      <!-- Evening Safari -->
      <div class="package-card">
         <h3 class="package-title">Afternoon Leopard Safari</h3>
         <p class="package-info"><i class="fas fa-clock"></i> 11:00 PM – 2:00 PM</p>
         <p class="package-info"><i class="fas fa-hourglass-half"></i> Duration: 3 hours</p>
         <p class="package-price">₹4,000 / Jeep (up to 6) | ₹1,000 / Person (shared)</p>
         <div class="package-highlights">
            <strong>Highlights:</strong>
            <ul>
               <li>Leopard Safari </li>
               <li>Adventure hill ride</li>
               <li>Dam visit</li>
               <li>Bird Watching</li>
               <li>Adventure hill ride</li>
               <li>Sunrise point</li>
               <li>Additional HI-TEA charges : 100/- per person</li>
            </ul>
         </div>
         <div class="package-includes">
            <strong>Includes:</strong>
            <ul>
               <li>4x4 open jeep</li>
               <li>Expert guide</li>
               <li>Park permits</li>
            </ul>
         </div>
      </div>
      <!-- Full Day Safari -->
      <div class="package-card">
         <h3 class="package-title">Evening Safari</h3>
         <p class="package-info"><i class="fas fa-clock"></i> 4:30 AM – 7:30 PM</p>
         <p class="package-info"><i class="fas fa-hourglass"></i> Duration: 3 hours</p>
         <p class="package-price">₹4,000 / Jeep (up to 6) | ₹1,000 / Person (shared)</p>
         <div class="package-highlights">
            <strong>Highlights:</strong>
            <ul>
               <li>Leopard Safari </li>
               <li>Adventure hill ride</li>
               <li>Dam visit</li>
               <li>Bird Watching</li>
               <li>Adventure hill ride</li>
               <li>Sunrise point</li>
               <li>Additional HI-TEA charges : 100/- per person</li>
            </ul>
         </div>
         <div class="package-includes">
            <strong>Includes:</strong>
            <ul>
               <li>Jeep & permits</li>
               <li>Expert guide</li>
               <li>4X4 open jeep</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- What to Pack Section -->
<section class="safari-pack" id="safari-pack">
   <div class="container">
      <h2 class="section-title">What to Pack for Jawai Safari</h2>
      <p class="section-description">Be well-prepared for your safari experience with these essentials for comfort, safety, and unforgettable memories.</p>
      <div class="pack-list">
         <div class="pack-item">
            <i class="fas fa-tshirt"></i>
            <h4>Lightweight Clothing</h4>
            <p>Neutral, breathable fabrics help you blend with nature and stay comfortable.</p>
         </div>
         <div class="pack-item">
            <i class="fas fa-shoe-prints"></i>
            <h4>Comfortable Shoes</h4>
            <p>Durable walking shoes are a must for safaris and village explorations.</p>
         </div>
         <div class="pack-item">
            <i class="fas fa-sun"></i>
            <h4>Sun Protection</h4>
            <p>Carry a hat, sunglasses, and sunscreen to protect against harsh sun.</p>
         </div>
         <div class="pack-item">
            <i class="fas fa-binoculars"></i>
            <h4>Binoculars</h4>
            <p>Spot leopards and other wildlife from a safe distance.</p>
         </div>
         <div class="pack-item">
            <i class="fas fa-camera"></i>
            <h4>Camera</h4>
            <p>A camera with a zoom lens is perfect for capturing safari moments.</p>
         </div>
         <div class="pack-item">
            <i class="fas fa-vest"></i> <!-- Custom icon may be needed -->
            <h4>Light Jacket</h4>
            <p>Keep warm during chilly mornings and evenings.</p>
         </div>
         <div class="pack-item">
            <i class="fas fa-water"></i>
            <h4>Reusable Water Bottle</h4>
            <p>Stay hydrated throughout your safari journey.</p>
         </div>
         <div class="pack-item">
            <i class="fas fa-bug"></i>
            <h4>Insect Repellent</h4>
            <p>Protect yourself from mosquitoes and other insects.</p>
         </div>
         <div class="pack-item">
            <i class="fas fa-first-aid"></i>
            <h4>Personal Medications</h4>
            <p>Always carry prescribed medicines and basic first-aid items.</p>
         </div>
      </div>
   </div>
</section>
<!-- Font Awesome -->
@endsection
