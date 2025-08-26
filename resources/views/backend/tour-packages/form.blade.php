@extends('layouts.vertical', ['title' => request()->route('id') ? 'Edit Package' : 'Create Package'])
@section('css')
    @vite(['node_modules/mobius1-selectr/dist/selectr.min.css'])
@endsection
@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">{{ request()->route('id') ? 'Edit Package' : 'Create Package' }}</h4>
                    </div>
                    <div class="col text-end">
                        <a href="{{ route('backend.package.index') }}" type="button" class="btn rounded-pill btn-outline-danger"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <form id="tourPackageForm" method="POST" action="{{ request()->route('id') ? route('backend.package.update', ['id' => request()->route('id')]) : route('backend.package.store') }}" enctype="multipart/form-data"
                    class="row g-3 needs-validation {{ count($errors) > 0 ? 'was-validated' : '' }}" novalidate>
                    @csrf
                    @method('POST')
                    <div class="col-md-6 has-validation">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name ?? (old('name') ?? '') }}" required>
                        <div class="invalid-feedback">{{ $errors->first('name') ?? '' }}</div>
                    </div>

                    
                    <div class="col-md-6 has-validation">
                        <label for="price" class="form-label">Price</label>
                        <input class="form-control" type="number" id="price" name="price" min="0" step="0.01" value="{{ $data->price ?? (old('price') ?? 0) }}" required>
                        <div class="invalid-feedback">{{ $errors->first('price') ?? '' }}</div>
                    </div>

                    <div class="col-md-4 has-validation">
                        <label class="form-label">Module</label>
                        <div class="d-flex">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="jawayLeopardSafari" value="0" @if ((isset($data->type) && $data->type != 1) || old('type') != '1') checked @endif>
                                <label class="form-check-label" for="jawayLeopardSafari">Jaway Leopard Safari</label>
                            </div>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('type') ?? '' }}</div>
                    </div>

                    <div class="col-md-4 has-validation">
                        <label class="form-label">Day Type</label>
                        <div class="d-flex">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="day_type" id="weekdays" value="0" @if ((isset($data->day_type) && $data->day_type != 1) || old('day_type') != '1') checked @endif>
                                <label class="form-check-label" for="weekdays">Weekdays</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="day_type" id="weekend" value="1" @if ((isset($data->day_type) && $data->day_type == 1) || old('day_type') == '1') checked @endif>
                                <label class="form-check-label" for="weekend">Weekend</label>
                            </div>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('day_type') ?? '' }}</div>
                    </div>

                    <div class="col-md-4 has-validation">
                        <label class="form-label">Tourist Type</label>
                        <div class="d-flex">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tourist_type" id="indian" value="0" @if ((isset($data->tourist_type) && $data->tourist_type != 1) || old('tourist_type') != '1') checked @endif>
                                <label class="form-check-label" for="indian">Indian</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tourist_type" id="foreigner" value="1" @if ((isset($data->tourist_type) && $data->tourist_type == 1) || old('tourist_type') == '1') checked @endif>
                                <label class="form-check-label" for="foreigner">Foreigner</label>
                            </div>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('tourist_type') ?? '' }}</div>
                    </div>


                    <div class="col-md-6 has-validation">
                        <label for="vehicles" class="form-label">Transportation Vehicles</label>
                        <select id="vehicles" name="vehicles[]" class="form-select" multiple>
                            @foreach ($vehicles as $vehicle)
                                <option value="{{ $vehicle->id }}" @if ((old('_token') == null && isset($data->vehiclesMap) && $data->vehiclesMap->pluck('transportation_vehicle_id')->contains($vehicle->id)) || (old('vehicles') != null && in_array($vehicle->id, old('vehicles')))) selected @endif>
                                    {{ $vehicle->name }} ({{ $vehicle->price }})
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback {{ $errors->first('vehicles') ? 'd-block' : '' }}">{{ $errors->first('vehicles') ?? '' }}</div>
                    </div>
                    
                    <div class="col-md has-validation">
                        <label for="status" class="form-label">Status</label>
                        <div class="form-check form-switch form-switch-success">
                            <input class="form-check-input" type="checkbox" id="status" name="status" @if ((isset($data->status) && $data->status) || old('status') == 'on') checked @endif>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('status') ?? '' }}</div>
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
