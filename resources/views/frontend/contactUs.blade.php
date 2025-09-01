@extends('frontend.layout.main')
@section('title', 'Contact Us - Jawai Leopard Safari')
@section('css')
    @vite(['node_modules/intl-tel-input/build/css/intlTelInput.min.css'])
    <style>
        .iti--allow-dropdown {
            width: 100%;
        }
    </style>
@endsection
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
        <strong>Declaration:</strong> Jawai Leopard Safari Booking would like to clarify that we work as a private
        travel agency.
        We are not authorized by the Forest Department and do not claim affiliation. Our role is to assist with
        safari bookings
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
              Jawai Leopard Safari Booking,<br>Jawai safari pickup point, Jawai region, Sena,<br>Pali,
              Rajasthan 306126.
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
            <form method="POST" action="{{ route('inquiry') }}">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name*" value="{{ old('first_name') ?? '' }}" required>
                  <div class="text-sm text-danger">{{ $errors->first('first_name') ?? '' }}</div>
                </div>
                <div class="col-md-6 mb-4">
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name*" value="{{ old('last_name') ?? '' }}" required>
                  <div class="text-sm text-danger">{{ $errors->first('last_name') ?? '' }}</div>
                </div>
                <div class="col-md-12 mb-4">
                  <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ old('mobile_no') ?? '' }}" required>
                  <input type="hidden" name="phone_code" id="phone_code" value="{{ old('phone_code') ?? '91' }}">
                  <div class="text-sm text-danger">{{ $errors->first('mobile_no') ?? '' }}</div>
                </div>
                <div class="col-md-12 mb-4">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email') ?? '' }}">
                  <div class="text-sm text-danger">{{ $errors->first('email') ?? '' }}</div>
                </div>
                <div class="col-md-12 mb-4">
                  <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message">{{ old('message') ?? '' }}</textarea>
                  <div class="text-sm text-danger">{{ $errors->first('message') ?? '' }}</div>
                </div>
              </div>
              <div class="col-md-12 mb-4 text-center">
                <button type="submit" style="background-color: #c1782a; border: 0; padding: 10px 30px; color: #fff; transition: 0.4s; border-radius: 4px;">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div style="margin-top:15px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.0930898222123!2d73.20587499999999!3d25.064833800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3942bd1c9caa424f%3A0x2a42dd7ae42c6059!2sJawai%20Leopard%20Safari%20Booking!5e0!3m2!1sen!2sin!4v1756376533979!5m2!1sen!2sin" width="100%" height="450" style="border:0; border-radius:8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>
@endsection
@section('script')
    @vite(['resources/js/pages/forms-advanced.js'])
@endsection
