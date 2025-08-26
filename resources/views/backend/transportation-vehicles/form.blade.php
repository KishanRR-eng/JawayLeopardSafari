@extends('layouts.vertical', ['title' => 'Create Transportation Vehicle'])
@section('css')
    @vite(['node_modules/mobius1-selectr/dist/selectr.min.css'])
@endsection
@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">{{ 'Create Transportation Vehicle' }}</h4>
                    </div>
                    <div class="col text-end">
                        <a href="{{ route('backend.transportation.vehicle.index') }}" type="button" class="btn rounded-pill btn-outline-danger"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <form method="POST" action="{{ route('backend.transportation.vehicle.store') }}" class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('POST')
                    <div class="col-md-6 has-validation">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name ?? (old('name') ?? '') }}" required>
                        <div class="invalid-feedback">{{ $errors->first('name') ?? '' }}</div>
                    </div>

                    <div class="col-md-4 has-validation">
                        <label for="seats" class="form-label">Seats</label>
                        <input class="form-control" type="number" id="seats" name="seats" min="0" step="1" value="{{ $data->seats ?? (old('seats') ?? 0) }}" required>
                        <div class="invalid-feedback">{{ $errors->first('seats') ?? '' }}</div>
                    </div>

                    <div class="col-md-6 has-validation">
                        <label for="price" class="form-label">Price</label>
                        <input class="form-control" type="number" id="price" name="price" min="0" step="0.01" value="{{ $data->price ?? (old('price') ?? 0) }}" required>
                        <div class="invalid-feedback">{{ $errors->first('price') ?? '' }}</div>
                    </div>

                    <div class="col-md-12 text-end">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
@endsection
