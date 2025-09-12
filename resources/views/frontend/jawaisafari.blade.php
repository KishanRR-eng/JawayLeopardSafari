@extends('frontend.layout.main')
@section('title', 'Jawai Leopard Safari')
@section('content')

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center text-center">
  <div class="container">
    <h1 class="hero-title">Explore the Wild with Jawai Leopard Safari</h1>
    <p class="hero-subtitle">Witness majestic leopards in their natural habitat at Jawai, Rajasthan</p>
    <a href="#inquiry" class="btn btn-primary btn-lg mt-3">Book Your Safari</a>
  </div>
</section>

<!-- About Section -->
<section class="about-section container py-5">
  <div class="row align-items-center">
    <div class="col-md-6 mb-4 mb-md-0">
      <img src="{{ asset('frontend/img/jawai-leopard.jpg') }}" class="img-fluid rounded shadow" alt="Jawai Leopard Safari">
    </div>
    <div class="col-md-6">
      <h2 class="section-title">About Jawai Leopard Safari</h2>
      <p>
        Located in the heart of Rajasthan, Jawai is home to a thriving population of leopards, migratory birds,
        and vibrant landscapes. Our guided safari tours ensure a safe, adventurous, and unforgettable wildlife experience.
      </p>
      <ul>
        <li>✅ Jeep Safari with expert naturalists</li>
        <li>✅ Scenic landscapes of Jawai Dam</li>
        <li>✅ Cultural experiences with local tribes</li>
      </ul>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-us py-5 bg-light">
  <div class="container text-center">
    <h2 class="section-title mb-4">Why Choose Jawai Leopard Safari?</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow-sm p-4">
          <h5>Experienced Guides</h5>
          <p>Our expert naturalists provide in-depth knowledge of Jawai’s wildlife and culture.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm p-4">
          <h5>Safe & Comfortable</h5>
          <p>Travel in well-maintained safari jeeps with full safety and comfort.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm p-4">
          <h5>Unforgettable Experience</h5>
          <p>Capture breathtaking moments of leopards, birds, and stunning Jawai landscapes.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery -->
<section class="gallery-section container py-5">
  <h2 class="section-title text-center mb-4">Safari Gallery</h2>
  <div class="row g-3">
    <div class="col-md-4">
      <img src="{{ asset('frontend/img/gallery1.jpg') }}" class="img-fluid rounded shadow" alt="Leopard Safari">
    </div>
    <div class="col-md-4">
      <img src="{{ asset('frontend/img/gallery2.jpg') }}" class="img-fluid rounded shadow" alt="Jawai Landscape">
    </div>
    <div class="col-md-4">
      <img src="{{ asset('frontend/img/gallery3.jpg') }}" class="img-fluid rounded shadow" alt="Safari Jeep">
    </div>
  </div>
</section>

<!-- Inquiry Form -->
<section id="inquiry" class="inquiry-form-section py-5 bg-light">
  <div class="container">
    <h2 class="section-title text-center mb-4">Book Your Safari Inquiry</h2>

  </div>
</section>

<!-- Contact -->
<section class="contact-section container py-5">
  <div class="row">
    <div class="col-md-6">
      <h2 class="section-title">Contact Us</h2>
      <p><strong>📍 Address:</strong> Jawai, Pali, Rajasthan, India</p>
      <p><strong>📞 Phone:</strong> <a href="tel:+918619880581">+91-86198 80581</a></p>
      <p><strong>📧 Email:</strong> <a href="mailto:info@girsafaribooking.in">info@girsafaribooking.in</a></p>
    </div>
    <div class="col-md-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!..." width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</section>

@endsection
