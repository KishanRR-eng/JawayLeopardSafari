@extends('layouts.auth', ['title' => 'Jaway Leopard Safari'])

@section('content')

<div class="col-lg-4 mx-auto">
    <div class="card">
        <div class="card-body p-0 auth-header-box rounded-top">
            <div class="text-center p-3">
                <a href="{{ route('root')}}" class="logo logo-admin">
                    <img src="{{ asset('frontend/images/logo.svg') }}" width="180px" alt="logo" class="auth-logo">
                </a>
                <h4 class="mt-3 mb-1 fw-semibold fs-18">Oops! Sorry page does not found</h4>
                <p class="text-muted fw-medium mb-0">Back to home of Jaway Leopard Safari</p>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="ex-page-content text-center">
                <img src="{{ asset('frontend/images/error.svg') }}" alt="0" class="" height="170">
                <h1 class="my-2">404!</h1>
                <h5 class="fs-16 text-muted mb-3">Something went wrong</h5>
            </div>
            <a class="btn btn-primary w-100" href="{{ route('root')}}">Back to Home <i class="fas fa-redo ms-1"></i></a>
        </div><!--end card-body-->
    </div><!--end card-->
</div><!--end col-->

@endsection