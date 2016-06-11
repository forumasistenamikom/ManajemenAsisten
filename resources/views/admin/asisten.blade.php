@extends('layouts.app')

@section('htmlheader_title')
Asisten
@endsection

@section('contentheader_title', 'Asisten')
@section('contentheader_description', 'List Asisten per Tahun Akademik dan Jurusan')
@section('contentheader_level', 'Asisten')

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
                                    <label for="tha" class="control-label">Tahun Ajaran: </label>
                                    <input id="tha" name="tha" type="text" class="form-control" data-inputmask="'alias': '9999/9999'" data-mask>
                                </div>
                                &nbsp;&nbsp;&nbsp;
                                <div class="form-group">
                                    <label for="semester" class="control-label"> Semester: </label>
                                    <select id="semester" name="semester" class="form-control">
                                        <!-- <option value=""></option> -->
                                        <option value="1">Ganjil</option>
                                        <option value="2">Genap</option>
                                    </select>
                                </div>
                                &nbsp;&nbsp;&nbsp;
                                <div class="form-group">
                                    <label for="kode_jurusan" class="control-label"> Jurusan: </label>
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
                                            <th class="text-center">Kode Mkl</th>
                                            <th class="text-center">Mkl</th>
                                            <th class="text-center">NPM</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jrs</th>
                                            <!-- <th class="text-center">Status</th> -->
                                            <th class="text-center">Event</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i=0; $i < 13; $i++) { ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i+1; ?></td>
                                            <td class="text-center">DT057</td>
                                            <td class="text-center">ALGORITMA DAN PEMROGRAMAN</td>
                                            <td class="text-center">11.11.5654</td>
                                            <td class="text-center">RIAN ARIF</td>
                                            <td class="text-center">01</td>
                                            <!-- <th class="text-center">Status</th>  -->
                                            <td class="text-center">
                                                <button class="btn btn-warning">Ubah</button>
                                                <button class="btn btn-danger">Hapus</button>
                                            </td>
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
    $("#asisten").addClass('active');
});
// Datemask 9999/9999
$(function () {
    $("#tha").inputmask("9999/9999", {"placeholder": "____/____"});
});

$(function () {
    $("table").DataTable( {
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.11/i18n/Indonesian-Alternative.json'
        }
    });
});
</script>
@endsection