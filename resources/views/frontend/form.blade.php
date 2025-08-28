@section('css')
    @vite(['node_modules/intl-tel-input/build/css/intlTelInput.min.css', 'node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
    <style>
        .iti--allow-dropdown {
            width: 100%;
        }
    </style>
@endsection
<form class="firststep_form new_forms" method="POST" action="{{ route('booking') }}">
    @csrf
    <h3 class="text-center">Check availability & Book</h3>
    <div class="row gy-3 tab-pane fade show active">
        <div class="col-md-6">
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name*" value="{{ old('first_name') ?? (session()->get('first_name') ?? '') }}" required>
            <div class="text-sm text-danger">{{ $errors->first('first_name') ?? '' }}</div>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name*" value="{{ old('last_name') ?? (session()->get('last_name') ?? '') }}" required>
            <div class="text-sm text-danger">{{ $errors->first('last_name') ?? '' }}</div>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ old('mobile_no') ?? (session()->get('mobile_no') ?? '') }}" required>
            <input type="hidden" name="phone_code" id="phone_code" value="{{ old('phone_code') ?? '91' }}">
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email') ?? (session()->get('email') ?? '') }}">
            <div class="text-sm text-danger">{{ $errors->first('email') ?? '' }}</div>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" name="date" id="date" placeholder="Select Date*" value="{{ old('date') ?? '' }}" required>
            <div class="text-sm text-danger">{{ $errors->first('date') ?? '' }}</div>
        </div>
        <div class="col-md-6">
            <select class="form-control" name="timing" id="timings">
                <option value="0" selected>Select Time Slot</option>
                @foreach ($slots as $slot)
                    <option value="{{ $slot->id }}" @if (old('slot') != null && old('timing') == $slot->id) selected @endif>{{ $slot->name }}</option>
                @endforeach
            </select>
            <div class="text-sm text-danger">{{ $errors->first('timing') ?? '' }}</div>
        </div>
        {{-- <div class="col-md-6">
            <select class="form-control" name="vehicle" id="vehicle">
                <option value="0" selected>Select Gypsy</option>
                @php
                    $phoneCode = old('phone_code') != null && old('phone_code') ? old('phone_code') : '91';
                    $date = old('date') != null && old('date') ? old('date') : date('Y-m-d');
                    $isWeekend = in_array(date('N', strtotime($date)), [6, 7]);
                    $data = (object) ['transportationVehicles' => []];
                    if ($phoneCode == '91') {
                        $data = $isWeekend ? $weekend->indian : $weekday->indian;
                    } else {
                        $data = $isWeekend ? $weekend->foreigner : $weekday->foreigner;
                    }
                @endphp
                @foreach ($data->transportationVehicles as $vehicle)
                    <option value="{{ $data->id }}-{{ $vehicle->id }}" @if (old('vehicle') == "{$data->id}-{$vehicle->id}") selected @endif>{{ $vehicle->name }}</option>
                @endforeach
            </select>
            <div class="text-sm text-danger">{{ $errors->first('vehicle') ?? '' }}</div>
        </div> --}}
        <div class="col-md-6">
            <div class="numberboxes">
                <div class="numberbox">
                    <div>
                        <label>Adult<span><br>(13-99Y)</span></label>
                    </div>
                    <div class="inc_dec">
                        <div id="adults">
                            <a id="adultDecrease" data-decrease>➖</a>
                            <input id="adultInput" class="adult-input form-control" name="adults" data-value type="text" value="{{ old('adults') ?? 1 }}" readonly>
                            <a id="adultIncrease" data-increase>➕</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-sm text-danger">{{ $errors->first('adults') ?? '' }}</div>
        </div>
        <div class="col-md-6">
            <div class="numberboxes">
                <div class="numberbox">
                    <div>
                        <label>Child<br><span>(3-12Y)</span></label>
                    </div>
                    <div class="inc_dec">
                        <div id="children">
                            <a id="childDecrease" data-decrease>➖</a>
                            <input id="childInput" class="child-input form-control" name="children" data-value type="text" value="{{ old('children') ?? 0 }}" readonly>
                            <a id="childIncrease" data-increase>➕</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-sm text-danger">{{ $errors->first('children') ?? '' }}</div>
        </div>
        <div class="col-md-12 mb-2 text-center">
            <button class="button-29" type="submit">Book Now</button>
        </div>
    </div>
