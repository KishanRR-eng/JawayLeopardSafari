<div class="booking__details">
    <div class="basic__details">
        <table class="table">
            <tbody>
                <tr>
                    <th>Name :</th>
                    <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                    <th>Mobile no. :</th>
                    <td>+{{ $data->phone_code }} {{ $data->mobile_no }}</td>
                </tr>
                <tr>
                    <th>Email :</th>
                    <td>{{ $data->email ?? '-' }}</td>
                    <th>Booking Date :</th>
                    <td>{{ date('d-m-Y', strtotime($data->booking_date)) }}</td>
                </tr>
                <tr>
                    <th>Time Slot :</th>
                    <td>{{ $data->time_slot }}</td>
                    <th>Place :</th>
                    <td>{{ $data->type == 0 ? 'Gir Safari' : 'Gir Devalia' }}</td>
                </tr>
                <tr>
                    <th>Price :</th>
                    <td>{{ $data->price }}</td>
                    <th>Vehicle :</th>
                    <td>{{ $data->vehicle_name }} ({{ $data->vehicle_price }})</td>
                </tr>
                <tr>
                    <th>Payment :</th>
                    <td>
                        @if (isset($value->payment_id))
                            <span class="badge bg-success">Paid</span>
                        @else
                            <span class="badge bg-danger">Pending</span>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tourist__details">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Identity Proof Type</th>
                    <th>Identity Proof ID</th>
                    <th>Person</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->details as $person)
                    <tr>
                        <td>{{ $person->first_name }} {{ $person->last_name }}</td>
                        <td>{{ $person->age }}</td>
                        <td>{{ $genders[$person->gender] }}</td>
                        <td>{{ $identityProofTypes[$person->identity_proof_type] }}</td>
                        <td>{{ $person->identity_proof_id ?? '-' }}</td>
                        {{-- <td>
                            @if (!empty($person->identity_proof))
                                <a href="javascript:void(0)" type="button" class="btn rounded-pill btn-outline-primary" onclick="fileDownloader({ url : '{{ route('backend.download') }}' , id : '{{ $person->identity_proof }}', downloadType: 'single' }).downloadFile()">
                                    <i class="fas fa-download"></i>
                                </a>
                            @else
                                -
                            @endif
                        </td> --}}
                        <td>{{ $person->type == 0 ? 'Adult' : 'Child' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
