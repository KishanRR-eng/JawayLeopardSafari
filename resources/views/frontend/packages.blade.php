@extends('frontend.layout.main')
@section('title', 'Jawai Safari Packages')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs_reach d-flex align-items-center">
   <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade"></div>
</div>
<!-- End Breadcrumbs -->
<div class="safari-section section--top">
   <div class="container">
      <!-- Page Heading -->
      <div class="section-heading text-center">
         <h2>Jawai Safari Packages – Explore the Beauty of Jawai</h2>
         <p>We offer a range of safari packages to help you explore the stunning landscapes and wildlife of the Jawai region. Our packages cater to different interests, including family tours, photography expeditions, and adventure seekers.</p>
      </div>

      <!-- Safari Packages -->
      <div class="row g-4">
         <!-- Basic Package -->
         <div class="col-md-6 col-lg-4">
            <div class="package-card">
               <h5>Jawai Leopard Safari Basic Package</h5>
               <ul>
                  <li><strong>Duration:</strong> 2-3 hours</li>
                  <li><strong>Includes:</strong>
                     <ul>
                        <li>Guided safari with an experienced driver.</li>
                        <li>Visit to key leopard habitats.</li>
                        <li>Opportunity to observe wildlife like leopards, birds, etc.</li>
                     </ul>
                  </li>
                  <li><strong>Price:</strong> ₹1500 per person</li>
                  <li><strong>Sightings:</strong> Leopard sightings depend on natural conditions.</li>
                  <li><strong>Additional Info:</strong> Safari timings vary based on the season and availability. </li>
               </ul>
               <a href="{{ route('safari')}}" class="btn btn-primary">Book Now</a>
            </div>
         </div>

         <!-- Family Package -->
         <div class="col-md-6 col-lg-4">
            <div class="package-card">
               <h5>Jawai Safari Family Package</h5>
               <ul>
                  <li><strong>Duration:</strong> 4-5 hours</li>
                  <li><strong>Includes:</strong>
                     <ul>
                        <li>Guided safari with local driver.</li>
                        <li>Village visits & cultural experiences.</li>
                        <li>Refreshments and water.</li>
                     </ul>
                  </li>
                  <li><strong>Price:</strong> ₹4000 (2 adults + 2 children)</li>
                  <li><strong>Sightings:</strong> Sightings not guaranteed due to natural conditions.</li>
                  <li><strong>Additional Info: </strong> Family-friendly safaris with flexible timings. Special packages for school groups and family reunions.</li>
               </ul>
               <a href="{{ route('safari')}}" class="btn btn-primary">Book Now</a>
            </div>
         </div>

         <!-- Photography Package -->
         <div class="col-md-6 col-lg-4">
            <div class="package-card">
               <h5>Jawai Safari Photography Package</h5>
               <ul>
                  <li><strong>Duration:</strong> 5-6 hours</li>
                  <li><strong>Includes:</strong>
                     <ul>
                        <li>Exclusive safari for photographers.</li>
                        <li>Focus on capturing wildlife in natural environment.</li>
                        <li>Guide with knowledge of best photo spots.</li>
                     </ul>
                  </li>
                  <li><strong>Price:</strong> ₹1500 per person</li>
                  <li><strong>Sightings:</strong> Sightings & photography depend on environment.</li>
                  <li><strong>Additional Info: </strong> Bring your own camera and lenses for the best experience. We provide support for photographers at every step.</li>
               </ul>
               <a href="{{ route('safari')}}" class="btn btn-primary">Book Now</a>
            </div>
         </div>

         <!-- Adventure Package -->
         <div class="col-md-6 col-lg-4">
            <div class="package-card">
               <h5>Jawai Adventure Safari Package</h5>
               <ul>
                  <li><strong>Duration:</strong> 6-8 hours (Full day)</li>
                  <li><strong>Includes:</strong>
                     <ul>
                        <li>Full-day guided safari.</li>
                        <li>Visit historical & cultural landmarks.</li>
                        <li>Picnic lunch with local delicacies.</li>
                     </ul>
                  </li>
                  <li><strong>Price:</strong> ₹3000 per person</li>
                  <li><strong>Sightings:</strong> Sightings depend on natural conditions.</li>
                  <li><strong>Additional Info:</strong> Includes comfortable transportation and stops for scenic views.</li>
               </ul>
               <a href="{{ route('safari')}}" class="btn btn-primary">Book Now</a>
            </div>
         </div>
      </div>

      <!-- Hotel & Resort Booking -->
      <div class="section-heading text-center mt-5">
         <h2>Hotel & Resort Booking Options</h2>
         <p>After an exciting safari, unwind and relax in the best hotels and resorts of the Jawai region.</p>
      </div>

      <div class="row g-4">
         <!-- Luxury Resort -->
         <div class="col-md-6 col-lg-4">
            <div class="package-card">
               <h5>Luxury Resort Package</h5>
               <ul>
                  <li>Stay at a luxury resort with top-notch amenities.</li>
                  <li>Pool, spa & guided resort tours.</li>
                  <li>Full board meals included.</li>
                  <li><strong>Additional Info:</strong> For detailed pricing and availability, please contact us for more information.</li>
               </ul>

               <a href="{{ route('contactUs')}}" class="btn btn-outline-primary">Contact Us for More Details</a>
            </div>
         </div>

         <!-- Comfort Stay -->
         <div class="col-md-6 col-lg-4">
            <div class="package-card">
               <h5>Comfort Stay Package</h5>
               <ul>
                  <li>Comfortable hotel with modern amenities.</li>
                  <li>Complimentary breakfast.</li>
                  <li>Near safari pickup points.</li>
                  <li><strong>Additional Info:</strong> For detailed pricing and availability, please contact us for more information.</li>
               </ul>
               <a href="{{ route('contactUs')}}" class="btn btn-outline-primary">Contact Us for More Details</a>
            </div>
         </div>

         <!-- Budget Stay -->
         <div class="col-md-6 col-lg-4">
            <div class="package-card">
               <h5>Budget Stay Package</h5>
               <ul>
                  <li>Budget hotel with clean, basic accommodations.</li>
                  <li>Close to key attractions.</li>
                  <li>Affordable and convenient.</li>
                  <li><strong>Additional Info:</strong> For detailed pricing and availability, please contact us for more information.</li>
               </ul>
               <a href="{{ route('contactUs')}}" class="btn btn-outline-primary">Contact Us for More Details</a>
            </div>
         </div>
      </div>

      <!-- Additional Info -->
      <div class="additional-info mt-5">
         <h5>Additional Information:</h5>
         <ul>
            <li><strong>Pricing Transparency:</strong> All prices include taxes with no hidden charges.</li>
            <li><strong>Cancellation Policy:</strong> Full refund for cancellations made 7+ days before safari. No refund within 72 hours.</li>
            <li><strong>Safety Measures:</strong> All safaris are conducted with utmost focus on safety, vehicles well-maintained.</li>
            <li><strong>No Guarantee of Wildlife Sightings:</strong> Sightings depend on natural conditions.</li>
         </ul>
      </div>
   </div>
</div>

@endsection
