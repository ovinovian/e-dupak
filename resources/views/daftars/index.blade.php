@extends('layouts.app')

@section('style')

<!-- third party css -->
<link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/select.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
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
                                <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Persiapan</p>
                                <div class="d-flex">
                                    <i class='uil uil-schedule font-18 text-success me-1'></i>
                                    <div>
                                        <h5 class="mt-1 font-14">
                                            @if($data == 1)
                                            Mulai Tanggal {{ $jadwals[0]->siap_mulai }} s.d. {{
                                            $jadwals[0]->siap_mulai }}
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
                            2. Laporan Kegiatan
                        </label>
                    </div>
                    @if($aju == 0)
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Status Pendaftaran</h4>
                                    <!-- end nav-->
                                    <div class="grid-structure">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col-md-1">
                                                    @if($daftarAju[0]['status_daftar']==2)
                                                    <button class="btn btn-primary disabled" disabled>Rubah</button>
                                                    @else
                                                    <a class="btn btn-primary"
                                                        href="{{ route('daftars.edit',$daftarAju[0]['id_daftar']) }}">Rubah</a>
                                                    @endif
                                                </div>
                                                <div class="col-md-2">
                                                    <form action="{{ route('ajuDupak',$daftarAju[0]['id_daftar']) }}"
                                                        method="GET">
                                                        @csrf
                                                        @method('GET')
                                                        @if($daftarAju[0]['status_daftar']==2)
                                                        <button class="btn btn-success" disabled>Sudah diajukan</button>
                                                        @else
                                                        <button type="submit" class="btn btn-success"
                                                            onclick="return confirm('Apakah yakin ingin mengajukan dupak?');">Aju
                                                            Dupak</button>
                                                        @endif
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">Status
                                                </div>
                                                <div class="col-md-3">Sudah Mendaftar, Belum Diajukan
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">Masa Kerja Penilaian Saat Ini
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $daftarAju[0]['mk_tahun_baru'] }} Tahun {{
                                                    $daftarAju[0]['mk_bulan_baru'] }} Baru
                                                </div>
                                            </div>
                                            <div class="row mb-2 mt-4">
                                                <div class="col-md-4">Surat Pengantar
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="{{ asset('storage/documents/'.$daftarAju[0]['surat_pengantar'].'')
                                                }}" class="btn btn-primary" role="button" target="_blank"  style="margin-bottom: 10px">Lihat Dokumen</a>
                                                    <iframe src="{{ asset('storage/documents/'.$daftarAju[0]['surat_pengantar'].'')
                                                    }}" frameborder="0"></iframe>

                                                </div>
                                            </div>
                                            <div class="row mb-2 mt-4">
                                                <div class="col-md-4">Laporan Kegiatan
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="{{asset('storage/documents/'.$daftarAju[0]['laporan_kegiatan'].'')}}" class="btn btn-primary" role="button" target="_blank" style="margin-bottom: 10px">Lihat Dokumen</a>
                                                    <iframe src="{{ asset('storage/documents/'.$daftarAju[0]['laporan_kegiatan'].'') }}" frameborder="0"></iframe>

                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">Total Usulan
                                                </div>
                                                <div class="col-md-3">{{
                                                    $daftarAju[0]['tugas_jabatan']+$daftarAju[0]['pengembangan_profesi']+$daftarAju[0]['unsur_penunjang']
                                                    }}
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">Unsur Utama (Pengembangan Profesi + Tugas Jabatan)
                                                </div>
                                                <div class="col-md-3">{{
                                                    $daftarAju[0]['tugas_jabatan']+$daftarAju[0]['pengembangan_profesi']
                                                    }} ( {{ $daftarAju[0]['pengembangan_profesi'] }} + {{
                                                    $daftarAju[0]['tugas_jabatan'] }} )
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">Unsur Penunjang
                                                </div>
                                                <div class="col-md-3">{{
                                                    $daftarAju[0]['unsur_penunjang'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Butir Kegiatan</h4>
                                        <!-- end nav-->
                                        <div class="grid-structure">
                                            {{ $no_unsur = "" }}
                                            {{ $no_sub_unsur = "" }}
                                            <div class="card-body">
                                                @foreach ($butir as $item)
                                                <!-- task -->
                                                @if($item->no_unsur != $no_unsur)
                                                <div class="row mb-2">
                                                    <div class="col-md-12"><button type="button" class="btn btn-primary"
                                                            disabled>Unsur
                                                            : {{
                                                            $item->no_unsur }}.
                                                            {{ $item->unsur }}</button>
                                                    </div> <!-- end col -->
                                                    @php
                                                    $no_unsur = $item->no_unsur;
                                                    @endphp
                                                </div>
                                                @endif
                                                @if($item->no_sub_unsur != $no_sub_unsur)
                                                <div class="row mb-2">
                                                    <div class="col-md-12"><button type="button" class="btn btn-success"
                                                            disabled>>>>
                                                            Sub
                                                            Unsur : {{
                                                            $item->no_sub_unsur }}. {{ $item->sub_unsur }}</div>
                                                    <!-- end col -->
                                                    @php
                                                    $no_sub_unsur = $item->no_sub_unsur;
                                                    @endphp
                                                </div>
                                                @endif
                                                <div class="row mb-2">
                                                    <!-- end col -->
                                                    <div class="col-sm-8"><button type="button"
                                                            class="btn btn-outline-info text-left" disabled>>>>>>>
                                                            Uraian Kegiatan : {{ $item->no_uraian_kegiatan }}. {{
                                                            $item->uraian_kegiatan
                                                            }}
                                                    </div> <!-- end col -->
                                                    @php
                                                    $nilai = App\Models\DaftarDetail::where('id_jadwal',
                                                    $daftarAju[0]['id_jadwal'])->where('id_butir',
                                                    $item['id'])->first();
                                                    @endphp
                                                    <div class="col-sm-1"><input type="text" name="nilai[]"
                                                            class="form-control text-end" value="{{ $nilai['nilai'] }}"
                                                            disabled>
                                                    </div> <!-- end col -->
                                                </div>
                                                @endforeach
                                            </div>
                                            <!-- end task -->

                                        </div> <!-- end card-body-->
                                    </div>
                                </div>
                            </div>

                        </div><!-- end col -->
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

    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{ asset('assets/js/sweetalert.init.js')}}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
    <!-- end demo js-->

    <script type="text/javascript">
        if( $('.message').is(':visible') ) {
        $(".message").fadeOut(2000);
    }
    </script>

    <script>
        @if ($message = Session::get('success'))
            swal(
                "Selamat ....",
                "{{ $message }}",
                "success"
            )
        @endif
    </script>

    @endsection