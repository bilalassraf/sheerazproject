@extends('layouts.admin.app')

@section('title', 'Airport | Dashboard')
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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Form/</span> Airport Create</h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-between justify-content-between">
                        <div class="col-6">
                            <h5 class="mb-0">Airline Create Form</h5>
                        </div>
                        <div class="col-6 float-end">
                            <a href="{{ route('airlines.index') }}" class="btn btn-primary float-end">
                                Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('airlines.store') }}" method="POST">
                            @csrf
                            <!-- Name -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" required />
                                </div>
                            </div>

                            <!-- Country ID -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="country_id">Country ID</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="country_id" required />
                                </div>
                            </div>

                            <!-- IATA Code -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="IATA_code">IATA Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="IATA_code" />
                                </div>
                            </div>

                            <!-- ICAO Code -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="ICAO_code">ICAO Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ICAO_code" />
                                </div>
                            </div>

                            <!-- Headquarters -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="headquarters">Headquarters</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="headquarters" />
                                </div>
                            </div>

                            <!-- Founded Year -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="founded_year">Founded Year</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="founded_year" />
                                </div>
                            </div>

                            <!-- Website -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="website">Website</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="website" />
                                </div>
                            </div>

                            <!-- Contact Phone -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="contact_phone">Contact Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="contact_phone" />
                                </div>
                            </div>

                            <!-- Fleet Size -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="fleet_size">Fleet Size</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="fleet_size" />
                                </div>
                            </div>

                            <!-- Alliance -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="alliance">Alliance</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alliance" />
                                </div>
                            </div>

                            <!-- Contact Email -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="contact_email">Contact Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="contact_email" />
                                </div>
                            </div>

                            <!-- Is Active -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Is Active</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_active" value="1"
                                            required />
                                        <label class="form-check-label" for="is_active">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_active"
                                            value="0" />
                                        <label class="form-check-label" for="is_active">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-9 col-12 col-lg-12">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
                            </div>
                        </form>

                    </div>
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
        @include('components.toaster')
    </script>
@endsection
