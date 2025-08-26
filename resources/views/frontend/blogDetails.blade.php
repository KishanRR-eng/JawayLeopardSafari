@extends('frontend.layout.main')
@section('title', $data->meta_title ?? $data->title)
@section('description', $data->meta_description ?? '')
@section('keywords', $data->meta_keywords ?? '')
@section('url', $data->meta_url ?? '')
@section('css')
    @vite(['node_modules/quill/dist/quill.snow.css'])
@endsection
@section('content')
    <div class="hero_banner bg-ring about-banner blog-detail-banner" style="background-image: url('/storage/{{ $data->header_image_path }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1>{{ $data->title }}</h1>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Detail content -->

    <section class="blog-detail-content pt-6 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-content">
                        {{-- <div class="img-wrap">
                            <img src="/storage/{{ $data->primary_media_path }}" loading="lazy" alt="blog-detail" class="img-fluid w-100">
                        </div> --}}
                        <div class="author-detail d-flex flex-wrap">
                            <div class="name">
                                <img src="{{ asset('frontend/images/user.svg') }}" alt="" loading="lazy">
                                <span>{{ $data->created_by }}</span>
                            </div>
                            <div class="name">
                                <img src="{{ asset('frontend/images/location.svg') }}" alt="" loading="lazy">
                                <span>{{ $data->destination->name }}</span>
                            </div>
                            <div class="name">
                                <img src="{{ asset('frontend/images/location.svg') }}" alt="" loading="lazy">
                                <span>{{ date('M d, Y', strtotime($data->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-detail-content pb-6">
        <div class="container">
            <div id="blog-content"></div>
        </div>
        <input type="hidden" value="{{ $data->content }}" id="blog-content">
    </section>
@endsection
@section('script')
    @vite(['resources/js/pages/form-editor.init.js'])
@endsection
