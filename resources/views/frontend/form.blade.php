@section('css')
    @vite(['node_modules/intl-tel-input/build/css/intlTelInput.min.css', 'node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
    <style>
        .iti--allow-dropdown {
            width: 100%;
        }
    </style>
@endsection
<form class="firststep_form new_forms" id="#safari-pack" method="POST" action="{{ route('booking') }}">
    @csrf
    <h3 class="text-center">Check availability & Book</h3>
    <div class="row gy-3 tab-pane fade show active">
        <div class="col-md-6">
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name*"
                value="{{ old('first_name') ?? (session()->get('first_name') ?? '') }}" required>
            <div class="text-sm text-danger">{{ $errors->first('first_name') ?? '' }}</div>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name*"
                value="{{ old('last_name') ?? (session()->get('last_name') ?? '') }}" required>
            <div class="text-sm text-danger">{{ $errors->first('last_name') ?? '' }}</div>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                value="{{ old('mobile_no') ?? (session()->get('mobile_no') ?? '') }}" required>
            <input type="hidden" name="phone_code" id="phone_code" value="{{ old('phone_code') ?? '91' }}">
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email"
                value="{{ old('email') ?? (session()->get('email') ?? '') }}">
            <div class="text-sm text-danger">{{ $errors->first('email') ?? '' }}</div>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" name="date" id="date" placeholder="Select Date*"
                value="{{ old('date') ?? '' }}" required>
            <div class="text-sm text-danger">{{ $errors->first('date') ?? '' }}</div>
        </div>
        <div class="col-md-6">
            <select class="form-control" name="timing" id="timing">
                <option value="0" selected>Select Time Slot</option>
                @php
                    $phoneCode = old('phone_code') != null && old('phone_code') ? old('phone_code') : '91';
                    $date = old('date') != null && old('date') ? old('date') : date('Y-m-d');
                    $isWeekend = in_array(date('N', strtotime($date)), [6, 7]);
                    $data = (object) ['timeSlots' => []];
                    if ($phoneCode == '91') {
                        $data = $isWeekend ? $weekend->indian : $weekday->indian;
                    } else {
                        $data = $isWeekend ? $weekend->foreigner : $weekday->foreigner;
                    }
                @endphp
                @foreach ($data->timeSlots as $slot)
                    <option value="{{ $data->id }}-{{ $slot->id }}"
                        @if (old('timing') == "{$data->id}-{$slot->id}") selected @endif>{{ $slot->name }}</option>
                @endforeach
            </select>
            <div class="text-sm text-danger">{{ $errors->first('timing') ?? '' }}</div>
        </div>
        <div class="col-md-6">
            <div class="numberboxes">
                <div class="numberbox">
                    <div>
                        <label>Adult<span><br>(13-99Y)</span></label>
                    </div>
                    <div class="inc_dec">
                        <div id="adults">
                            <a id="adultDecrease" data-decrease>➖</a>
                            <input id="adultInput" class="adult-input form-control" name="adults" data-value
                                type="text" value="{{ old('adults') ?? 1 }}" readonly>
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
                            <input id="childInput" class="child-input form-control" name="children" data-value
                                type="text" value="{{ old('children') ?? 0 }}" readonly>
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
                time_slots: []
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
            $(`select#timing option`).prop('disabled', false);
            const data = getPackage();
            const disabledSlots = @json($disabledSlots ?? []);

            let html = `<option value="0" selected>Select Time Slot</option>`;
            for (const ele of data.time_slots) {
                html += `<option value="${data.id}-${ele.id}">${ele.name}</option>`;
            }
            $('select#timing').empty();
            $('select#timing').append(html);

            for (const slot of disabledSlots) {
                const slotDate = new Date(slot.date);
                const formattedDate =
                    `${slotDate.getFullYear()}-${String(slotDate.getMonth()+1).padStart(2,'0')}-${String(slotDate.getDate()).padStart(2,'0')}`;
                if (formattedDate == $(this).val()) {
                    $(`select#timing option[value='${data.id}-${slot.time_slot_id}']`).prop('disabled', true);
                }

            }
        });
        $(document).off('click', 'a#adultIncrease').on('click', 'a#adultIncrease', function(e) {
            let adultInput = parseInt($('input#adultInput').val());
            let childInput = parseInt($('input#childInput').val());
            if (childInput > 0) childInput -= 1
            let currentValue = adultInput + childInput;
            if (currentValue > 6) {
                adultInput--;
                $('input#adultInput').val(adultInput);
            }
        });
        $(document).off('click', 'a#childIncrease').on('click', 'a#childIncrease', function(e) {
            const adultInput = parseInt($('input#adultInput').val());
            let childInput = parseInt($('input#childInput').val());
            let currentValue = adultInput + childInput;
            if (currentValue > 7) {
                childInput--;
                $('input#childInput').val(childInput);
            }
        });
        $(document).off('countrychange', 'input#mobile_no').on('countrychange', 'input#mobile_no', function() {
            $('input#adultInput').val(0);
            $('input#childInput').val(0);
            const data = getPackage();
            let html = `<option value="0" selected>Select Time Slot</option>`;
            for (const ele of data.time_slots) {
                html += `<option value="${data.id}-${ele.id}">${ele.name}</option>`;
            }
            $('select#timing').empty();
            $('select#timing').append(html);
        })
    </script>
@endsection
