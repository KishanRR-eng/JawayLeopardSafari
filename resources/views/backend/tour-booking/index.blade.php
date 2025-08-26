@extends('layouts.vertical', ['title' => 'Bookings'])
@section('css')
    @vite(['node_modules/simple-datatables/dist/style.css'])
    <style>
        #bookingDetailsModal .modal-dialog {
            max-width: 1000px !important;
        }
    </style>
@endsection
@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Bookings</h4>
                    </div>
                    <div class="col-auto">
                        {{-- <a href="{{ route('backend.booking.create') }}" type="button" class="btn btn-primary"><i class="fas fa-plus me-1"></i>Create</a> --}}
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table datatable" id="datatable_1">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile no.</th>
                                <th>Date</th>
                                <th>Time Slot</th>
                                <th>Details</th>
                                <th>Payment</th>
                                <th width="11%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                                    <td>{{ $value->email ?? '-' }}</td>
                                    <td>+{{ $value->phone_code }} {{ $value->mobile_no }}</td>
                                    <td>{{ date('d-m-Y', strtotime($value->booking_date)) }}</td>
                                    <td>{{ $value->timeSlot->name }}</td>
                                    <td>
                                        <ul>
                                            <li>
                                                {{ $value->type == 0 ? 'Gir Safari' : 'Gir Devalia' }} ({{ $value->price }})
                                                <ul>
                                                    <li>{{ $value->vehicle_name }} ({{ $value->vehicle_price }})</li>
                                                    <li>Adults : {{ $value->adult }}</li>
                                                    <li>Children : {{ $value->child }}</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        @if (isset($value->payment_id))
                                            <span class="badge bg-success">Paid</span>
                                        @else
                                            <span class="badge bg-danger">Pending</span>
                                        @endif
                                    </td>
                                    <td>
                                        @php
                                            $id = Crypt::encrypt($value->id);
                                        @endphp
                                        @if ($value->details_count > 0)
                                            <a href="javascript:void(0)" type="button" class="btn rounded-pill btn-outline-primary me-2" onclick="handleShow('{{ $id }}')"><i class="fas fa-eye"></i></a>
                                        @endif
                                        {{-- <a href="{{ route('backend.booking.edit', ['id' => $id]) }}" type="button" class="btn rounded-pill btn-outline-primary me-2"><i class="fas fa-edit"></i></a> --}}
                                        <a href="javascript:void(0)" type="button" class="btn rounded-pill btn-outline-danger" onclick="handleDelete('{{ $id }}')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end /table-->
                </div>
                <!--end /tableresponsive-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <div class="modal fade" id="bookingDetailsModal" tabindex="-1" role="dialog" data-bs-backdrop="true" aria-labelledby="bookingDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="bookingDetailsModalLabel">Booking Details</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!--end modal-header-->
                <div class="modal-body">

                </div><!--end modal-body-->
            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
    </div><!--end modal-->
@endsection
@section('script')
    @vite(['resources/js/pages/datatable.init.js'])
    <script>
        const handleShow = (id) => {
            $('div#bookingDetailsModal .modal-body').html('')
            $.ajax({
                url: "{{ route('backend.booking.show', 'refId') }}".replace('refId', id),
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(data) {
                    $('div#bookingDetailsModal .modal-body').html(data.html);
                    $('div#bookingDetailsModal').modal('show')
                },
                error: function(data) {
                    toastr.error('Something went wrong.', 'Error')
                }
            });
        }
        const handleDelete = (id) => {
            Swal.fire({
                title: 'Are you sure?',
                showDenyButton: true,
                confirmButtonText: `Yes`,
                denyButtonText: `No`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('backend.booking.destroy', 'refId') }}".replace('refId', id),
                        method: "POST",
                        data: {
                            _method: 'DELETE'
                        },
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            toastr.success('Removed Successfully.', 'Success')
                            location.reload();
                        },
                        error: function(data) {
                            if (data.responseJSON && data.responseJSON.message && data.responseJSON.message.length > 0) {
                                toastr.error(data.responseJSON.message, 'Warning');
                                return;
                            }
                            toastr.error('Something went wrong.', 'Error')
                        }
                    });
                }
            })
        }
    </script>
@endsection
