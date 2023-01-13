@extends('layouts.app')

@section('style')

<!-- SimpleMDE css -->
<link href="{{ asset('assets/css/vendor/simplemde.min.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

<div class="container-fluid">
    <form action="{{ route('daftars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-3">
            <div class="col-xxl-12 col-xl-12">
                <div class="tab-content">
                    <div class="tab-pane show active" id="ribbons-preview">
                        <div class="row">
                            <div class="card ribbon-box">
                                <div class="card-body">
                                    <div class="ribbon ribbon-primary float-start"><i
                                            class="mdi mdi-access-point me-1"></i>
                                        Daftar Penilaian Dupak
                                    </div>
                                    <h5 class="text-primary float-end mt-0">Primary Header</h5>
                                    <div class="ribbon-content">
                                        <table class="table table-striped table-centered mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>Nama - NIP</td>
                                                    <td>{{ $data[0]->name }} - {{ $data[0]->nip }} </td>
                                                </tr>
                                                <tr>
                                                    <td>Pangkat / Gol.</td>
                                                    <td>{{ $data[0]->golongan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{ $data[0]->jabatan }} - {{ $data[0]->jenjang_tingkat_jabatan
                                                        }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Instansi</td>
                                                    <td>{{ $data[0]->unit_kerja }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Masa Kerja Penilaian Lama</td>
                                                    <td>{{ $data[0]->mk_tahun_baru }} Tahun {{ $data[0]->mk_bulan_baru
                                                        }}
                                                        Bulan</td>
                                                </tr>
                                                <tr>
                                                    <td>Masa Kerja Penilaian Saat Ini</td>
                                                    <td>
                                                        <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="input-group mb-3 position-relative">
                                                                <input type="text" class="form-control"
                                                                    name="mk_tahun_baru" required>
                                                                <span class="input-group-text"
                                                                    id="basic-addon2">Tahun</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="input-group mb-3 position-relative">
                                                                <input type="text" class="form-control"
                                                                    name="mk_bulan_baru" required>
                                                                <span class="input-group-text"
                                                                    id="basic-addon2">Bulan</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Surat Pengantar</td>
                                                    <td>
                                                        <div class="row mb-3">
                                                            <div class="col-md-9">
                                                                <input type="file" id="example-fileinput"
                                                                    name="surat_pengantar" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Laporan Kegiatan</td>
                                                    <td>
                                                        <div class="row mb-3">
                                                            <div class="col-md-9">
                                                                <input type="file" id="example-fileinput"
                                                                    name="laporan_kegiatan" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pengembangan Profesi (Contoh : 23.120)</td>
                                                    <td>
                                                        <div class="row mb-3">
                                                            <div class="col-md-2">
                                                                <input type="text" name="pengembangan_profesi"
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Unsur Penunjang (Contoh : 23.120)</td>
                                                    <td>
                                                        <div class="row mb-3">
                                                            <div class="col-md-2">
                                                                <input type="text" name="unsur_penunjang"
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
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
                        <div class="alert alert-danger bg-white text-danger" role="alert">
                            Masukkan nilai total butir sesuai dengan butir
                            yang Anda lakukan. Gunakan tanda titik untuk nilai desimal dan 3 angka di belakang koma,
                            contoh
                            : 23.120
                        </div>
                        <code></code>
                        <!-- end nav-->
                        <div class="grid-structure">
                            {{ $no_unsur = "" }}
                            {{ $no_sub_unsur = "" }}
                            <div class="card-body">
                                @foreach ($butir as $item)
                                <!-- task -->
                                @if($item->no_unsur != $no_unsur)
                                <div class="row mb-2">
                                    <div class="col-md-12"><button type="button" class="btn btn-primary" disabled>Unsur
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
                                    <div class="col-md-12"><button type="button" class="btn btn-success" disabled>>>>
                                            Sub
                                            Unsur : {{
                                            $item->no_sub_unsur }}. {{ $item->sub_unsur }}</div> <!-- end col -->
                                    @php
                                    $no_sub_unsur = $item->no_sub_unsur;
                                    @endphp
                                </div>
                                @endif
                                <div class="row mb-2">
                                    <!-- end col -->
                                    <div class="col-sm-8"><button type="button" class="btn btn-outline-info text-left"
                                            disabled>>>>>>>
                                            Uraian Kegiatan : {{ $item->no_uraian_kegiatan }}. {{
                                            $item->uraian_kegiatan
                                            }}
                                    </div> <!-- end col -->
                                    <div class="col-sm-1"><input type="text" name="nilai[]"
                                            class="form-control text-right" value="0">
                                    </div> <!-- end col -->
                                    <input type="hidden" name="id_butir[]" value="{{ $item->id }}">
                                    <input type="hidden" name="id_jadwal[]" value="{{ $daftarAju['id_jadwal'] }}">
                                    <input type="hidden" name="nip[]" value="{{ $data[0]->nip }}">
                                </div>
                                @endforeach
                            </div>
                            <!-- end task -->

                        </div> <!-- end card-body-->
                    </div>
                </div>
            </div>

        </div><!-- end col -->
        <button type="submit" class="btn btn-danger mb-3"
            onclick="return confirm('Apakah yakin sudah mengisi yang diinginkan?');"><i class=" mdi mdi-minus"></i>
            Simpan</button>
    </form>
</div> <!-- container -->

@endsection

@section('script')
<script src="{{ asset('assets/js/numeric_format.js')}}"></script>
<!-- SimpleMDE js -->
<script src="{{ asset('assets/js/vendor/simplemde.min.js') }}"></script>

<!-- Page init js -->
<script src="{{ asset('assets/js/pages/demo.inbox.js') }}"></script>
@endsection