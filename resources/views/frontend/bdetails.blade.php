@extends('frontend.layout.main')
@section('title', 'Blogs Details - Jaway Leapord Safari')
@section('content')
<div class="breadcrumbs d-flex align-items-center">
</div>
<section class="blog-details py-5">
   <div class="container">
      <div class="row justify-content-center">
         <!-- Blog Content -->
         <div class="col-lg-12 col-md-12">
            <article class="blog-post shadow-sm rounded p-4 bg-white">
               <!-- Blog Image -->
               <div class="blog-image mb-4 text-center">
                  <img src="{{asset('frontend/img/jawai-leopard-safari.jpg')}}"
                     alt="Safari Experience Guide"
                     class="img-fluid rounded">
               </div>

               <!-- Blog Title -->
               <h2 class="blog-title mb-3">
                  Safari Experience Guide
               </h2>

               <!-- Blog Meta -->
               <div class="blog-meta d-flex justify-content-between flex-wrap mb-4 text-muted small">
                  <span><i class="bi bi-person"></i> Author: <strong>ABC</strong></span>
                  <span><i class="bi bi-calendar"></i> August 28, 2025</span>
                  <span><i class="bi bi-tag"></i> Jaway Leapord Safari</span>
                  <span><i class="bi bi-bookmark"></i> Jaway Leapord Safari</span>
               </div>

               <!-- Blog Content -->
               <div class="blog-content">
                  {{-- {!! $blog->description !!} --}}
                  Make the most of your wildlife adventure with these essential do’s and don’ts.
Exploring the jungle is a once-in-a-lifetime experience, but it comes with responsibilities. To ensure your safety, respect for wildlife, and a smooth journey, please follow the guidelines below.
               </div>
            </article>
         </div>
      </div>
   </div>
</section>
@endsection
