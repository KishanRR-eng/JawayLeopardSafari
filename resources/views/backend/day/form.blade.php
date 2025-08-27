@extends('layouts.vertical', ['title' => 'Create Disabled Day'])
@section('css')
    @vite(['node_modules/mobius1-selectr/dist/selectr.min.css'])
@endsection
@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">{{ 'Create Disabled Day' }}</h4>
                    </div>
                    <div class="col text-end">
                        <a href="{{ route('backend.day.index') }}" type="button" class="btn rounded-pill btn-outline-danger"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <form method="POST" action="{{ route('backend.day.store') }}" class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('POST')
                    <div class="col-md-6 has-validation">
                        <label for="name" class="form-label">Days</label>
                        <select id="day" name="day" class="form-select" required>
                            @foreach ($days as $key => $day)
                                <option value="{{ $key }}" @if ((old('_token') == null && isset($data->day) && $data->day == $key) || (old('day') != null && old('day') == $key)) selected @endif>{{ $day }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">{{ $errors->first('day') ?? '' }}</div>
                    </div>

                    <div class="col-md-6 has-validation">
                        <label class="form-label">Module</label>
                        <div class="d-flex">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="girSafari" value="0" @if ((isset($data->type) && $data->type != 1) || old('type') != '1') checked @endif>
                                <label class="form-check-label" for="girSafari">Gir Safari</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="girDevalia" value="1" @if ((isset($data->type) && $data->type == 1) || old('type') == '1') checked @endif>
                                <label class="form-check-label" for="girDevalia">Gir Devalia</label>
                            </div>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('type') ?? '' }}</div>
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
