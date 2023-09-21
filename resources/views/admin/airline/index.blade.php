@extends('layouts.admin.app')
@section('title', 'Airport | TravelCartUk')
@section('airportActive', 'active')
@section('customCss')
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content-body">
            <div class="card mt-4">
                <h5 class="card-header">
                    <div class="content-header row d-flex justify-content-between align-items-between">
                        <div class="col-6">
                            <h3>All Airlines</h3>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('airlines.create') }}" class="btn btn-primary float-end">
                                Add New Recordd +
                            </a>
                        </div>
                    </div>
                </h5>
                <div class="card-datatable table-responsive">
                    <table id="example" class="dt-responsive table">
                        <thead>
                            <tr>
                                <th>S.#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>ICAO Code</th>
                                <th>Website</th>
                                <th>Contact Email</th>
                                <th>Contact Phone</th>
                                <th>Created At</th>
                                <th>Is Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="w-100 justify-content-center align-items-center">
                            @php
                                $i = 1;
                            @endphp

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customJs')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        @include('components.datatable')
    </script>

    <script>
        @include('components.toaster')
    </script>
@endsection
