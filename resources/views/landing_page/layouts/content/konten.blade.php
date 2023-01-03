@extends('landing_page.base_layout.base_layout')

@section('style')
<link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
<style>
    .card-1 {
        background-color: 	rgb(255, 204, 204);
    }
    .card-2 {
       background-color:  rgb(179, 179, 255);
    }
    .card-3 {
       background-color:  rgb(204, 255, 221)
    }
    .card-4 {
       background-color:  rgb(255, 255, 153);
    }
</style>
@endsection

@section('content')
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <form class="d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-light" id="dash-daterange">
                                        <span class="input-group-text bg-primary border-primary text-white">
                                            <i class="mdi mdi-calendar-range font-13"></i>
                                        </span>
                                    </div>
                                    <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                        <i class="mdi mdi-autorenew"></i>
                                    </a>
                                </form>
                            </div>
                            <h4 class="page-title">DUPAK</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="card tilebox-one card-1">
                            <div class="card-body">
                                <i class='uil uil-users-alt float-end'></i>
                                <h6 class="text-uppercase mt-0">Active Users</h6>
                                <h2 class="my-2" id="active-users-count">121</h2>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                    <span class="text-nowrap">Since last month</span>  
                                </p>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col -->
                    <div class="col-xl-3 col-lg-4">
                        
                        <div class="card tilebox-one card-3">
                            <div class="card-body">
                                <i class='uil uil-window-restore float-end'></i>
                                <h6 class="text-uppercase mt-0">Views per minute</h6>
                                <h2 class="my-2" id="active-views-count">560</h2>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><span class="mdi mdi-arrow-down-bold"></span> 1.08%</span>
                                    <span class="text-nowrap">Since previous week</span>
                                </p>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="card tilebox-one card-2">
                            <div class="card-body">
                                <i class='uil uil-users-alt float-end'></i>
                                <h6 class="text-uppercase mt-0">Active Users</h6>
                                <h2 class="my-2" id="active-users-count">121</h2>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                    <span class="text-nowrap">Since last month</span>  
                                </p>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-3 col-lg-4">
                        <div class="card tilebox-one card-4">
                            <div class="card-body">
                                <i class='uil uil-users-alt float-end'></i>
                                <h6 class="text-uppercase mt-0">Active Users</h6>
                                <h2 class="my-2" id="active-users-count">121</h2>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                    <span class="text-nowrap">Since last month</span>  
                                </p>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col -->


                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="card tilebox-one card-4">
                            <div class="card-body">
                                <i class='uil uil-users-alt float-end'></i>
                                <h6 class="text-uppercase mt-0">Active Users</h6>
                                <h2 class="my-2" id="active-users-count">121</h2>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                    <span class="text-nowrap">Since last month</span>  
                                </p>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col -->
                    <div class="col-xl-3 col-lg-4">
                        
                        <div class="card tilebox-one card-1" >
                            <div class="card-body">
                                <i class='uil uil-window-restore float-end'></i>
                                <h6 class="text-uppercase mt-0">Views per minute</h6>
                                <h2 class="my-2" id="active-views-count">560</h2>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><span class="mdi mdi-arrow-down-bold"></span> 1.08%</span>
                                    <span class="text-nowrap">Since previous week</span>
                                </p>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="card tilebox-one card-2">
                            <div class="card-body">
                                <i class='uil uil-users-alt float-end'></i>
                                <h6 class="text-uppercase mt-0">Active Users</h6>
                                <h2 class="my-2" id="active-users-count">121</h2>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                    <span class="text-nowrap">Since last month</span>  
                                </p>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-3 col-lg-4">
                        <div class="card tilebox-one card-3">
                            <div class="card-body">
                                <i class='uil uil-users-alt float-end'></i>
                                <h6 class="text-uppercase mt-0">Active Users</h6>
                                <h2 class="my-2" id="active-users-count">121</h2>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                    <span class="text-nowrap">Since last month</span>  
                                </p>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col -->


                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    </div>
                                </div>
                                <h4 class="header-title">Views Per Minute</h4>

                                <div id="views-min" class="apex-charts mt-2" data-colors="#0acf97"></div>

                                <div class="table-responsive mt-3">
                                    <table class="table table-sm mb-0 font-13">
                                        <thead>
                                            <tr>
                                                <th>Page</th>
                                                <th>Views</th>
                                                <th>Bounce Rate</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-muted">/hyper/dashboard-analytics</a>
                                                </td>
                                                <td>25</td>
                                                <td>87.5%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-muted">/hyper/dashboard-crm</a>
                                                </td>
                                                <td>15</td>
                                                <td>21.48%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-muted">/ubold/dashboard</a>
                                                </td>
                                                <td>10</td>
                                                <td>63.59%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-muted">/minton/home</a>
                                                </td>
                                                <td>7</td>
                                                <td>56.12%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    </div>
                                </div>
                                <h4 class="header-title">Sessions by Browser</h4>

                                <div id="sessions-browser" class="apex-charts mt-3" data-colors="#727cf5"></div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    </div>
                                </div>
                                <h4 class="header-title">Sessions by Operating System</h4>

                                <div id="sessions-os" class="apex-charts mt-3" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>

                                <div class="row text-center mt-2">
                                    <div class="col-6">
                                        <h4 class="fw-normal">
                                            <span>6,510</span>
                                        </h4>
                                        <p class="text-muted mb-0">Online System</p>
                                    </div>
                                    <div class="col-6">
                                        <h4 class="fw-normal">
                                            <span>2,031</span>
                                        </h4>
                                        <p class="text-muted mb-0">Offline System</p>
                                    </div>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="" class="p-0 float-end">Export <i class="mdi mdi-download ms-1"></i></a>
                                <h4 class="header-title mt-1 mb-3">Channels</h4>

                                <div class="table-responsive">
                                    <table class="table table-sm table-centered mb-0 font-14">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Channel</th>
                                                <th>Visits</th>
                                                <th style="width: 40%;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Direct</td>
                                                <td>2,050</td>
                                                <td>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 65%; height: 20px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Organic Search</td>
                                                <td>1,405</td>
                                                <td>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%; height: 20px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Refferal</td>
                                                <td>750</td>
                                                <td>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%; height: 20px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Social</td>
                                                <td>540</td>
                                                <td>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="" class="p-0 float-end">Export <i class="mdi mdi-download ms-1"></i></a>
                                <h4 class="header-title mt-1 mb-3">Social Media Traffic</h4>

                                <div class="table-responsive">
                                    <table class="table table-sm table-centered mb-0 font-14">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Network</th>
                                                <th>Visits</th>
                                                <th style="width: 40%;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Facebook</td>
                                                <td>2,250</td>
                                                <td>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 65%; height: 20px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Instagram</td>
                                                <td>1,501</td>
                                                <td>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 45%; height: 20px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Twitter</td>
                                                <td>750</td>
                                                <td>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 30%; height: 20px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>LinkedIn</td>
                                                <td>540</td>
                                                <td>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="" class="p-0 float-end">Export <i class="mdi mdi-download ms-1"></i></a>
                                <h4 class="header-title mt-1 mb-3">Engagement Overview</h4>

                                <div class="table-responsive">
                                    <table class="table table-sm table-centered mb-0 font-14">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Duration (Secs)</th>
                                                <th style="width: 30%;">Sessions</th>
                                                <th style="width: 30%;">Views</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>0-30</td>
                                                <td>2,250</td>
                                                <td>4,250</td>
                                            </tr>
                                            <tr>
                                                <td>31-60</td>
                                                <td>1,501</td>
                                                <td>2,050</td>
                                            </tr>
                                            <tr>
                                                <td>61-120</td>
                                                <td>750</td>
                                                <td>1,600</td>
                                            </tr>
                                            <tr>
                                                <td>121-240</td>
                                                <td>540</td>
                                                <td>1,040</td>  
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- container -->
@endsection
@section('script')
     <!-- <script src="assets/js/vendor/Chart.bundle.min.js"></script> -->
     <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>
     <script src="{{ asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
     <script src="{{ asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>

    <script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
     <!-- third party js ends -->

     <!-- demo app -->
     <script src="{{ asset('assets/js/pages/demo.dashboard-analytics.js') }}"></script>
     <!-- end demo js-->
@endsection
