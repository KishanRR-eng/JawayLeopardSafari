@extends('frontend.layout.main')
@section('title', 'Blogs')
@section('content')
    <!-- Slider -->
    <div class="hero_banner bg-ring about-banner blog-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <h1>Blogs</h1>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @if (count($data) > 0)
        @php
            $flag = false;
        @endphp
        @foreach ($data as $category)
            <section class="blog_slider pt-5 pb-5 @if ($flag) domestic-slider @endif">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="content-box">
                                <div class="section-title">
                                    <h2 class="title">{{ $category->name }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="three-slider" id="journey">
                                @foreach ($category->blogs as $blog)
                                    <div class="prod-slider">
                                        <a href="{{ route('blogDetails', ['id' => $blog->slug]) }}">
                                            <aside><img src="/storage/{{ $blog->header_image_path }}" class="img-fluid rounded-4" loading="lazy" alt="blog" /></aside>
                                        </a>
                                        <div class="blog-content">
                                            <div class="date">
                                                <p>{{ date('F d Y', strtotime($blog->created_at)) }} | <span>By {{ $blog->created_by }}</span></p>
                                            </div>
                                            <div class="content">
                                                <p>{{ $blog->title }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @php
                $flag = !$flag;
            @endphp
        @endforeach
    @endif
@endsection
