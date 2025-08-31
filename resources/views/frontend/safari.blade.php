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
         <p class="text-light">Secure your seat and get closer to the majestic leopards of Jawai</p>
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
                           Payment does not guarantee booking confirmation. Bookings depend on seat availability.
                           If a slot is unavailable, we will reschedule (with your consent) or provide a full refund.
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
<section class="packages-section">
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
               <li>High chance of leopard spotting</li>
               <li>Birdwatching</li>
               <li>Scenic sunrise views</li>
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
               <li>Leopards at dusk</li>
               <li>Golden hour photography</li>
               <li>Nocturnal animals activity</li>
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
               <li>Morning & evening safari</li>
               <li>Deeper reserve exploration</li>
               <li>Village & birding visits</li>
            </ul>
         </div>
         <div class="package-includes">
            <strong>Includes:</strong>
            <ul>
               <li>Jeep & permits</li>
               <li>Expert guide</li>
               <li>Lunch & cultural interaction</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- What to Pack Section -->
<section class="safari-pack">
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