</form>
@section('script')
    @vite(['resources/js/pages/forms-advanced.js'])
    <script>
        const getPackage = () => {
            let data = {
                transportation_vehicles: []
            };
            const date = $('input#date').val();
            const phoneCode = $('input#phone_code').val();
            const isWeekend = [0, 6].includes(new Date(date).getDay());
            if (phoneCode == '91') {
                data = isWeekend ? @json($weekend->indian ?? []) : @json($weekday->indian ?? []);
            } else {
                data = isWeekend ? @json($weekend->foreigner ?? []) : @json($weekday->foreigner ?? []);
            }
            return data;
        }
        $(document).off('changeDate', 'input#date').on('changeDate', 'input#date', function() {
            const data = getPackage();
            let html = `<option value="0" selected>Select Gypsy</option>`;
            for (const ele of data.transportation_vehicles) {
                html += `<option value="${data.id}-${ele.id}">${ele.name}</option>`;
            }
            $('select#vehicle').empty();
            $('select#vehicle').append(html);
            $(`select#timings option`).prop('disabled', false);

            const disabledSlots = @json($disabledSlots ?? []);
            for (const slot of disabledSlots) {
                const slotDate = new Date(slot.date);
                const formattedDate = `${slotDate.getFullYear()}-${String(slotDate.getMonth()+1).padStart(2,'0')}-${String(slotDate.getDate()).padStart(2,'0')}`;
                if (formattedDate == $(this).val()) {
                    $(`select#timings option[value='${slot.time_slot_id}']`).prop('disabled', true);
                }

            }
        });
        $(document).off('change', 'select#vehicle').on('change', 'select#vehicle', function() {
            $('input#adultInput').val(0);
            $('input#childInput').val(0);
        });
        $(document).off('click', 'a#adultIncrease').on('click', 'a#adultIncrease', function(e) {
            const data = getPackage();
            const vehicle = data.transportation_vehicles.filter(item => `${data.id}-${item.id}` == $('select#vehicle').val());
            if (vehicle.length > 0) {
                let adultInput = parseInt($('input#adultInput').val());
                let childInput = parseInt($('input#childInput').val());
                if (childInput > 0) childInput -= 1
                let currentValue = adultInput + childInput;
                if (currentValue > vehicle[0].seats) {
                    adultInput--;
                    $('input#adultInput').val(adultInput);
                }
            }
        });
        $(document).off('click', 'a#childIncrease').on('click', 'a#childIncrease', function(e) {
            const data = getPackage();
            const vehicle = data.transportation_vehicles.filter(item => `${data.id}-${item.id}` == $('select#vehicle').val());
            if (vehicle.length > 0) {
                const adultInput = parseInt($('input#adultInput').val());
                let childInput = parseInt($('input#childInput').val());
                let currentValue = adultInput + childInput;
                if (currentValue > vehicle[0].seats + 1) {
                    childInput--;
                    $('input#childInput').val(childInput);
                }
            }
        });
        $(document).off('countrychange', 'input#mobile_no').on('countrychange', 'input#mobile_no', function() {
            $('input#adultInput').val(0);
            $('input#childInput').val(0);
            $('input#vehicle').val(0);
            const data = getPackage();
            let html = `<option value="0" selected>Select Gypsy</option>`;
            for (const ele of data.transportation_vehicles) {
                html += `<option value="${data.id}-${ele.id}">${ele.name}</option>`;
            }
            $('select#vehicle').empty();
            $('select#vehicle').append(html);
        })
    </script>
@endsection
