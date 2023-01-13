@extends('layouts.app')

@section('style')

<style>
    .none-lis{
        list-style: none;
    }
</style>

<!-- SimpleMDE css -->
<link href="{{ asset('assets/css/vendor/simplemde.min.css') }}" rel="stylesheet" type="text/css">

<style>
    .new-button3 {
        display: inline-block;
        padding: 8px 12px;
        cursor: pointer;
        border-radius: 4px;
        background-color: #5a5a5a;
        font-size: 16px;
        color: #fff;
    }

    input[type="file"] {
        position: absolute;
        z-index: -1;
        top: 6px;
        left: 0;
        font-size: 15px;
        color: rgb(153, 153, 153);
    }
</style>

@endsection

@section('content')

<div class="container-fluid">
    <form action="{{ route('daftars.update',$daftar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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
                                                                    name="mk_tahun_baru"
                                                                    value="{{ $daftar->mk_tahun_baru }}">
                                                                <span class="input-group-text"
                                                                    id="basic-addon2">Tahun</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="input-group mb-3 position-relative">
                                                                <input type="text" class="form-control"
                                                                    name="mk_bulan_baru"
                                                                    value="{{ $daftar->mk_bulan_baru }}">
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
                                                                <div style="position: relative">
                                                                    <label for="formFile3" class="new-button3">Upload
                                                                        Surat Pengantar</label>
                                                                    <input class="form-control" type="file"
                                                                        id="formFile3" name="surat_pengantar"
                                                                        accept=".pdf"
                                                                        value="{{ $daftar->surat_pengantar }}">
                                                                    <p
                                                                        style="word-break: break-word; border-bottom:1px solid rgb(161, 161, 161); width:100% ">
                                                                        <span id="lihat_surat_pengantar">{{
                                                                            $daftar->surat_pengantar }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Laporan Kegiatan</td>
                                                    <td>
                                                        <div class="row mb-3">
                                                            <div class="col-md-9">
                                                                <div style="position: relative">
                                                                    <label for="formFile4" class="new-button3">Upload
                                                                        Laporan Kegiatan</label>
                                                                    <input class="form-control" type="file"
                                                                        id="formFile4" name="laporan_kegiatan"
                                                                        accept=".pdf"
                                                                        value="{{ $daftar->laporan_kegiatan }}">
                                                                    <p
                                                                        style="word-break: break-word; border-bottom:1px solid rgb(161, 161, 161); width:100% ">
                                                                        <span id="lihat_laporan_kegiatan">{{
                                                                            $daftar->laporan_kegiatan }}</span>
                                                                    </p>
                                                                </div>
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
                                                                    class="form-control"
                                                                    value="{{ $daftar->pengembangan_profesi }}">
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
                                                                    class="form-control"
                                                                    value="{{ $daftar->unsur_penunjang }}">
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
                               
                                <ul class="list-unstyled">
                                    @if($item->no_unsur != $no_unsur)
                                    <li>
                                        <div class="bg-success text-white w-50 p-1 mb-1">
                                        Unsur
                                            : {{
                                            $item->no_unsur }}.
                                            {{ $item->unsur }}
                                        </div>
                                    @php
                                    $no_unsur = $item->no_unsur;
                                    @endphp
                                    </li>
                                    @endif
                                    <li>
                                        <ul class="none-lis">
                                            @if($item->no_sub_unsur != $no_sub_unsur)
                                            <li><div class="bg-primary text-white w-50 p-1"> Sub
                                                Unsur : {{
                                                $item->no_sub_unsur }}. {{ $item->sub_unsur }}
                                                </div>
                                            @php
                                            $no_sub_unsur = $item->no_sub_unsur;
                                            @endphp
                                            </li>
                                            @endif

                                            <li>
                                                <ul class="none-lis">
                                                    <li>
                                                        @php
                                                            $nilai =
                                                             App\Models\DaftarDetail::where('id_jadwal',$daftar->id_jadwal)->where('id_butir',$item->id)->first();
                                                        @endphp
                                                        <div class="row mt-2">
                                                           <div class="col-md-10">
                                                            {{ $item->no_uraian_kegiatan }}.&nbsp;&nbsp;
                                                            {{
                                                                $item->uraian_kegiatan
                                                            }}
                                                           </div>
                                                           <div class="col-md-2">
                                                            <input type="text" name="nilai[]"
                                                            class="form-control text-end" value="{{ $nilai->nilai }}">
                                                           </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                     <input type="hidden" name="id_butir[]" value="{{ $item->id }}">
                                    <input type="hidden" name="nip[]" value="{{ $data[0]->nip }}">
                                    <input type="hidden" name="id_detail[]" value="{{ $nilai->id }}">
                                </ul> 
                                @endforeach  
                               
                            </div>
                            <!-- end task -->

                        </div> <!-- end card-body-->
                    </div>
                </div>
            </div>
            <input type="hidden" name="id_daftar" value="{{ $daftar->id }}">

        </div><!-- end col -->
        <button type="submit" class="btn btn-danger mb-3"
            onclick="return confirm('Apakah Anda yakin ingin merubah?');"><i class=" mdi mdi-minus"></i>
            Rubah</button>
    </form>
</div> <!-- container -->

@endsection

@section('script')
<script src="{{ asset('assets/js/numeric_format.js')}}"></script>
<!-- SimpleMDE js -->
<script src="{{ asset('assets/js/vendor/simplemde.min.js') }}"></script>

<!-- Page init js -->
<script src="{{ asset('assets/js/pages/demo.inbox.js') }}"></script>

<script>
    $(function(){
        $('input[name=surat_pengantar]').change(function(){
            $('#lihat_surat_pengantar').html("File yang diupload : " + $(this).val()  );
        });

        $('input[name=laporan_kegiatan]').change(function(){
            $('#lihat_laporan_kegiatan').html("File yang diupload : " + $(this).val() );
        });
    });
</script>
@endsection