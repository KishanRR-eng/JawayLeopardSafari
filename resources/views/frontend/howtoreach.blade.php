@extends('frontend.layout.main')
@section('title', 'How To Reach - Jawai Leopard Safari')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs_reach d-flex align-items-center">
   <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade"></div>
</div>
<!-- End Breadcrumbs -->
<section class="how-to-reach py-5 bg-light">
  <div class="container">
    <div class="section-heading text-center mb-5">
      <h2 class="title">How to Reach Jawai</h2>
      <p class="subtitle">Explore different travel options to comfortably reach Jawai</p>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle text-center reach-table">
        <thead class="table-primary">
          <tr>
            <th scope="col">Mode</th>
            <th scope="col">Nearest Point</th>
            <th scope="col">Distance</th>
            <th scope="col">Connectivity</th>
            <th scope="col">Travel Option</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>By Air</strong></td>
            <td>Udaipur Maharana Pratap Airport (UDR)</td>
            <td>140 km</td>
            <td>Delhi, Mumbai, Jaipur (Direct Flights)</td>
            <td>Taxis / Pre-arranged Transfers</td>
          </tr>
          <tr>
            <td><strong>By Train</strong></td>
            <td>
              Jawai Bandh (20 km) <br>
              Falna (30 km)
            </td>
            <td>20–30 km</td>
            <td>Mumbai, Delhi, Ahmedabad, Jaipur</td>
            <td>Local Taxis / Jeeps</td>
          </tr>
          <tr>
            <td><strong>By Road</strong></td>
            <td>
              Udaipur – 140 km <br>
              Jodhpur – 120 km <br>
              Ahmedabad – 320 km
            </td>
            <td>3–7 hours</td>
            <td>Highways, Scenic Drive</td>
            <td>Private Taxis / Cars / Buses</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- Best Time to Visit Section -->
<section class="best-time py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center mb-4">
        <h2 class="section-title">Best Time to Visit</h2>
        <p class="section-text">
          The optimal season for a Jawai Leopard Safari is <strong>October to March</strong>.
          During these months, the weather is cool and dry, increasing the likelihood of
          wildlife sightings and making outdoor activities comfortable. The post-monsoon
          months bring lush greenery, while winters offer crisp clear skies perfect for
          photography.
        </p>
        <p class="section-text">
          <strong>Summer months (April to June)</strong> can be hot, but early morning and
          late evening safaris are still feasible. <strong>Monsoon (July to September)</strong>
          sees limited safari availability due to rain and rough terrain.
        </p>
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


@endsection
