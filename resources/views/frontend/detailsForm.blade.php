@extends('frontend.layout.main')
@section('title', 'Gir Jungle Safari Booking')

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.html')">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h1>Booking Details</h1>
        </div>
    </div>
    <section id="contact" class="contact">
        <div class="container">
            <div class="row info-item">
                <div class="col-md-4">
                    <p><strong>Name:</strong> {{ $data->first_name }} {{ $data->last_name }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Mobile no:</strong> +{{ $data->phone_code }} {{ $data->mobile_no }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Email:</strong> {{ $data->email ?? '-' }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Booking Date:</strong> {{ date('d-m-Y', strtotime($data->booking_date)) }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Adult:</strong> {{ $data->adult }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Children:</strong> {{ $data->child }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Time slot:</strong> {{ $data->timeSlot->name }}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Transportation Vehicle:</strong> {{ $data->vehicle_name }} ({{ $data->vehicle_price }} /-)</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Price:</strong> {{ $data->price }} /-</p>
                </div>
                <div class="col-md-12 mt-4">
                    <p class="text-danger"><strong>Note:</strong> Vehicle charges have to be paid at the location.</p>
                </div>
            </div>
            <form action="{{ route('details', ['id' => request()->route('id')]) }}" method="POST" enctype="multipart/form-data">
                <div class="row mt-4 info-item">
                    @csrf
                    <div class="notes">
                        <h3 style="color:#C1782A;">Notes:</h3>
                        <ul>
                            <li>Aadhar Card, PAN Card, Driving License and Passport are allowed as identity proof</li>
                            <li>Identity proof is mandatory for all adults.</li>
                            {{-- <li>Identity proof should be in PDF, JPG, JPEG, or PNG format.</li>
                            <li>Identity proof should not exceed 1 MB in size.</li>
                            <li>Identity proof should be clear and readable.</li> --}}
                        </ul>

                    </div>
                    <h3 style="color:#C1782A;"><u>Adult Details</u> :</h3>
                    @for ($i = 0; $i < $data->adult; $i++)
                        <div class="col-md-12 m-0 row mb-4">
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="adult_first_name[]" placeholder="Enter First Name*" value="{{ old('adult_first_name')[$i] ?? ($data->first_name ?? '') }}" required>
                                <div class="text-sm text-danger">{{ $errors->first('adult_first_name.' . $i) ?? '' }}</div>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="adult_last_name[]" placeholder="Enter Last Name*" value="{{ old('adult_last_name')[$i] ?? ($data->last_name ?? '') }}" required>
                                <div class="text-sm text-danger">{{ $errors->first('adult_last_name.' . $i) ?? '' }}</div>
                            </div>
                            <div class="col-md-1">
                                <input type="number" class="form-control" name="adult_age[]" placeholder="Age*" min="0" step="1" value="{{ old('adult_age')[$i] ?? '' }}" required>
                                <div class="text-sm text-danger">{{ $errors->first('adult_age.' . $i) ?? '' }}</div>
                            </div>
                            <div class="col-md-2">
                                <select class="form-select" name="adult_gender[]" required>
                                    <option value="0" selected>Male</option>
                                    <option value="1" @if (old('adult_gender') != null && old('adult_gender')[$i] == '1') selected @endif>Female</option>
                                    <option value="2" @if (old('adult_gender') != null && old('adult_gender')[$i] == '2') selected @endif>Other</option>
                                </select>
                                <div class="text-sm text-danger">{{ $errors->first('adult_gender.' . $i) ?? '' }}</div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" name="adult_identity_proof_type[]">
                                    <option value="0" selected>Select Identity Proof</option>
                                    <option value="1">Aadhar Card</option>
                                    <option value="2">Pan Card</option>
                                    <option value="3">Driving License</option>
                                    <option value="4">Passport</option>
                                </select>
                                <div class="text-sm text-danger">{{ $errors->first('adult_identity_proof_type.' . $i) ?? '' }}</div>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="{{ rand(3, 5) }}" name="adult_identity_proof_id[]" placeholder="Identity Proof ID">
                                <div class="text-sm text-danger">{{ $errors->first('adult_identity_proof_id.' . $i) ?? '' }}</div>
                            </div>
                            {{-- <div class="col-md-3">
                                <input type="file" class="form-control" id="{{ rand(3, 5) }}" name="adult_identity[]" accept="image/png,image/jpeg,image/jpeg,application/pdf" onchange="fileUploader({ input :this, maxSize: 1024, maxFiles: 1, errorPopup:true }).handleFileUpload()">
                                <div class="text-sm text-danger">{{ $errors->first('adult_identity.' . $i) ?? '' }}</div>
                            </div> --}}
                        </div>
                    @endfor

                    @if ($data->child > 0)
                        <h3 style="color:#C1782A;"><u>Children Details</u> :</h3>
                        @for ($i = 0; $i < $data->child; $i++)
                            <div class="col-md-12 m-0 row mb-4">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="child_first_name[]" placeholder="Enter First Name*" value="{{ old('child_first_name')[$i] ?? '' }}" required>
                                    <div class="text-sm text-danger">{{ $errors->first('child_first_name.' . $i) ?? '' }}</div>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="child_last_name[]" placeholder="Enter Last Name*" value="{{ old('child_last_name')[$i] ?? '' }}" required>
                                    <div class="text-sm text-danger">{{ $errors->first('child_last_name.' . $i) ?? '' }}</div>
                                </div>
                                <div class="col-md-1">
                                    <input type="number" class="form-control" name="child_age[]" placeholder="Age*" min="0" step="1" value="{{ old('child_age')[$i] ?? '' }}" required>
                                    <div class="text-sm text-danger">{{ $errors->first('child_age.' . $i) ?? '' }}</div>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select" name="child_gender[]" required>
                                        <option value="0" selected>Male</option>
                                        <option value="1" @if (old('child_gender') != null && old('child_gender')[$i] == '1') selected @endif>Female</option>
                                    </select>
                                    <div class="text-sm text-danger">{{ $errors->first('child_gender.' . $i) ?? '' }}</div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" name="child_identity_proof_type[]">
                                        <option value="0" selected>Select Identity Proof</option>
                                        <option value="1">Aadhar Card</option>
                                        <option value="2">Pan Card</option>
                                        <option value="4">Passport</option>
                                    </select>
                                    <div class="text-sm text-danger">{{ $errors->first('child_identity_proof_type.' . $i) ?? '' }}</div>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="{{ rand(3, 5) }}" name="child_identity_proof_id[]" placeholder="Identity Proof ID">
                                    <div class="text-sm text-danger">{{ $errors->first('child_identity_proof_id.' . $i) ?? '' }}</div>
                                </div>
                                {{-- <div class="col-md-3">
                                    <input type="file" class="form-control" id="{{ rand(3, 5) }}" name="child_identity[]" accept="image/png,image/jpeg,image/jpeg,application/pdf" onchange="fileUploader({ input :this, maxSize: 1024, maxFiles: 1, errorPopup:true }).handleFileUpload()">
                                    <div class="text-sm text-danger">{{ $errors->first('child_identity.' . $i) ?? '' }}</div>
                                </div> --}}
                            </div>
                        @endfor
                    @endif
                    <div class="col-md-12 text-center">
                        <button class="button-29" type="submit">Save & Pay</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
