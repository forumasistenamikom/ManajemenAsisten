@extends('layouts.app')

@section('htmlheader_title')
Mahasiswa
@endsection

@section('contentheader_title', 'Mahasiswa')
@section('contentheader_description', 'List Mahasiswa berdasarkan Angkatan dan Jurusan')
@section('contentheader_level', 'Mahasiswa')

@section('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('main-content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-11">
            <!-- Param -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-info">
                        <form role="form" class="form-inline">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="angkatan" class="control-label">Angkatan: </label>
                                    <input id="angkatan" name="angkatan" type="text" class="form-control" data-inputmask="'alias': '9999/9999'" data-mask>
                                </div>
                                &nbsp;&nbsp;
                                <div class="form-group">
                                    <label for="kode_jurusan" class="control-label">Jurusan: </label>
                                    <select id="kode_jurusan" name="kode_jurusan" class="form-control">
                                        <!-- <option value=""></option> -->
                                        <?php $jurusan = array('01' => 'D3-Teknik Informatika', '02' => 'D3-Manajemen Informatika', '11' => 'S1-Teknik Informatika'); ?>
                                        <?php foreach ($jurusan as $key => $value) { ?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right">Proses</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.rown (param row) -->
            <!-- Main row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-success">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover display">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">NPM</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jurusan</th>
                                            <!-- <th class="text-center">Status</th> -->
                                            <!-- <th class="text-center" class="text-center">Edit</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i=0; $i < 10; $i++) { ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i+1; ?></td>
                                            <td class="text-center">10.01.2667</td>
                                            <td class="text-center">TATAS ZULFIKAR</td>
                                            <td class="text-center">01</td>
                                            <!-- <td class="text-center">1</td> -->
                                            <!-- <td class="text-center"><button class="btn btn-warning">Ubah</button></td> -->
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- page script -->
<script>
// li class active
$(function () {
    $("#mahasiswa").addClass("active");
});

//Datemask 9999/9999
$(function () {
    $("#angkatan").inputmask("9999/9999", {"placeholder": "____/____"});
});

$(function () {
    $("table").DataTable();
});
</script>
@endsection