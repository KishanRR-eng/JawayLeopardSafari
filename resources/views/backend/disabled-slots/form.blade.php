@extends('layouts.vertical', ['title' => 'Add Disabled Slot'])
@section('css')
    @vite(['node_modules/mobius1-selectr/dist/selectr.min.css', 'node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
@endsection
@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">{{ 'Add Disabled Slot' }}</h4>
                    </div>
                    <div class="col text-end">
                        <a href="{{ route('backend.disabled.slot.index') }}" type="button" class="btn rounded-pill btn-outline-danger"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <form method="POST" action="{{ route('backend.disabled.slot.store') }}" class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('POST')
                    <div class="col-md-6 has-validation">
                        <label for="name" class="form-label">Date</label>
                        <input class="form-control mb-3" type="text" name="date" id="date">
                        <div class="invalid-feedback">{{ $errors->first('date') ?? '' }}</div>
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

                    <div class="col-md-6 has-validation">
                        <label for="slot" class="form-label">Time Slot</label>
                        <select id="slot" name="slot" class="form-select">
                            <option value="0" selected>Select Time Slot</option>
                            @foreach ($slots as $slot)
                                @if ($slot->type == old('type') || (old('type') == null && $slot->type == '0'))
                                    <option value="{{ $slot->id }}" @if (old('slot') != null && old('slot') == $slot->id) selected @endif>{{ $slot->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <div class="invalid-feedback {{ $errors->first('slot') ? 'd-block' : '' }}">{{ $errors->first('slot') ?? '' }}</div>
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
@section('script')
    @vite(['resources/js/pages/forms-advanced.js'])
    <script type="module">
        $(document).off('change', 'input[name="type"]').on('change', 'input[name="type"]', function() {
            var type = $(this).val();
            $('#slot').html('<option value="0" selected>Select Time Slot</option>');
            @foreach ($slots as $slot)
                if ({{ $slot->type }} == type) {
                    $('#slot').append('<option value="{{ $slot->id }}">{{ $slot->name }}</option>');
                }
            @endforeach
        });
    </script>
@endsection
