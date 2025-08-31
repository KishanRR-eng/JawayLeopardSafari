@extends('frontend.layout.main')
@section('title', 'Blogs - Jawai Leopard Safari')
@section('content')
    <div class="breadcrumbs d-flex align-items-center">
    </div>
    <section class="blog-section py-5">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="fw-bold">Latest Blogs</h2>
                <p class="text-muted">Stay updated with the latest news and stories from Jawai Leopard Safari</p>
            </div>
            <div class="row g-4">
                <!-- Blog Card -->
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-card shadow-sm h-100">
                            <div class="blog-img">
                                <a href="{{ route('blogDetails', ['id' => $blog->slug]) }}">
                                    <img src="/storage/{{ $blog->primary_media_path }}" alt="Blog"
                                        class="img-fluid rounded-top w-100">
                                </a>
                            </div>
                            <div class="blog-content p-3">
                                <a href="{{ route('blogDetails', ['id' => $blog->slug]) }}" class="text-decoration-none">
                                    <h5 class="fw-bold mb-2">{{ $blog->title }}</h5>
                                </a>
                                <a href="{{ route('blogDetails', ['id' => $blog->slug]) }}"
                                    class="btn btn-outline-warning btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
