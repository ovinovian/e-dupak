@extends('layouts.app')

@section('style')

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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dupak</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profil</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Profil</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3"> Data Profil</h4>
                    <p style="margin-top: -15px;">- Untuk mengupdate data profil klik tombol update</p>
                  
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
                            </ul>
                            <div class="tab-content mb-0 b-0">
                               
                               
                                <div class="tab-pane fade" id="tab12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label">Nama</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nama" class="form-control"
                                                        value="{{ $users[0]->name }}" disabled>

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label">Email</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nik" class="form-control"
                                                        value="{{ $users[0]->email }}" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label">NIK</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nik" class="form-control" name="nik"
                                                    value="{{ $profils[0]->nik }}" disabled>
                                                    <div>
                                                        <small id="error-nik" style="color: red"></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="userName3">Tempat
                                                    Lahir</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="t_lahir" class="form-control" id="userName3"
                                                        name="t_lahir" value="{{ $profils[0]->t_lahir }}" disabled>
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
                                                            data-date-format="dd-mm-yyyy" value="{{  $tgl_lahir }}" disabled>
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
                                                        @if ($profils[0]->jk == "1")
                                                            <input type="radio" id="customRadio3" name="jk"
                                                            class="form-check-input" checked> 
                                                            <label class="form-check-label"
                                                            for="customRadio3">Laki-laki</label>
                                                        @else 
                                                            <input type="radio" id="customRadio3" name="jk"
                                                            class="form-check-input" checked> 
                                                             <label class="form-check-label"
                                                            for="customRadio3">Perempuan</label>
                                                        @endif
                                                      
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="userName3">Alamat</label>
                                                <div class="col-md-9">
                                                    <textarea name="alamat" data-toggle="maxlength" class="form-control"
                                                        maxlength="225" rows="3" disabled>{{ $profils[0]->alamat }}</textarea>
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
                                                    <input type="text" id="name3" name="nip" class="form-control"  value="{{ $profils[0]->nip }}" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Karpeg </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name3" name="karpeg" class="form-control"  value="{{ $profils[0]->karpeg }}" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Golongan
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name3" name="karpeg" class="form-control"  value="{{ $profils[0]->golongan }}" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Jabatan </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name3" name="karpeg" class="form-control"  value="{{ $profils[0]->jabatan }}" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Jenjang Jabatan
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name3" name="karpeg" class="form-control"  value="{{ $profils[0]->jenjang_jabatan }}" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name3"> Jenjang Tingkat
                                                    Jabatan
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name3" name="karpeg" class="form-control"  value="{{ $profils[0]->jenjang_tingkat_jabatan }}" disabled>
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
                                                            value="{{$tmtPangkat}}" disabled>
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
                                                            value="{{$tmtJabatan}}" disabled>
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
                                                                <input type="text" class="form-control" value="{{ $profils[0]->mk_bulan_lama }}" disabled>
                                                                <span class="input-group-text"
                                                                    id="basic-addon2">Bulan</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group mb-3 position-relative"
                                                                id="datepicker6">
                                                                <input type="text" class="form-control" value="{{ $profils[0]->mk_tahun_lama }}" disabled>
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
                                                                <input type="text" class="form-control" value="{{ $profils[0]->mk_bulan_baru }}" disabled>
                                                                <span class="input-group-text"
                                                                    id="basic-addon2">Bulan</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group mb-3 position-relative"
                                                                id="datepicker6">
                                                                <input type="text" class="form-control"value="{{ $profils[0]->mk_tahun_baru }}" disabled>
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
                                                    <input type="text" class="form-control"value="{{ $profils[0]->unit_kerja }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="float-end">
                                    <input type='button' class='btn btn-info button-previous' name='previous'
                                    value='Prev'>
                                    <input type='button' id="next-button" class='btn btn-info button-next' name='next'
                                        value='Next'>
                                </div>
                                <div class="float-start">
                                    <a href="{{ route('peserta.edit.profil', ['id' => Auth::id()]) }}" role="button" class='btn btn-warning text-white'> Update</a>
                                </div>

                                <div class="clearfix"></div>
                            </div> <!-- tab-content -->
                        </div> <!-- end #btnwizard-->
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