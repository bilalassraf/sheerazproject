@extends('layouts.admin.app')

@section('title', 'User | Dashboard')
@section('dashboardActive', 'active')

@section('customCss')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/toastr/toastr.css') }}" />
@endsection

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-4">
            <div class="col-lg-6 mb-4">
                <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg"
                    id="swiper-with-pagination-cards">
                    <div class="swiper-wrapper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                        <small>Total 28.5% Conversion Rate</small>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                            <h6 class="text-white mt-0 mt-md-3 mb-3">Traffic</h6>
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">28%
                                                            </p>
                                                            <p class="mb-0">Sessions</p>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-2">
                                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">1.2k
                                                            </p>
                                                            <p class="mb-0">Leads</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-flex mb-4 align-items-center">
                                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">3.1k
                                                            </p>
                                                            <p class="mb-0">Page Views</p>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-2">
                                                            <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">12%
                                                            </p>
                                                            <p class="mb-0">Conversions</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                            <img src="../../assets/img/illustrations/card-website-analytics-1.png"
                                                alt="Website Analytics" width="170" class="card-website-analytics-img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                        <small>Total 28.5% Conversion Rate</small>
                                    </div>
                                    <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                        <h6 class="text-white mt-0 mt-md-3 mb-3">Spending</h6>
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">12h</p>
                                                        <p class="mb-0">Spend</p>
                                                    </li>
                                                    <li class="d-flex align-items-center mb-2">
                                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">127</p>
                                                        <p class="mb-0">Order</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">18</p>
                                                        <p class="mb-0">Order Size</p>
                                                    </li>
                                                    <li class="d-flex align-items-center mb-2">
                                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">2.3k</p>
                                                        <p class="mb-0">Items</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                        <img src="../../assets/img/illustrations/card-website-analytics-2.png"
                                            alt="Website Analytics" width="170" class="card-website-analytics-img" />
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                        <small>Total 28.5% Conversion Rate</small>
                                    </div>
                                    <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                        <h6 class="text-white mt-0 mt-md-3 mb-3">Revenue Sources</h6>
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">268</p>
                                                        <p class="mb-0">Direct</p>
                                                    </li>
                                                    <li class="d-flex align-items-center mb-2">
                                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">62</p>
                                                        <p class="mb-0">Referral</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">890</p>
                                                        <p class="mb-0">Organic</p>
                                                    </li>
                                                    <li class="d-flex align-items-center mb-2">
                                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">1.2k</p>
                                                        <p class="mb-0">Campaign</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                        <img src="../../assets/img/illustrations/card-website-analytics-3.png"
                                            alt="Website Analytics" width="170" class="card-website-analytics-img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="card-icon">
                            <span class="badge bg-label-success rounded-pill p-2">
                                <i class="ti ti-credit-card ti-sm"></i>
                            </span>
                        </div>
                        <h5 class="card-title mb-0 mt-2">987</h5>
                        <small>Airports</small>
                    </div>
                    <div id="revenueGenerated"></div>
                </div>
            </div>

            <!-- Total Daily Return -->
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
                <div class="card">
                    <a href="#" class="card-body">
                        <div class="badge p-2 bg-label-danger mb-2 rounded">
                            <span class="badge bg-label-success rounded-pill p-2">
                                <i class="ti ti-credit-card ti-sm"></i>
                            </span>
                        </div>
                        <h5 class="card-title mb-1 pt-2">Airlines</h5>
                        <small class="text-muted">Till Date</small>
                        <h5 class="mb-2 mt-1">987</h5>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
                <div class="card">
                    <a href="#" class="card-body">
                        <div class="badge p-2 bg-label-danger mb-2 rounded">
                            <span class="badge bg-label-success rounded-pill p-2">
                                <i class="ti ti-credit-card ti-sm"></i>
                            </span>
                        </div>
                        <h5 class="card-title mb-1 pt-2">Travel Classes</h5>
                        <small class="text-muted">Till Date</small>
                        <h5 class="mb-2 mt-1">4</h5>
                    </a>
                </div>
            </div>

            <!-- Total Profit -->
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
                <div class="card">
                    <a href="#" class="card-body">
                        <div class="badge p-2 bg-label-danger mb-2 rounded">
                            <span class="badge bg-label-success rounded-pill p-2">
                                <i class="ti ti-credit-card ti-sm"></i>
                            </span>
                        </div>
                        <h5 class="card-title mb-1 pt-2">Passenger Types</h5>
                        <small class="text-muted">Till Date</small>
                        <h5 class="mb-2 mt-1">04</h5>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
                <div class="card">
                    <a href="#" class="card-body">
                        <div class="badge p-2 bg-label-danger mb-2 rounded">
                            <span class="badge bg-label-success rounded-pill p-2">
                                <i class="ti ti-credit-card ti-sm"></i>
                            </span>
                        </div>
                        <h5 class="card-title mb-1 pt-2">Cities</h5>
                        <small class="text-muted">Till Date</small>
                        <h5 class="mb-2 mt-1">900</h5>
                    </a>
                </div>
            </div>
            <!-- Total Profit -->
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-danger mb-2 rounded">
                            <span class="badge bg-label-success rounded-pill p-2">
                                <i class="ti ti-credit-card ti-sm"></i>
                            </span>
                        </div>
                        <h5 class="card-title mb-1 pt-2">Countries</h5>
                        <small class="text-muted">Till Date</small>
                        <h5 class="mb-2 mt-1">900</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
                <a href="#">
                    <div class="card">
                        <div class="card-body">
                            <div class="badge p-2 bg-label-danger mb-2 rounded">
                                <span class="badge bg-label-success rounded-pill p-2">
                                    <i class="ti ti-credit-card ti-sm"></i>
                                </span>
                            </div>
                            <h5 class="card-title mb-1 pt-2">States</h5>
                            <small class="text-muted">Till Date</small>
                            <p class="mb-2 mt-1">1000</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('customJs')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/toastr/toastr.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>

    <script>
        @include('components.datatable')
    </script>

    <script>
        @include('components.toaster')
    </script>

@endsection
