@extends('frontend.layout.main')
@section('title', 'Blogs')
@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.html')">
   <div class="container position-relative d-flex flex-column align-items-center">
      <h1>Blogs</h1>
   </div>
</div>
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="latest-outer col-md-4 mb-3">
                  <div style="border: 1px solid #c1782a">
                     <div class="latest-left">
                        <a href="{{route('bdetails')}}">
                        <img src="{{asset('frontend/img//blogs1/jpg')}}" alt="text"
                           class="img-fluid" height="182">
                        </a>
                     </div>
                     <div class="latest-right p-2">
                        <a href="{{route('bdetails')}}">
                           <h5>Gujarat High Court Cancels Lion Disturbance Case</h5>
                        </a>
                        <p class="truncate-text">
                        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif">The case against the television journalist charged with disturbing a lion near Gir National Park has been cancelled...
                        </p>
                        <a href="{{route('bdetails')}}"
                           class="btn btn-outline-warning">
                        Read More
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
