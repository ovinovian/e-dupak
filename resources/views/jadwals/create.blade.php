@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Elements</li>
                    </ol>
                </div>
                <h4 class="page-title"><a class="btn btn-primary" href="{{ route('jadwals.index') }}">Kembali</a></h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (count($errors) > 0)

                    <div class="alert alert-danger">
                        <strong>Uppss!</strong> Ada yang salah dengan isian Anda.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                    @endif
                    <h4 class="header-title">Form Tambah Jadwal
                    </h4>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="floating-preview">
                            <form action="{{ route('jadwals.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="form-label">Tahun</label>
                                            <select name="tahun" class="form-control select2" data-toggle="select2">
                                                <option value="">Pilih</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="form-label">Tahap</label>
                                            <select name="tahap" class="form-control select2" data-toggle="select2">
                                                <option value="">Pilih</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 position-relative" id="daftar_mulai">
                                            <label for="daftar_mulai" class="form-label">Daftar Mulai</label>
                                            <input type="text" name="daftar_mulai" class="form-control"
                                                data-provide="datepicker" data-date-format="dd-mm-yyyy"
                                                data-date-autoclose="true" data-date-container="#daftar_mulai">
                                        </div>
                                        <div class="mb-3 position-relative" id="daftar_selesai">
                                            <label for="daftar_selesai" class="form-label">Daftar
                                                Selesai</label>
                                            <input type="text" name="daftar_selesai" class="form-control"
                                                data-provide="datepicker" data-date-format="dd-mm-yyyy"
                                                data-date-autoclose="true" data-date-container="#daftar_selesai">
                                        </div>
                                        <div class="mb-3 position-relative" id="siap_mulai">
                                            <label for="siap_mulai" class="form-label">Persiapan Mulai</label>
                                            <input type="text" name="siap_mulai" class="form-control"
                                                data-provide="datepicker" data-date-format="dd-mm-yyyy"
                                                data-date-autoclose="true" data-date-container="#siap_mulai">
                                        </div>
                                        <div class="mb-3 position-relative" id="siap_selesai">
                                            <label for="siap_selesai" class="form-label">Persiapan
                                                Selesai</label>
                                            <input type="text" name="siap_selesai" class="form-control"
                                                data-provide="datepicker" data-date-format="dd-mm-yyyy"
                                                data-date-autoclose="true" data-date-container="#siap_selesai">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3 position-relative" id="nilai_mulai">
                                            <label for="nilai_mulai" class="form-label">Nilai Mulai</label>
                                            <input type="text" name="nilai_mulai" class="form-control"
                                                data-provide="datepicker" data-date-format="dd-mm-yyyy"
                                                data-date-autoclose="true" data-date-container="#nilai_mulai">
                                        </div>
                                        <div class="mb-3 position-relative" id="nilai_selesai">
                                            <label for="nilai_selesai" class="form-label">Nilai
                                                Selesai</label>
                                            <input type="text" name="nilai_selesai" class="form-control"
                                                data-provide="datepicker" data-date-format="dd-mm-yyyy"
                                                data-date-autoclose="true" data-date-container="#nilai_selesai">
                                        </div>
                                        <div class="mb-3 position-relative" id="sidang_mulai">
                                            <label for="sidang_mulai" class="form-label">Sidang Mulai</label>
                                            <input type="text" name="sidang_mulai" class="form-control"
                                                data-provide="datepicker" data-date-format="dd-mm-yyyy"
                                                data-date-autoclose="true" data-date-container="#sidang_mulai">
                                        </div>
                                        <div class="mb-3 position-relative" id="sidang_selesai">
                                            <label for="sidang_selesai" class="form-label">Sidang
                                                Selesai</label>
                                            <input type="text" name="sidang_selesai" class="form-control"
                                                data-provide="datepicker" data-date-format="dd-mm-yyyy"
                                                data-date-autoclose="true" data-date-container="#sidang_selesai">
                                        </div>
                                        <button type="submit" class="btn btn-primary"
                                            onclick="return confirm('Apakah yakin ingin menambah jadwal?');">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

</div> <!-- container -->

@endsection