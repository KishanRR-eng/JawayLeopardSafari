@extends('layouts.auth', ['title' => 'Jawai Leopard Safari'])

@section('content')

<div class="col-lg-4 mx-auto">
    <div class="card">
        <div class="card-body p-0  auth-header-box rounded-top">
            <div class="text-center p-3">
                <a href="{{ route('login')}}" class="logo logo-admin">
                    <img src="{{ asset('frontend/img/lpd.png') }}" width="180px" alt="logo" class="auth-logo">
                </a>
                <h4 class="mt-3 mb-1 fw-semibold text-gray fs-18">Let's Get Started Jawai Leopard Safari</h4>
                <p class="text-muted fw-medium mb-0">Sign in to continue to Admin.</p>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ route('login') }}" class="my-4">
                @csrf
                @if (sizeof($errors) > 0)
                @foreach ($errors->all() as $error)
                <p class="text-danger mb-3">{{ $error }}</p>
                @endforeach
                @endif

                <div class="form-group mb-2">
                    <label class="form-label" for="email">Username</label>
                    <input type="email" class="form-control" id="example-email" name="email" placeholder="Enter your email">
                </div><!--end form-group-->

                <div class="form-group">
                    <label class="form-label" for="example-password">Password</label>
                    <input type="password" class="form-control" name="password" value="password" id="example-password" placeholder="Enter your password">
                </div><!--end form-group-->



                <div class="form-group mb-0 row">
                    <div class="col-12">
                        <div class="d-grid mt-3">
                            <button class="btn btn-primary" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                        </div>
                    </div><!--end col-->
                </div> <!--end form-group-->
            </form><!--end form-->
        </div><!--end card-body-->
    </div><!--end card-->
</div><!--end col-->

@endsection
