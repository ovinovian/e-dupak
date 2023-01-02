@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-xxl-12 col-xl-12">
            <div class="tab-content">
                <div class="tab-pane show active" id="ribbons-preview">
                    <div class="row">
                        <div class="card ribbon-box">
                            <div class="card-body">
                                <div class="ribbon ribbon-primary float-start"><i class="mdi mdi-access-point me-1"></i>
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
                                                <td>{{ $data[0]->jabatan }} - {{ $data[0]->jenjang_tingkat_jabatan }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Instansi</td>
                                                <td>{{ $data[0]->unit_kerja }}</td>
                                            </tr>
                                            <tr>
                                                <td>Masa Kerja Penilaian Lama</td>
                                                <td>{{ $data[0]->mk_tahun_baru }} Tahun {{ $data[0]->mk_bulan_baru }}
                                                    Bulan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>
                </div>

                <div class="row after-add-more">
                    <div class="col-md-3">
                        <select id="unsur" name="unsur" class="form-control select2" data-toggle="select2">
                            <option>--- Pilih Unsur ---</option>
                            @foreach ($butir as $item)
                            <option value="{{ $item->no_unsur }}">{{ $item->unsur }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select id="sub_unsur" name="sub_unsur" class="form-control select2" data-toggle="select2">
                            <option>--- Pilih Sub Unsur ---</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select id="butir" name="butir" class="form-control select2" data-toggle="select2">
                            <option>--- Pilih Butir ---</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <input type="text" class="form-control numeric" maxlength="7"
                            placeholder="Masukan angka kredit">
                    </div>
                    <div class="col-md-1">
                        <button type="button" id="tambahDaftar" class="btn btn-danger add-more"><i
                                class="mdi mdi-plus"></i> </button>
                    </div>
                </div>
                <div class="copy" id="tampung" style="display: none;">
                    <div class="row mt-2 control-group">

                        <div class="col-md-4">
                            <select name="unsur" class="form-control select2" data-toggle="select2">
                                <option>--- Pilih Unsur ---</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">1. Unsur 1</option>
                                    <option value="HI">2. Unsur 2</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control select2" data-toggle="select2">
                                <option>--- Pilih Sub Unsur ---</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">1. Sub unsur 1</option>
                                    <option value="HI">2. Sub unsur 2</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control select2" data-toggle="select2">
                                <option>--- Pilih Butir ---</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">1. Sub unsur 1</option>
                                    <option value="HI">2. Sub unsur 2</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control numeric" maxlength="7"
                                placeholder="Masukan angka kredit">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-danger remove"><i class="mdi mdi-minus"></i>
                            </button>
                        </div>

                    </div>
                </div>

                <button type="button" class="btn btn-danger"><i class="mdi mdi-minus"></i> Kirim</button>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>

</div> <!-- container -->

@endsection

@section('script')
<script src="{{ asset('assets/js/numeric_format.js')}}"></script>
<script>
    $(document).ready(function() {

    $(".add-more").click(function(){ 
        var html = $(".copy").html();
        $(".after-add-more").after(html);
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents(".control-group").remove();
    });

});

$('#unsur').on('change', function ()
{
    $('#sub_unsur').empty();
    $('#butir').empty();
    var unsur = this.value;

    $('#sub_unsur').html('<option selected>--- Pilih Sub Unsur ---</option>');
    $('#butir').html('<option selected>--- Pilih Butir ---</option>');
    $.ajax({
        url: '{{ route('getSubUnsur') }}?unsur='+unsur,
        type: 'get',
        success: function (res)
        {
            $.each(res, function (key, value)
            {
                $('#sub_unsur').append('<option value="' + value.no_sub_unsur + '">' + value.sub_unsur + '</option>');
            });
            console.log(res);
        }
    });
});

$('#sub_unsur').on('change', function ()
{
    $('#butir').empty();
    var sub_unsur = this.value;
    var unsur = $('#unsur').val();

    // console.log(sub_unsur);

    // $('#sub_unsur').html('<option selected>--- Pilih Sub Unsur ---</option>');
    $('#butir').html('<option selected>--- Pilih Butir ---</option>');
    $.ajax({
        url: '{{ route('getButir') }}?unsur='+unsur+'/sub_unsur='+sub_unsur,
        type: 'get',
        success: function (res)
        {
            $.each(res, function (key, value)
            {
                $('#butir').append('<option value="' + value.butir + '">' + value.butir + '</option>');
            });
            console.log(res);
            console.log("ok");
        }
    });

});
</script>
@endsection