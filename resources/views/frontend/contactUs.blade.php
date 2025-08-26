@extends('frontend.layout.main')
@section('title', 'Contact Us')
@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.html')">
   <div class="container position-relative d-flex flex-column align-items-center">
      <h1>Contact Us</h1>
   </div>
</div>
<div class="container my-2">
   <b>Declaration:</b> Gir safari booking would like to
   clarify that we work just as a private travel agency. Our company is not authorized by the Forest Department and
   also we do not make any claims that we are affiliated with them. Our services is booking safaris We operate independently and charge a reasonable amount for the
   services that we provide to our guests. It is important to note that the charges we collect are subject to
   variations based on the demand for safari bookings, etc. The charges can also be increased during peak periods
   of high booking traffic.
</div>
<section id="contact" class="contact ">
   <div class="container">
      <div class="row gy-4 info-item">
         <div class="col-lg-6">
            <div class="d-flex flex-column justify-content-center align-items-start">
               <i class="bi bi-map" style="align-self: center;"></i>
               <p style="text-align: left;">
                  <strong>Contact Address:</strong><br>
                  <span style="color:#C1782A;">girsafaribooking.in</span><br>
                  <span style="color:#C1782A;"> +91 861988058 </span>
                    </br>Email: <span style="color:#C1782A;">girsafaribooking.in@gmail.com</span>
                    <br/>Email: <span style="color:#C1782A;">Sasan – Talala Road, Chitrod Gir, Gir National Park, Gujarat, India – 362135</span>

                  <br><br>

               </p>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="php-email-form">
               <form action="" method="POST">
                  <input type="hidden" name="_token" value="" autocomplete="off">
                  <input type="hidden" name="type" id="type" value="general">
                     <div class="col-lg-12 form-group mb-2">
                        <input type="text" name="traveller_name" class="form-control" id="traveller_name"
                           placeholder="Name">
                     </div>
                     <div class="col-lg-12 form-group mb-2">
                        <input type="text" class="form-control" name="mobile_no" id="mobile_no"
                           placeholder="Phone Number">
                     </div>
                  <div class="form-group mb-2">
                     <input type="email" class="form-control" name="email_id" id="email"
                        placeholder="Email">
                  </div>
                  <div class="form-group mb-2">
                     <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"></textarea>
                  </div>
                  <div class="text-center mb-2">
                     <button type="submit"
                        style="background-color: #c1782a; border: 0; padding: 10px 30px; color: #fff; transition: 0.4s; border-radius: 4px;">
                     Send Message
                     </button>
                  </div>
                  <div class="text-center">
                     <b><span style="color:red;" id="error_messagess"></span></b>
                     <b><span style="color:green;" id="success_messagess"></span></b>
                  </div>
               </form>
            </div>
         </div>
         <!-- End Info Item -->
         <!-- End Info Item -->
      </div>
   </div>
</section>
<section class="pt-0">
   <div class="container">
      <div class="row gy-4 mt-1">
         <div class="col-lg-12">

         </div>
      </div>
   </div>
</section>
@endsection
