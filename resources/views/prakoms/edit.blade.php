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
                    <h4 class="header-title">Form Rubah Jadwal
                    </h4>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="floating-preview">
                            <form action="{{ route('jadwals.update',$jadwal->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="form-label">Tahun</label>
                                            <select name="tahun" class="form-control select2" data-toggle="select2">
                                                <option value="">Pilih</option>
                                                @if (old('tahun', 2023) ==
                                                $jadwal->tahun)
                                                <option value="2023" selected>2023</option>
                                                @else
                                                <option value="2023">2023</option>
                                                @endif
                                                @if (old('tahun', 2022) ==
                                                $jadwal->tahun)
                                                <option value="2022" selected>2022</option>
                                                @else
                                                <option value="2022">2022</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="form-label">Tahap</label>
                                            <select name="tahap" class="form-control select2" data-toggle="select2">
                                                <option value="">Pilih</option>
                                                @if (old('tahap', 1) ==
                                                $jadwal->tahap)
                                                <option value="1" selected>1</option>
                                                @else
                                                <option value="1">1</option>
                                                @endif
                                                @if (old('tahap', 2) ==
                                                $jadwal->tahap)
                                                <option value="2" selected>2</option>
                                                @else
                                                <option value="2">2</option>
                                                @endif
                                                @if (old('tahap', 3) ==
                                                $jadwal->tahap)
                                                <option value="3" selected>3</option>
                                                @else
                                                <option value="3">3</option>
                                                @endif
                                                @if (old('tahap', 4) ==
                                                $jadwal->tahap)
                                                <option value="4" selected>4</option>
                                                @else
                                                <option value="4">4</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="mb-3 position-relative" id="daftar_mulai">
                                            <label for="daftar_mulai" class="form-label">Daftar Mulai</label>
                                            <input type="text" name="daftar_mulai" value="{{ $jadwal->daftar_mulai }}"
                                                class="form-control" data-provide="datepicker"
                                                data-date-format="d-m-yyyy" data-date-autoclose="true"
                                                data-date-container="#daftar_mulai">
                                        </div>
                                        <div class="mb-3 position-relative" id="daftar_selesai">
                                            <label for="daftar_selesai" class="form-label">Daftar
                                                Selesai</label>
                                            <input type="text" name="daftar_selesai"
                                                value="{{ $jadwal->daftar_selesai }}" class="form-control"
                                                data-provide="datepicker" data-date-format="d-m-yyyy"
                                                data-date-autoclose="true" data-date-container="#daftar_selesai">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3 position-relative" id="nilai_mulai">
                                            <label for="nilai_mulai" class="form-label">Nilai Mulai</label>
                                            <input type="text" name="nilai_mulai" value="{{ $jadwal->nilai_mulai }}"
                                                class="form-control" data-provide="datepicker"
                                                data-date-format="d-m-yyyy" data-date-autoclose="true"
                                                data-date-container="#nilai_mulai">
                                        </div>
                                        <div class="mb-3 position-relative" id="nilai_selesai">
                                            <label for="nilai_selesai" class="form-label">Nilai
                                                Selesai</label>
                                            <input type="text" name="nilai_selesai" value="{{ $jadwal->nilai_selesai }}"
                                                class="form-control" data-provide="datepicker"
                                                data-date-format="d-m-yyyy" data-date-autoclose="true"
                                                data-date-container="#nilai_selesai">
                                        </div>
                                        <div class="mb-3 position-relative" id="sidang_mulai">
                                            <label for="sidang_mulai" class="form-label">Sidang Mulai</label>
                                            <input type="text" name="sidang_mulai" value="{{ $jadwal->sidang_mulai }}"
                                                class="form-control" data-provide="datepicker"
                                                data-date-format="d-m-yyyy" data-date-autoclose="true"
                                                data-date-container="#sidang_mulai">
                                        </div>
                                        <div class="mb-3 position-relative" id="sidang_selesai">
                                            <label for="sidang_selesai" class="form-label">Sidang
                                                Selesai</label>
                                            <input type="text" name="sidang_selesai"
                                                value="{{ $jadwal->sidang_selesai }}" class="form-control"
                                                data-provide="datepicker" data-date-format="d-m-yyyy"
                                                data-date-autoclose="true" data-date-container="#sidang_selesai">
                                        </div>
                                        <button type="submit" class="btn btn-primary"
                                            onclick="return confirm('Apakah yakin ingin merubah jadwal?');">Simpan</button>
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