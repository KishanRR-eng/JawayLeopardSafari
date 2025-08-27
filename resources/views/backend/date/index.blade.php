@extends('layouts.vertical', ['title' => 'Disabled Dates'])
@section('css')
    @vite(['node_modules/simple-datatables/dist/style.css'])
@endsection
@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Disabled Dates</h4>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('backend.date.create') }}" type="button" class="btn btn-primary"><i class="fas fa-plus me-1"></i>Create</a>
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
                                <th>Date</th>
                                <th>Module</th>
                                <th width="11%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ date('Y-m-d',strtotime($value->date)) }}</td>
                                    <td>{{ $value->type == 0 ? 'Gir Safari' : 'Gir Devalia' }}</td>
                                    <td>
                                        @php
                                            $id = Crypt::encrypt($value->id);
                                        @endphp
                                        <a href="javascript:void(0)" type="button" class="btn rounded-pill btn-outline-danger" onclick="handleDelete('{{ $id }}')">
                                            <i class="fas fa-trash"></i>
                                        </a>
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
                        url: "{{ route('backend.date.destroy', 'refId') }}".replace('refId', id),
                        method: "POST",
                        data: {
                            _method: 'DELETE'
                        },
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            toastr.success('Removed Successfully.', 'Success');
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
