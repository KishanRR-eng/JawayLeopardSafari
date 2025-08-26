@extends('layouts.vertical', ['title' => request()->route('id') ? 'Edit Blog Category' : 'Create Blog Category'])
@section('content')
    
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">{{ request()->route('id') ? 'Edit Blog Category' : 'Create Blog Category' }}</h4>
                    </div>
                    <div class="col text-end">
                        <a href="{{ route('backend.blog.category.index') }}" type="button" class="btn rounded-pill btn-outline-danger"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <form method="POST" action="{{ request()->route('id') ? route('backend.blog.category.update', ['id' => request()->route('id')]) : route('backend.blog.category.store') }}"
                    class="row g-3 needs-validation {{ count($errors) > 0 ? 'was-validated' : '' }}" novalidate>
                    @csrf
                    @method('POST')
                    <div class="col-md-6 has-validation">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name ?? (old('name') ?? '') }}" required>
                        <div class="invalid-feedback">{{ $errors->first('name') ?? '' }}</div>
                    </div>

                    <div class="col-md-12 has-validation">
                        <label for="isVisible" class="form-label">Visibility</label>
                        <div class="form-check form-switch form-switch-success">
                            <input class="form-check-input" type="checkbox" id="isVisible" name="isVisible" @if ((isset($data->isVisible) && $data->isVisible) || old('isVisible') == 'on') checked @endif>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('isVisible') ?? '' }}</div>
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
