@extends('frontend.layout.main')
@section('title', 'Contact Us - Jawai Leopard Safari')
@section('content')
<div class="breadcrumbs d-flex align-items-center">
   <div class="container position-relative d-flex flex-column align-items-center">
   </div>
</div>
<!-- ===== Contact Section ===== -->
<section id="contact" class="contact py-5" style="background: #f9f9f9;">
  <div class="container">

    <!-- Declaration -->
    <div class="alert alert-warning mb-5 shadow-sm" style="background:#fff3cd; border-left:5px solid #c1782a;">
      <strong>Declaration:</strong> Jawai Leopard Safari Booking would like to clarify that we work as a private travel agency.
      We are not authorized by the Forest Department and do not claim affiliation. Our role is to assist with safari bookings
      and provide customer services independently. Prices may vary depending on demand and peak booking periods.
    </div>

    <div class="row g-4">

      <!-- Contact Info -->
      <div class="col-lg-5 d-flex">
        <div class="info-box w-100 p-4 shadow-sm rounded bg-white">
          <h4 class="mb-4 text-uppercase fw-bold" style="color:#c1782a;">Contact Information</h4>
          <p class="mb-3">
            <i class="bi bi-geo-alt-fill text-danger me-2"></i>
            <strong>Address:</strong><br>
           Jawai Leopard Safari Booking,<br>Jawai safari pickup point, Jawai region, Sena,<br>Pali, Rajasthan 306126.
          </p>
          <p class="mb-3">
            <i class="bi bi-telephone-fill text-success me-2"></i>
            <strong>Phone:</strong> <a href="tel:+917339919554" class="text-dark">+91 73399 19554</a>
          </p>
          <p class="mb-3">
            <i class="bi bi-envelope-fill text-primary me-2"></i>
            <strong>Email:</strong>
            <a href="mailto:info@jawaileopardsafaribooking.in" class="text-dark">info@jawaileopardsafaribooking.in</a>
          </p>
          <p>
            <i class="bi bi-globe text-info me-2"></i>
            <strong>Website:</strong>
            <a href="https://jawaileopardsafaribooking.in/" class="text-dark">www.jawaileopardsafaribooking.in/</a>
          </p>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-7">
        <div class="form-box p-4 shadow-sm rounded bg-white">
          <h4 class="mb-4 text-uppercase fw-bold" style="color:#c1782a;">Get in Touch</h4>
          <form action="" method="POST" class="row g-3">
            <input type="hidden" name="_token" value="">
            <input type="hidden" name="type" id="type" value="general">

            <div class="col-md-6">
              <input type="text" name="traveller_name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
              <input type="text" name="mobile_no" class="form-control" placeholder="Phone Number" required>
            </div>
            <div class="col-md-12">
              <input type="email" name="email_id" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="col-md-12">
              <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
            </div>

            <div class="col-12 text-end">
              <button type="submit" class="btn btn-lg text-white"
                style="background-color:#c1782a; border-radius:6px; padding:10px 30px;">
                <i class="bi bi-send-fill me-1"></i> Send Message
              </button>
            </div>

            <!-- Success / Error Messages -->
            <div class="col-12 text-center">
              <b><span style="color:red;" id="error_messagess"></span></b>
              <b><span style="color:green;" id="success_messagess"></span></b>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
   <div style="margin-top:15px;">
      <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.0930898222123!2d73.20587499999999!3d25.064833800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3942bd1c9caa424f%3A0x2a42dd7ae42c6059!2sJawai%20Leopard%20Safari%20Booking!5e0!3m2!1sen!2sin!4v1756376533979!5m2!1sen!2sin"
         width="100%"
         height="450"
         style="border:0; border-radius:8px;"
         allowfullscreen=""
         loading="lazy"
         referrerpolicy="no-referrer-when-downgrade">
      </iframe>
   </div>
</section>


@endsection
