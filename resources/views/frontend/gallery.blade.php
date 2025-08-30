@extends('frontend.layout.main')
@section('title', 'Gallery - Jawai Leopard Safari')
@section('content')
<div class="breadcrumbs d-flex align-items-center">
   <div class="container position-relative d-flex flex-column align-items-center">
   </div>
</div>
<!-- Gallery Section -->
<section id="gallery" class="gallery py-5">
   <div class="container">
      <!-- Section Heading -->
      <div class="section-title text-center mb-5">
         <h2 class="fw-bold">Our Safari Moments</h2>
         <p class="text-muted">A glimpse of the wild beauty of Jawai</p>
      </div>

      <!-- Gallery Grid -->
      <div class="row g-4">
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/1.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/1.jpg') }}" class="img-fluid w-100" alt="Safari 1">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/2.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/2.jpg') }}" class="img-fluid w-100" alt="Safari 2">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/3.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/3.jpg') }}" class="img-fluid w-100" alt="Safari 3">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/4.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/4.jpg') }}" class="img-fluid w-100" alt="Safari 4">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/5.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/5.jpg') }}" class="img-fluid w-100" alt="Safari 5">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/6.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/6.jpg') }}" class="img-fluid w-100" alt="Safari 6">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/7.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/7.jpg') }}" class="img-fluid w-100" alt="Safari 6">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/8.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/8.jpg') }}" class="img-fluid w-100" alt="Safari 6">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/9.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/9.jpg') }}" class="img-fluid w-100" alt="Safari 6">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/10.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/10.jpg') }}" class="img-fluid w-100" alt="Safari 6">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/11.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/11.jpg') }}" class="img-fluid w-100" alt="Safari 6">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/12.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/12.jpg') }}" class="img-fluid w-100" alt="Safari 6">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/13.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/13.jpg') }}" class="img-fluid w-100" alt="Safari 6">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/14.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/14.jpg') }}" class="img-fluid w-100" alt="Safari 6">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/15.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/15.jpg') }}" class="img-fluid w-100" alt="Safari 6">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="gallery-item shadow-sm rounded overflow-hidden">
               <a href="{{ asset('frontend/img/gallery/16.jpg') }}" data-lightbox="jawai-gallery">
                  <img src="{{ asset('frontend/img/gallery/16.jpg') }}" class="img-fluid w-100" alt="Safari 6">
                  <div class="gallery-overlay d-flex align-items-center justify-content-center">
                     <i class="bi bi-zoom-in text-white fs-3"></i>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
