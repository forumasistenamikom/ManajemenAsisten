@extends('layouts.app')

@section('htmlheader_title')
History Asisten
@endsection

@section('contentheader_title', 'History Asisten')
@section('contentheader_description', 'List History Asisten Berdasarkan NPM atau Nama')
@section('contentheader_level', 'History Asisten')

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
                <div class="col-xs-6">
                    <div class="box box-info">
                        <form role="form" class="form-inline">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="npm" class="control-label">NPM: </label>
                                    <input id="npm" name="npm" type="text" class="form-control" data-inputmask="'alias': '99.99.9999'" data-mask>
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
                <div class="col-xs-6">
                    <div class="box box-info">
                        <form role="form" class="form-inline">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nama" class="control-label">Nama: </label>
                                    <input id="nama" name="nama" type="text" class="form-control" style="text-transform: uppercase;">
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
                                            <th class="text-center">no</th>
                                            <th class="text-center">thn_ajaran</th>
                                            <th class="text-center">semester</th>
                                            <th class="text-center">kode_mkl</th>
                                            <th class="text-center">mkl</th>
                                            <th class="text-center">npm</th>
                                            <th class="text-center">nama</th>
                                            <th class="text-center">kode_jurusan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i=0; $i < 0; $i++) { ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i+1; ?></td>
                                            <td class="text-center">2011/2012</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">DT015</td>
                                            <td class="text-center">STRUKTUR DATA</td>
                                            <td class="text-center">10.11.4438</td>
                                            <td class="text-center">EKA MACHRUDI HADI WIHARSI</td>
                                            <td class="text-center">11</td>
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
    $("#history").addClass("active");
});

// NPM 99.99.9999
$(function () {
    $("#npm").inputmask("99.99.9999", {"placeholder": "__.__.____"});
});

$(function () {
    $("#nama").val().toUpperCase();
});

$(function () {
    $("table").DataTable();
});
</script>
@endsection