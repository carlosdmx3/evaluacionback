
@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Instrucciones')

@section('content_header')
    <br>
<!--
    <h1><b>Productos Index</b></h1>
-->
@stop

@section('content')


<div class="col-10 card card-purple card-outline shadow">
        <div class="card-header bg-light shadow-sm d-flex mb-2">
                <div class="d-flex justify-content-between">
                    <b><i class="icon fas fa-info-circle" style="color:gold;"></i> Instrucciones:</b>                
                </div>
        </div>

        <div class="card-body table-responsive">

                <div class="callout callout-warning alert-dismissable fade show" style="font-weight:bold;">
        
                </div> 
                <div>
                   
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