
@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Importante')


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
            <b><i class="fa fa-exclamation-triangle" style="color:red"></i> Importante </b>
        </div>
        <div class="card-body">
        </div>
    </div>

    <div class="callout callout-danger shadow">
                <h5><b><i class="fas fa-exclamation-triangle" style="color:red"></i> Importante</b></h5>
                This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
    </div>

</div>
</div>



<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

          
            <!-- PIE CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">AAAAAt</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    




                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
    <!-- /.content -->


    

@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi AdminLTE!'); </script>

@stop