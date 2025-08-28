@extends('frontend.layout.main')
@section('title', 'Blogs - Jaway Leapord Safari')
@section('content')
<div class="breadcrumbs d-flex align-items-center">
</div>
<section class="blog-section py-5">
   <div class="container">
      <div class="section-title text-center mb-5">
         <h2 class="fw-bold">Latest Blogs</h2>
         <p class="text-muted">Stay updated with the latest news and stories from Jaway Leapord Safari</p>
      </div>
      <div class="row g-4">
         <!-- Blog Card -->
         <div class="col-md-6 col-lg-4">
            <div class="blog-card shadow-sm h-100">
               <div class="blog-img">
                  <a href="{{route('bdetails')}}">
                  <img src="{{asset('frontend/img/jawai-leopard-safari.jpg')}}" alt="Blog" class="img-fluid rounded-top w-100">
                  </a>
               </div>
               <div class="blog-content p-3">
                  <a href="{{route('bdetails')}}" class="text-decoration-none">
                     <h5 class="fw-bold mb-2">Safari Experience Guide</h5>
                  </a>
                  <p class="text-muted mb-3 truncate-text">
                     Make the most of your wildlife adventure with these essential do’s and don’ts.
                     Exploring the jungle is a once-in-a-lifetime experience, but it comes with responsibilities. To ensure your safety, respect for wildlife, and a smooth journey, please follow the guidelines below
                  </p>
                  <a href="{{route('bdetails')}}" class="btn btn-outline-warning btn-sm">Read More</a>
               </div>
            </div>
         </div>
         <!-- Repeat Cards -->
         <div class="col-md-6 col-lg-4">
            <div class="blog-card shadow-sm h-100">
               <div class="blog-img">
                  <a href="{{route('bdetails')}}">
                  <img src="{{asset('frontend/img/jawai-leopard-safari.jpg')}}" alt="Blog" class="img-fluid rounded-top w-100">
                  </a>
               </div>
               <div class="blog-content p-3">
                  <a href="{{route('bdetails')}}" class="text-decoration-none">
                     <h5 class="fw-bold mb-2">Safari Experience Guide</h5>
                  </a>
                  <p class="text-muted mb-3 truncate-text">
                     Learn about the latest conservation initiatives protecting the Asiatic lion and biodiversity of Gir National Park...
                  </p>
                  <a href="{{route('bdetails')}}" class="btn btn-outline-warning btn-sm">Read More</a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="blog-card shadow-sm h-100">
               <div class="blog-img">
                  <a href="{{route('bdetails')}}">
                  <img src="{{asset('frontend/img/jawai-leopard-safari.jpg')}}" alt="Blog" class="img-fluid rounded-top w-100">
                  </a>
               </div>
               <div class="blog-content p-3">
                  <a href="{{route('bdetails')}}" class="text-decoration-none">
                     <h5 class="fw-bold mb-2">Safari Experience Guide</h5>
                  </a>
                  <p class="text-muted mb-3 truncate-text">
                     Make the most of your wildlife adventure with these essential do’s and don’ts.
                     Exploring the jungle is a once-in-a-lifetime experience, but it comes with responsibilities. To ensure your safety, respect for wildlife, and a smooth journey, please follow the guidelines below
                  </p>
                  <a href="{{route('bdetails')}}" class="btn btn-outline-warning btn-sm">Read More</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
