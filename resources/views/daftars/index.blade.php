@extends('layouts.app')

@section('style')

<!-- third party css -->
<link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/select.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<!-- third party css end -->

@endsection

@section('content')

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                </div>
                <h4 class="page-title">Jadwal</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    @if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

    @endif

    <div class="row">
        <div class="col-xxl-12 col-xl-12">
            <!-- project card -->
            <div class="card d-block">
                <div class="card-body">
                    <h3 class="mt-3">Jadwal Penilaian Dupak</h3>

                    <div class="row">
                        <div class="col-12">
                            <!-- assignee -->
                            <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Pelaksanaan oleh</p>
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-9.jpg" alt="Arya S" class="rounded-circle me-2"
                                    height="24">
                                <div>
                                    <h5 class="mt-1 font-14">
                                        Sekretariat Penilai Pranata Komputer Provinsi Kepulauan Bangka Belitung
                                    </h5>
                                </div>
                            </div>
                            <!-- end assignee -->
                        </div> <!-- end col -->

                        <div class="col-6">
                            <div class="row">
                                <!-- start due date -->
                                <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Pendaftaran</p>
                                <div class="d-flex">
                                    <i class='uil uil-schedule font-18 text-success me-1'></i>
                                    <div>
                                        <h5 class="mt-1 font-14">
                                            @if($data == 1)
                                            Mulai Tanggal {{ $jadwals[0]->daftar_mulai }} s.d. {{
                                            $jadwals[0]->daftar_selesai
                                            }}
                                            @else
                                            Belum Ada Jadwal
                                            @endif
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end due date -->
                            <div class="row">
                                <!-- start due date -->
                                <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Penilaian</p>
                                <div class="d-flex">
                                    <i class='uil uil-schedule font-18 text-success me-1'></i>
                                    <div>
                                        <h5 class="mt-1 font-14">
                                            @if($data == 1)
                                            Mulai Tanggal {{ $jadwals[0]->nilai_mulai }} s.d. {{
                                            $jadwals[0]->nilai_mulai }}
                                            @else
                                            Belum Ada Jadwal
                                            @endif
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end due date -->
                            <div class="row">
                                <!-- start due date -->
                                <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Sidang</p>
                                <div class="d-flex">
                                    <i class='uil uil-schedule font-18 text-success me-1'></i>
                                    <div>
                                        <h5 class="mt-1 font-14">
                                            @if($data == 1)
                                            Mulai Tanggal {{ $jadwals[0]->sidang_mulai }} s.d. {{
                                            $jadwals[0]->sidang_mulai }}
                                            @else
                                            Belum Ada Jadwal
                                            @endif
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end due date -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    @if($data == 1)
                    <h5 class="mt-3">Keterangan:</h5>

                    <p class="text-muted mb-4">
                        Pelaksanaan penilaian dupak tahap {{ $jadwals[0]->tahap }} tahun {{ $jadwals[0]->tahun }} akan
                        dilaksanakan sesuai jadwal tertera di
                        atas. Perubahan jadwal bisa dilakukan sewaktu-waktu. Harap menyiapkan kelengkapan sesuai tertera
                        di bawah
                    </p>

                    <!-- start sub tasks/checklists -->
                    <h5 class="mt-4 mb-2 font-16">Kelengkapan</h5>
                    <div>
                        <label class="form-check-label strikethrough" for="checklist1">
                            1. Surat Pengantar
                        </label>
                    </div>
                    <div class="mb-2">
                        <label class="form-check-label strikethrough" for="checklist2">
                            2. Dokumen PAK
                        </label>
                    </div>
                    @if($dft == 1)
                    <a class="btn btn-outline-danger btn-rounded mb-3" href="{{ route('daftar',$jadwals[0]->id) }}"
                        onclick="return confirm('Apakah yakin ingin mendaftar?');"><i
                            class="mdi mdi-airplane-takeoff"></i>
                        Daftar</a>
                    @else
                    <button type="submit" class="btn btn-outline-danger btn-rounded mb-3" disabled><i
                            class="mdi mdi-airplane-takeoff"></i>Jadwal Pendaftaran Sudah Lewat</button>
                    @endif
                    @else
                    <h5 class="mt-3">Keterangan:</h5>

                    <p class="text-muted mb-4">
                        Silakan pantau akun Anda untuk melihat jadwal penilaian berikutnya
                    </p>
                    @endif

                    <!-- end sub tasks/checklists -->

                </div> <!-- end card-body-->

            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row-->

</div>
<!-- container -->

@endsection

@section('script')

<!-- third party js -->
<script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.select.min.js') }}"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
<!-- end demo js-->

<script type="text/javascript">
    if( $('.message').is(':visible') ) {
        $(".message").fadeOut(2000);
    }
</script>

@endsection