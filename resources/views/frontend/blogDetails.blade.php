@extends('frontend.layout.main')
@section('title', $data->title)
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
                            <img src="/storage/{{ $data->header_image_path }}" alt="Safari Experience Guide"
                                class="img-fluid rounded">
                        </div>

                        <!-- Blog Title -->
                        <h2 class="blog-title mb-3">{{ $data->title }}</h2>

                        <!-- Blog Meta -->
                        <div class="blog-meta d-flex justify-content-between flex-wrap mb-4 text-muted small">
                            <span><i class="bi bi-person"></i> Author: <strong>{{ $data->created_by }}</strong></span>
                            <span><i class="bi bi-calendar"></i> {{ date('F d Y', strtotime($data->created_at)) }}</span>
                            <span><i class="bi bi-tag"></i> Jawai Leopard Safari</span>
                            <span><i class="bi bi-bookmark"></i> Jawai Leopard Safari</span>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-detail-content">
                            <div class="container">
                                <div id="blog-content"></div>
                            </div>
                            <input type="hidden" value="{{ $data->content }}" id="blog-content">
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    @vite(['resources/js/pages/form-editor.init.js'])
@endsection
