@extends('layouts.app')

@section('content')

<div class="container-fluid">

   <div class="row mt-3">
    <div class="col-xxl-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Daftar</h5>

                <div class="row after-add-more">
                    <div class="col-md-4">
                        <select class="form-control select2" data-toggle="select2">
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
                    <div class="col-md-3">
                        <input type="text" class="form-control numeric" maxlength="7" placeholder="Masukan angka kredit">
                    </div>
                    <div class="col-md-1">
                        <button type="button" id="tambahDaftar" class="btn btn-danger add-more"><i class="mdi mdi-plus"></i> </button>
                    </div>
                </div>
                <div class="copy" id="tampung" style="display: none;">
                        <div class="row mt-2 control-group">
                       
                        <div class="col-md-4">
                            <select class="form-control select2" data-toggle="select2">
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
                        <div class="col-md-3">
                            <input type="text" class="form-control numeric" maxlength="7" placeholder="Masukan angka kredit">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-danger remove"><i class="mdi mdi-minus"></i> </button>
                        </div>
                             
                        </div>
                    </div>


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
</script>
@endsection