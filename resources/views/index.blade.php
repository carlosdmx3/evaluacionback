
@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Instrucciones')

@section('content_header')
    <br>
<!--
    <h1><b>Productos Index</b></h1>
-->
@stop

@section('content')



@foreach($users as $userses)
@if ( $userses->password=='$2y$10$BFf2lILq3nDgoTg3x4vO3.3.ymRkXnZNpYihv6WZEQ6gXUzQPuxyu' )

        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fas fa-hand-paper"></i> &nbsp; Hola:  <b> {{ $userses->name }} {{ $userses->id }}</b></span>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body" align="center">
                        <h4>
                            <span style="color:red;">
                                <b>¡Por favor realiza el cambio de tu contraseña!</b> 
                            </span>
                                    <br><br>
                                Clic  &nbsp;<i class="far fa-hand-point-right"></i> &nbsp;
                                    <a href="{{ route('change-password') }}" class="btn btn-outline-secondary btn-sm">
                                        Cambiar mi contraseña 
                                        <span class="badge badge-light">
                                            <i class="fas fa-ellipsis-h"></i><i class="fas fa-ellipsis-h"></i>
                                        </span>
                                    </a>
                        </h4>                        
                    </div>

                    <div class="modal-footer">

                    </div>

                </div>
            </div>
        </div>

@else

@endif
@endforeach





@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi AdminLTE!'); </script>

    
<script>
$( document ).ready(function() {
    $('#myModal').modal('toggle')
});
</script>


};
@stop