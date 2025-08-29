@extends('layouts.vertical', ['title' => 'Packages'])
@section('css')
    @vite(['node_modules/simple-datatables/dist/style.css'])
@endsection
@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Packages</h4>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('backend.package.create') }}" type="button" class="btn btn-primary"><i class="fas fa-plus me-1"></i>Create</a>
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
                                <th>Day Type</th>
                                <th>Tourist Type</th>
                                <th>Price</th>
                                <th>Time Slots</th>
                                <th>Status</th>
                                <th width="11%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->day_type == 0 ? 'Weekday' : 'Weekend' }}</td>
                                     <td>{{ $value->tourist_type == 0 ? 'Indian' : 'Foreigner' }}</td>
                                    <td>{{ $value->price }}/-</td>
                                    <td>
                                        <ul>
                                            @foreach ($value->timeSlots as $slot)
                                                <li>{{ $slot->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        @if ($value->status)
                                            <span class="badge bg-success">Yes</span>
                                        @else
                                            <span class="badge bg-danger">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        @php
                                            $id = Crypt::encrypt($value->id);
                                        @endphp
                                        <a href="{{ route('backend.package.edit', ['id' => $id]) }}" type="button" class="btn rounded-pill btn-outline-primary me-2"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" type="button" class="btn rounded-pill btn-outline-danger" onclick="handleDelete('{{ $id }}')"><i
                                                class="fas fa-trash"></i></a>
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
@endsection
@section('script')
    @vite(['resources/js/pages/datatable.init.js'])
    <script>
        const handleDelete = (id) => {
            Swal.fire({
                title: 'Are you sure?',
                showDenyButton: true,
                confirmButtonText: `Yes`,
                denyButtonText: `No`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('backend.package.destroy', 'refId') }}".replace('refId', id),
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
