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

                    <h4 class="header-title mb-3">Profil Pranata Komputer</h4>

                    <div id="btnwizard">
                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
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
                                                <input type="text" id="nama" class="form-control" value="{{ $users }}"
                                                    readonly>
                                                <div>
                                                    <small id="error-nik" style="color: red"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label">Email</label>
                                            <div class="col-md-9">
                                                <input type="text" id="nik" class="form-control" name="nik" required="">
                                                <div>
                                                    <small id="error-nik" style="color: red"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label">NIK</label>
                                            <div class="col-md-9">
                                                <input type="text" id="nik" class="form-control" name="nik" required="">
                                                <div>
                                                    <small id="error-nik" style="color: red"></small>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label">NIK</label>
                                            <div class="col-md-9">
                                                <input type="text" id="nik" class="form-control" name="nik" required="">
                                                <div>
                                                    <small id="error-nik" style="color: red"></small>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="userName3">Tempat Lahir</label>
                                            <div class="col-md-9">
                                                <input type="text" id="t_lahir" class="form-control" id="userName3"
                                                    name="t_lahir" required="">
                                                <div>
                                                    <small id="error-tlahir" style="color: red"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="userName3">Tanggal Lahir</label>
                                            <div class="col-md-9">
                                                <div class="mb-3 position-relative" id="datepicker4">
                                                    <input type="text" id="tgl_lahir" class="form-control"
                                                        data-provide="datepicker" data-date-autoclose="true"
                                                        data-date-container="#datepicker4">
                                                    <div>
                                                        <small id="error-tglahir" style="color: red"></small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="userName3">Jenis Kelamin</label>
                                            <div class="col-md-9">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="customRadio3" name="customRadio1"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio3">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="customRadio4" name="customRadio1"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio4">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="userName3">Alamat</label>
                                            <div class="col-md-9">
                                                <textarea data-toggle="maxlength" class="form-control" maxlength="225"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" class="new-button3"
                                                for="example-fileinput">Upload KTP</label>
                                            <div class="col-md-9">
                                                <input type="file" id="example-fileinput" class="form-control">
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
                                                <input type="text" id="name3" name="nip" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name3"> Karpeg </label>
                                            <div class="col-md-9">
                                                <input type="text" id="name3" name="karpeg" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name3"> Golongan </label>
                                            <div class="col-md-9">
                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>--- Pilih Golongan ---</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name3"> Pangkat </label>
                                            <div class="col-md-9">
                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>--- Pilih Pangkat ---</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name3"> Jabatan </label>
                                            <div class="col-md-9">
                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>--- Pilih Jabatan ---</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name3"> Jenjang Jabatan </label>
                                            <div class="col-md-9">
                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>--- Pilih Jenjang Jabatan---</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name3"> Jenjang Tingkat Jabatan
                                            </label>
                                            <div class="col-md-9">
                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>--- Pilih Jenjang Tingkat Jabatan ---</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="userName3">TMT Pangkat</label>
                                            <div class="col-md-9">
                                                <div class="mb-3 position-relative" id="datepicker3">
                                                    <input type="text" class="form-control" data-provide="datepicker"
                                                        data-date-autoclose="true" data-date-container="#datepicker3">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="userName3">TMT Jabatan</label>
                                            <div class="col-md-9">
                                                <div class="mb-3 position-relative" id="datepicker2">
                                                    <input type="text" class="form-control" data-provide="datepicker"
                                                        data-date-autoclose="true" data-date-container="#datepicker2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name3"> Masa Kerja Lama</label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 position-relative" id="datepicker5">
                                                            <label class="form-label">Bulan</label>
                                                            <input type="text" class="form-control"
                                                                data-provide="datepicker" data-date-format="MM yyyy"
                                                                data-date-min-view-mode="1"
                                                                data-date-container="#datepicker5">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3 position-relative" id="datepicker6">
                                                            <label class="form-label">Tahun</label>
                                                            <input type="text" class="form-control"
                                                                data-provide="datepicker" data-date-min-view-mode="2"
                                                                data-date-container="#datepicker6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name3"> Masa Kerja Baru</label>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 position-relative" id="datepicker5">
                                                            <label class="form-label">Bulan</label>
                                                            <input type="text" class="form-control"
                                                                data-provide="datepicker" data-date-format="MM yyyy"
                                                                data-date-min-view-mode="1"
                                                                data-date-container="#datepicker5">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3 position-relative" id="datepicker6">
                                                            <label class="form-label">Tahun</label>
                                                            <input type="text" class="form-control"
                                                                data-provide="datepicker" data-date-min-view-mode="2"
                                                                data-date-container="#datepicker6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name3"> Unit Kerja </label>
                                            <div class="col-md-5 mb-2">
                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>--- Pilih Unit Kerja ---</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                </select>
                                                <div class="mt-2" id="show_kerja" style="display: none">
                                                    <input type="text" id="name3" name="karpeg" class="form-control"
                                                        required="" placeholder="Tulis unit kerja lainnya">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Unit kerja lainnya : <button type="button"
                                                        class="btn btn-success btn-sm" id="pilih_kerja">Pilih</button>
                                                </p>
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

                                            <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus.
                                                Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui.
                                                Aliquam
                                                mattis dictum aliquet.</p>

                                            <div class="mb-3">
                                                <div class="form-check d-inline-block">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">I agree with the
                                                        Terms and Conditions</label>
                                                </div>
                                            </div>
                                        </div>
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
    } else if (Tlahir > 0 && Tlahir <= 15) {
      $('#error-tlahir').text("Tempat lahir minimal 15 karakter").show();
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


</script>
@endsection