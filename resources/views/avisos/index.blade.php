
@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Sección de Avisos')

@section('content_header')
    <br>
<!--
    <h1><b>Productos Index</b></h1>
-->
@stop

@section('content')

<div class="row">
<div class="col-12">

    <div class="card shadow">
        <div class="card-header bg-light shadow-sm">
            <b><i class="fa fa-bell" style="color:gold"></i> Avisos </b>
        </div>

        <div class="card-body">
           
        </div>
    </div>

    <div class="callout callout-warning shadow">
                <h5><b><i class="fas fa-bell" style="color:gold"></i> Avisos</b></h5>
                This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
    </div>

    <div>
        20%
        <div class="progress shadow">
            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" title="A" style="width:20%"></div>
        </div>

        40%
        <div class="progress">
            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width:40%"></div>
        </div>

        60%
        <div class="progress">
            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width:60%"></div>
        </div>

        80%
        <div class="progress">
            <div class="progress-bar bg-primary  progress-bar-striped progress-bar-animated" style="width:80%"></div>
        </div>

        100%
        <div class="progress">
            <div class="progress-bar bg-info  progress-bar-striped progress-bar-animated" style="width:100%"></div>
        </div>

        80%
        <div class="progress">
            <div class="progress-bar bg-purple  progress-bar-striped progress-bar-animated" style="width:80%"></div>
        </div>
    </div>
</div>
</div>
        

@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi AdminLTE!'); </script>
@stop