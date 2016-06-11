@extends('layouts.app')

@section('htmlheader_title')
Asisten
@endsection

@section('contentheader_title', 'Asisten')
@section('contentheader_description', 'Menghapus Data Asisten Lebih Dari Satu (Koleksi)')
@section('contentheader_level', 'Asisten')

@section('styles')

@endsection

@section('main-content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-11">
            <!-- Main row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-danger">
                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="btn btn-danger" for="my-file-selector">
                                        <input id="my-file-selector" type="file" style="display:none;" onchange="$('#upload-file-info').html($(this).val());">
                                        Hapus
                                    </label>
                                    <span class='label label-info' id="upload-file-info"></span>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-danger pull-right">Proses</button>
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
<!-- page script -->
<script>
// li class active
$(function () {
    $("#asisten").addClass('active');
});
</script>
@endsection