@extends('layouts.app')

@section('htmlheader_title')
Matakuliah
@endsection

@section('contentheader_title', 'Matakuliah')
@section('contentheader_description', 'List Matakuliah Per Tahun Akademik')
@section('contentheader_level', 'Matakuliah')

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
                                &nbsp;&nbsp;
                                <div class="form-group">
                                    <label for="semester" class="control-label">Semester: </label>
                                    <select id="semester" name="semester" class="form-control">
                                        <!-- <option value=""></option> -->
                                        <option value="1">Ganjil</option>
                                        <option value="2">Genap</option>
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
                                            <th class="text-center">Kode</th>
                                            <th class="text-center">Mkl</th>
                                            <th class="text-center">Sks</th>
                                            <th class="text-center">Jrs</th>
                                            <!-- <th class="text-center">Status</th> -->
                                            <!-- <th class="text-center" class="text-center">Edit</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i=0; $i < 10; $i++) { ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i+1; ?></td>
                                            <td class="text-center">DT043</td>
                                            <td class="text-center">AKUNTANSI</td>
                                            <td class="text-center">2</td>
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
    $("#matakuliah").addClass('active');
});

//Datemask 9999/9999
$(function () {
    $("#tha").inputmask("9999/9999", {"placeholder": "____/____"});
});

$(function () {
    $("table").DataTable();
});
</script>
@endsection