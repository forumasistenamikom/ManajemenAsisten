@extends('layouts.app')

@section('htmlheader_title')
Dasbor
@endsection

@section('contentheader_title', 'Forum Asisten')
@section('contentheader_description', 'STMIK AMIKOM Yogyakarta')
@section('contentheader_level', '')

@section('styles')
@endsection

@section('main-content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-11">
            <div class="row">
                Welcome Su!
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script type="text/javascript">
// li class active
$(function () {
    $("#dashboard").addClass("active");
});

</script>
@endsection