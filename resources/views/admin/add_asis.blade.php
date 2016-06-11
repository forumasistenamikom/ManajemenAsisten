@extends('layouts.app')

@section('htmlheader_title')
Tambah Asisten
@endsection

@section('contentheader_title', 'Tambah Asisten')
@section('contentheader_description', 'Menambahkan Data Asisten')
@section('contentheader_level', 'Tambah Asisten')

@section('styles')

@endsection

@section('main-content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-11">
            <!-- Main row -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box box-success">
                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="tha" class="control-label">Tahun Ajaran: </label>
                                    <input id="tha" name="tha" type="text" class="form-control" data-inputmask="'alias': '9999/9999'" data-mask>
                                </div>

                                <div class="form-group">
                                    <label for="semester" class="control-label"> Semester: </label>
                                    <select id="semester" name="semester" class="form-control">
                                        <!-- <option value=""></option> -->
                                        <option value="1">Ganjil</option>
                                        <option value="2">Genap</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="npm" class="control-label">NPM: </label>
                                    <input id="npm" name="npm" type="text" class="form-control" data-inputmask="'alias': '99.99.9999'" data-mask>
                                </div>

                                <div class="form-group">
                                    <label for="kode_mkl" class="control-label"> Kode Mata Kuliah: </label>
                                    <input id="kode_mkl" name="kode_mkl" type="text" class="form-control" style="text-transform: uppercase;" data-inputmask="'alias': '[A][A]999'" data-mask>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-success pull-right">Proses</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
<!-- InputMask -->
<script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
<!-- page script -->
<script>
// li class active
$(function () {
    $("#asisten").addClass('active');
});
// Datemask 9999/9999
$(function () {
    $("#tha").inputmask("9999/9999", {"placeholder": "____/____"});
});

// NPM 99.99.9999
$(function () {
    $("#npm").inputmask("99.99.9999", {"placeholder": "__.__.____"});
});

// kode mata kuliah
$(function () {
    $("#kode_mkl").inputmask("[a][a]999", {"placeholder": "_____"});
});

$("#kode_mkl").change(function() {
    $("#kode_mkl").val().toUpperCase();
});
</script>
@endsection