@extends('landing_page.base_layout.base_layout')

@section('style')
<link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">
<style>
    .card-1 {
        background-color: rgb(255, 204, 204);
    }
</style>
@endsection

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="header-title mt-1 mb-3">Jadwal Penilaian Dupak</h4>

                    <div class="table-responsive">
                        <table class="table table-sm table-centered mb-0 font-14">
                            <thead class="table-light">
                                <tr>
                                    <th>Tahapan</th>
                                    <th>Jadwal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($data == 0)
                                <tr>
                                    <td colspan="2">Belum Ada Jadwal Penilaian Untuk Saat Ini</td>
                                </tr>
                                @else
                                <tr>
                                    <td>Pendaftaran</td>
                                    <td><i class="uil-schedule me-1"></i>Dimulai dari tanggal {{
                                        $jadwals[0]->daftar_mulai }} s.d. {{
                                        $jadwals[0]->daftar_selesai }}</td>
                                </tr>
                                <tr>
                                    <td>Persiapan</td>
                                    <td><i class="uil-schedule me-1"></i>Dimulai dari tanggal {{ $jadwals[0]->siap_mulai
                                        }} s.d. {{
                                        $jadwals[0]->siap_selesai }}</td>
                                </tr>
                                <tr>
                                    <td>Penilaian</td>
                                    <td><i class="uil-schedule me-1"></i>Dimulai dari tanggal {{
                                        $jadwals[0]->nilai_mulai }} s.d. {{
                                        $jadwals[0]->nilai_selesai }}</td>
                                </tr>
                                <tr>
                                    <td>Sidang</td>
                                    <td><i class="uil-schedule me-1"></i>Dimulai dari tanggal {{
                                        $jadwals[0]->sidang_mulai }} s.d. {{
                                        $jadwals[0]->sidang_selesai }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->



    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Prakom Terdaftar</h6>
                    <h2 class="my-2" id="active-users-count">0</h2>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
        <div class="col-xl-3 col-lg-4">

            <div class="card tilebox-one card-1">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Prakom Daftar Penilaian</h6>
                    <h2 class="my-2" id="active-views-count">0</h2>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div>
        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Prakom Syarat Minimal </h6>
                    <h2 class="my-2" id="active-users-count">0</h2>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one card-1">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Prakom Belum Syarat Minimal</h6>
                    <h2 class="my-2" id="active-users-count">0</h2>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->


    </div>

</div>
<!-- container -->
@endsection
@section('script')
<!-- <script src="assets/js/vendor/Chart.bundle.min.js"></script> -->
<script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="{{ asset('assets/js/pages/demo.dashboard-analytics.js') }}"></script>
<!-- end demo js-->
@endsection