@extends('layouts.app')

@section('htmlheader_title')
Presensi
@endsection

@section('contentheader_title', 'Presensi')
@section('contentheader_description', 'List Presensi Asisten Per Tahun Akademik')
@section('contentheader_level', 'Presensi')

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
                                    <label for="tha" class="control-label">Tahun Ajaran:</label>
                                    <input id="tha" name="tha" type="text" class="form-control" data-inputmask="'alias': '9999/9999'" data-mask>
                                </div>
                                &nbsp;
                                <div class="form-group">
                                    <label for="semester" class="control-label">Semester:</label>
                                    <select id="semester" name="semester" class="form-control">
                                        <!-- <option value=""></option> -->
                                        <option value="1">Ganjil</option>
                                        <option value="2">Genap</option>
                                    </select>
                                </div>
                                &nbsp;
                                <div class="form-group">
                                    <label for="kode_jurusan" class="control-label">Jurusan:</label>
                                    <select id="kode_jurusan" name="kode_jurusan" class="form-control">
                                        <!-- <option value=""></option> -->
                                        <?php $jurusan = array('01' => 'D3-Teknik Informatika', '02' => 'D3-Manajemen Informatika', '11' => 'S1-Teknik Informatika'); ?>
                                        <?php foreach ($jurusan as $key => $value) { ?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                &nbsp;
                                <div class="form-group">
                                    <label for="jenis" class="control-label">Jenis:</label>
                                    <select id="jenis" name="jenis" class="form-control">
                                        <!-- <option value=""></option> -->
                                        <option value="uts">UTS</option>
                                        <option value="uas">UAS</option>
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
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-bordered table-striped table-hover display">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode</th>
                                        <th class="text-center">Mkl</th>
                                        <th class="text-center">NPM</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Jrs</th>
                                        <th class="text-center">Jml</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < 10; $i++) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i+1; ?></td>
                                        <td class="text-center">DT043</td>
                                        <td class="text-center">AKUNTANSI</td>
                                        <td class="text-center">12.11.5851</td>
                                        <td class="text-center">DODI</td>
                                        <td class="text-center">01</td>
                                        <td class="text-center">6</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
    $("#presensi").addClass("active");
});

// tha 9999/9999
$(function () {
    $("#tha").inputmask("9999/9999", {"placeholder": "____/____"});
});

$(function () {
    $("table").DataTable();
});
</script>
@endsection