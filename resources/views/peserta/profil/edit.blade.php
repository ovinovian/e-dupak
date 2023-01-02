@extends('layouts.app')

@section('style')
<style>
     .new-button3 {
        display: inline-block;
        padding: 8px 12px; 
        cursor: pointer;
        border-radius: 4px;
        background-color: #a3a3a3;
        font-size: 16px;
        color: #fff;
        }
        input[type="file"] {
        position: absolute;
        z-index: -1;
        top: 6px;
        left: 0;
        font-size: 15px;
        color: rgb(153,153,153);
      }
</style>
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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Wizard</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Wizard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3"> Lengkapi Data Profil</h4>
                    <form action="{{ route('peserta.ubah.profil', ['id' => Auth::id()]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="btnwizard">
                            <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                                <li class="nav-item">
                                    <a href="#tab12" data-bs-toggle="tab" data-toggle="tab"
                                        class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span class="d-none d-sm-inline">Data Diri</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab22" data-bs-toggle="tab" data-toggle="tab"
                                        class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-face-profile me-1"></i>
                                        <span class="d-none d-sm-inline">Data Pangkat/Jabatan</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab32" data-bs-toggle="tab" data-toggle="tab"
                                        class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
                                        <span class="d-none d-sm-inline">Validasi Data</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content mb-0 b-0">
                                <div class="tab-pane fade" id="tab12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label">Nama</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name" class="form-control" name="name"
                                                        value="{{ $users[0]->name }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label">Email</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nik" class="form-control" name="email"
                                                        value="{{ $users[0]->email }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label">NIK</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nik" class="form-control" name="nik" value="{{ $profils[0]->nik }}"
                                                        required="">
                                                    <div>
                                                        <small id="error-nik" style="color: red"></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="userName3">Tempat
                                                    Lahir</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="t_lahir" class="form-control" id="userName3" value="{{ $profils[0]->t_lahir }}"
                                                        name="t_lahir" required="">
                                                    <div>
                                                        <small id="error-tlahir" style="color: red"></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="userName3">Tanggal
                                                    Lahir</label>
                                                <div class="col-md-9">
                                                    <div class="mb-3 position-relative" id="datepicker4">
                                                        <input type="text" id="tgl_lahir" name="tgl_lahir"
                                                            class="form-control" data-provide="datepicker"
                                                            data-date-autoclose="true"
                                                            data-date-container="#datepicker4"
                                                            data-date-format="dd-mm-yyyy" value="{{ $tgl_lahir }}">
                                                        <div>
                                                            <small id="error-tglahir" style="color: red"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="userName3">Jenis
                                                    Kelamin</label>
                                                <div class="col-md-9">
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio3" name="jk"
                                                            class="form-check-input" value="1" <?php echo ($profils[0]->jk == "1") ? "checked" : ""; ?>>
                                                        <label class="form-check-label"
                                                            for="customRadio3">Laki-laki</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio4" name="jk"
                                                            class="form-check-input" value="2"  <?php echo ($profils[0]->jk== "2") ? "checked" : ""; ?>>
                                                        <label class="form-check-label"
                                                            for="customRadio4">Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="userName3">Alamat</label>
                                                <div class="col-md-9">
                                                    <textarea name="alamat" data-toggle="maxlength" class="form-control"
                                                        maxlength="225" rows="3">{{ $profils[0]->alamat }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" class="new-button3"
                                                    for="example-fileinput">Foto</label>
                                                <div class="col-md-9">
                                                    <div style="position: relative">
                                                        <label for="formFile3" class="new-button3">Upload Foto</label>
                                                        <input class="form-control" type="file" id="formFile3" name="foto" accept=".jpg, .jpeg, .png .pdf" value="{{ $profils[0]->foto }}">
                                                        <p style="word-break: break-word; border-bottom:1px solid rgb(161, 161, 161); width:100% "><span id="lihat_foto">{{ $profils[0]->foto }}</span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="tab-pane fade" id="tab22">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> NIP</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name3" name="nip" class="form-control" value="{{ $profils[0]->nip }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Karpeg </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name3" name="karpeg" class="form-control" value="{{ $profils[0]->karpeg }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Golongan
                                                </label>
                                                <div class="col-md-9">
                                                    <select class="form-control select2" data-toggle="select2"
                                                        name="golongan">
                                                        <option value="{{ $profils[0]->golongan }}">{{ $profils[0]->golongan }}</option>
                                                        <option value="IIa">Pengatur Muda / IIa</option>
                                                        <option value="IIb">Pengatur Muda Tk. I / IIb</option>
                                                        <option value="IIc">Pengatur / IIc</option>
                                                        <option value="IId">Pengatur Tk. I / IId</option>
                                                        <option value="IIIa">Penata Muda / IIIa</option>
                                                        <option value="IIIb">Penata Muda Tk. I / IIIb</option>
                                                        <option value="IIIc">Penata / IIIc</option>
                                                        <option value="IIId">Penata Tk. I / IIId</option>
                                                        <option value="IVa">Pembina / IVa</option>
                                                        <option value="IVb">Pembina Tk. I / IVb</option>
                                                        <option value="IVc">Pembina Utama Muda / IVc</option>
                                                        <option value="IVd">Pembina Utama Madya / IVd</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Jabatan </label>
                                                <div class="col-md-9">
                                                    <select class="form-control select2" data-toggle="select2"
                                                        name="jabatan">
                                                        <option value="{{ $profils[0]->jabatan }}">{{$profils[0]->jabatan}}</option>
                                                        <option value="Pranata Komputer">Pranata Komputer</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Jenjang Jabatan
                                                </label>
                                                <div class="col-md-9">
                                                    <select id="jenjang_jabatan" class="form-control select2"
                                                        data-toggle="select2" id="jenjang_jabatan"
                                                        name="jenjang_jabatan">
                                                        <option value="{{ $profils[0]->jenjang_jabatan }}">
                                                            {{$profils[0]->jenjang_jabatan}}
                                                        </option>
                                                        <option value="Terampil">Terampil</option>
                                                        <option value="Ahli">Ahli</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Jenjang Tingkat
                                                    Jabatan
                                                </label>
                                                <div class="col-md-9">
                                                    <select class="form-control select2" data-toggle="select2"
                                                        id="jenjang_tingkat_jabatan" name="jenjang_tingkat_jabatan" value="{{ $profils[0]->jenjang_tingkat_jabatan }}">
                                                        <option value="Ahli">{{$profils[0]->jenjang_tingkat_jabatan}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="userName3">TMT
                                                    Pangkat</label>
                                                <div class="col-md-9">
                                                    <div class="mb-3 position-relative" id="datepicker3">
                                                        <input type="text" class="form-control"
                                                            data-provide="datepicker" data-date-autoclose="true"
                                                            data-date-container="#datepicker3" name="tmt_pangkat"
                                                            data-date-format="dd-mm-yyyy" value="{{ $tmtPangkat }}">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="userName3">TMT
                                                    Jabatan</label>
                                                <div class="col-md-9">
                                                    <div class="mb-3 position-relative" id="datepicker2">
                                                        <input type="text" class="form-control"
                                                            data-provide="datepicker" data-date-autoclose="true"
                                                            data-date-container="#datepicker2" name="tmt_jabatan"
                                                            data-date-format="dd-mm-yyyy" value="{{ $tmtJabatan }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Masa Kerja
                                                    Lama</label>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group mb-3 position-relative"
                                                                id="datepicker5">
                                                                <input type="text" class="form-control"
                                                                    name="mk_bulan_lama" value="{{ $profils[0]->mk_bulan_lama }}">
                                                                <span class="input-group-text"
                                                                    id="basic-addon2">Bulan</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group mb-3 position-relative"
                                                                id="datepicker6">
                                                                <input type="text" class="form-control"
                                                                    name="mk_tahun_lama" value="{{ $profils[0]->mk_tahun_lama }}">
                                                                <span class="input-group-text"
                                                                    id="basic-addon2">Tahun</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Masa Kerja
                                                    Baru</label>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group mb-3 position-relative"
                                                                id="datepicker5">
                                                                <input type="text" class="form-control"
                                                                    name="mk_bulan_baru"value="{{ $profils[0]->mk_bulan_baru }}">
                                                                <span class="input-group-text"
                                                                    id="basic-addon2">Bulan</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group mb-3 position-relative"
                                                                id="datepicker6">
                                                                <input type="text" class="form-control"
                                                                    name="mk_tahun_baru" value="{{ $profils[0]->mk_tahun_baru }}">
                                                                <span class="input-group-text"
                                                                    id="basic-addon2">Tahun</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Unit Kerja
                                                </label>
                                                <div class="col-md-5 mb-2">
                                                    <select class="form-control select2" data-toggle="select2"
                                                        name="unit_kerja">
                                                        <option value="{{ $profils[0]->unit_kerja }}">{{$profils[0]->unit_kerja}}</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="tab-pane" id="tab32">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                <h3 class="mt-0">Thank you !</h3>

                                                <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum
                                                    luctus.
                                                    Suspendisse convallis dignissim eros at volutpat. In egestas
                                                    mattis
                                                    dui.
                                                    Aliquam
                                                    mattis dictum aliquet.</p>

                                                <div class="mb-3">
                                                    <div class="form-check d-inline-block">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">I agree
                                                            with
                                                            the
                                                            Terms and Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-warning mb-3"
                                                onclick="return confirm('Apakah yakin ingin menyimpan?');">Update</button>

                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="float-end">
                                    <input type='button' id="next-button" class='btn btn-info button-next' name='next'
                                        value='Next'>
                                    <input type='button' id="last-button" class='btn btn-info button-last' name='last'
                                        value='Last'>
                                </div>
                                <div class="float-start">
                                    <input type='button' class='btn btn-info button-first' name='first' value='First'>
                                    <input type='button' class='btn btn-info button-previous' name='previous'
                                        value='Previous'>
                                </div>

                                <div class="clearfix"></div>
                            </div> <!-- tab-content -->
                        </div> <!-- end #btnwizard-->
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection

@section('script')
<script src="{{ asset('assets/js/pages/demo.form-wizard.js') }}"></script>

<script>

$(function(){
    $('input[name=foto]').change(function(){
      $('#lihat_foto').html("File yang diupload : " + $(this).val()  );
    });
  });


    $('#last-button').prop('disabled', true);
$(document).ready(function(){

    $('#pilih_kerja').click(function() {
        $("#show_kerja").show();
                    // .delay(10000)
                    // .fadeOut();
    });
});



$('#nik').keyup(function(){
    this.value = this.value.replace(/[^0-9\.]/g,'');
    var nik = $(this).val().length;
    if(nik == 0) {
        $('#error-nik').text("Nomor Identitas tidak boleh kosong").show();
        $('#last-button').prop('disabled', true);
    } else if (nik > 0 && nik <= 15) {
        $('#error-nik').text("Nomor Identitas minimal 16 karakter angka").show();
    } else {
        $('#error-nik').hide();
    }
    
});
$('#t_lahir').keyup(function(){
    var Tlahir = $(this).val().length;
    if(Tlahir == 0) {
        $('#error-tlahir').text("Tempat lahir tidak boleh kosong").show();
        $('#last-button').prop('disabled', true);
    } else if (Tlahir > 0 && Tlahir <= 4) {
        $('#error-tlahir').text("Tempat lahir minimal 5 karakter").show();
    } else {
        $('#error-tlahir').hide();
    }
});

$("#tgl_lahir").keyup(function(){
    // let isi = $(this).val();
    if (!$(this).val()) {
        $('#error-tglahir').text("Tanggal lahir tidak boleh kosong").show();
        $('#last-button').prop('disabled', true);
    } else {
        $('#error-tglahir').hide();
    }
});

$('#jenjang_jabatan').on('change', function ()
    {
        $('#jenjang_tingkat_jabatan').empty();
        var klasifikasi = this.value;
        
        $('#jenjang_tingkat_jabatan').html('<option selected>--- Pilih Jenjang Tingkat Jabatan ---</option>');
        $.ajax({
            url: '{{ route('getTkJab') }}?klasifikasi='+klasifikasi,
            type: 'get',
            success: function (res)
            {
                $.each(res, function (key, value)
                {
                    $('#jenjang_tingkat_jabatan').append('<option value="' + value.pelaksana + '">' + value.pelaksana +
                    '</option>');
                });
                // console.log(res);
            }
        });
    });
</script>
@endsection