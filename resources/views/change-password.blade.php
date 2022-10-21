
@extends('adminlte::page', ['iFrameEnabled' => false])

    @php($totalAvance=$docenteval2->totalC*100/$docenteval->total)
    @if($totalAvance==100)
        @php($title='Comprobante')
    @else
        @php($title='Cambio de contraseña')
    @endif
@section('title', $title)

@section('content_header')
    <br>
<!--
    <h1><b>Productos Index</b></h1>
-->
@stop

@section('content')





<div class="card card-purple card-outline shadow col-12 col-lg-6">
    <div class="card-header bg-light shadow-sm d-flex mb-2">
            <div class="d-flex justify-content-between">
                @if($totalAvance==100)
                    <button class="btn btn-outline-secondary btn-sm" onclick="window.print()">
                        <b>Comprobante de evaluación <i class="fas fa-print"></i></b>
                    </button>
                @else
                    <b><i class="fas fa-user-lock"  style="color:green;"></i> Hola:</b>   &nbsp;
                    {{ $users->name }} 
                @endif                       
            </div>
    </div>

    <div class="card-body table-responsive" >
    <div class="container-fluid">

                
@if ( $users->password=='$2y$10$BFf2lILq3nDgoTg3x4vO3.3.ymRkXnZNpYihv6WZEQ6gXUzQPuxyu' )
        <div class="card-body table-responsive">
        <form action="{{ route('update-password') }}" method="POST" id="change-pwd">
            @csrf
                    @if (session('status'))
                        <div id="success-alert" class="alert callout callout-success alert-dismissable fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert"  style="color:green;" aria-label="Close">
                                <span aria-hidden="true" style="color:red;">&times;</span>
                            </button>
                                <p><i class="icon fas fa-exclamation-triangle" style="color:green;"></i>
                                sapan{{ session('status') }}  </p>
                        </div> 
                    @elseif (session('error'))
                        <div id="success-alert" class="alert callout callout-danger alert-dismissable fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert"  style="color:red;" aria-label="Close">
                                <span aria-hidden="true" style="color:red;">&times;</span>
                            </button>
                                <p><i class="icon fas fa-exclamation-triangle" style="color:#17a2b8;"></i>
                                {{ session('status') }}  </p>
                        </div> 
                    @endif
                    
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text"  style="width:130px;">Password anterior</span>
                        </div>
                            <input  type="text" 
                                    name="old_password" 
                                    id="oldPasswordInput"
                                    class="form-control @error('old_password') is-invalid @enderror"
                                    value="seiem2022">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <p><center style="color:red;"><b>¡¡ Recuerda, anota y/o memoriza tu nueva contraseña !!</b></center></p>
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text"  style="width:130px;">Nuevo password</span>
                        </div>
                            <input  type="text"
                                    name="new_password" 
                                    id="newPasswordInput"
                                    class="form-control @error('new_password') is-invalid @enderror" >
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text"  style="width:130px;">Confirmar password</span>
                        </div>
                            <input  type="password" 
                                    name="new_password_confirmation"  
                                    id="confirmNewPasswordInput"
                                    class="form-control">
                    </div>

                    <div class="d-flex justify-content-between align-items-center"> 
                        <a href="{{ route('pages.docentes.index') }}" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-reply"></i>
                            Ir Evaluación al desempeño
                        </a>

                        <button class="btn btn-outline-success btn-sm">
                            Cambiar password 
                            <i class="fas fa-user-lock"></i>
                        </button>
                    </div>

        </form>
        </div>
@else


@php($totalAvance=$docenteval2->totalC*100/$docenteval->total)
                @if($totalAvance==100)
                    <table>
                    <thead>
                        <tr>
                            <td>
                                <img src="img/formSupA.jpg" alt=""width="100%">
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td align="center">
                                    <p id="text2"> EVALUACI&Oacute;N DEL DESEMPE&Ntilde;O DEL PERSONAL DOCENTE </p>
                                    <p id="text2"> DE LAS INSTITUCIONES DE EDUCACI&Oacute;N SUPERIOR DE SEIEM  </p>
                                    <p id="text2">SEMESTRE FEBRERO - JULIO 2022</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="justify">
                                    <br><br><br><br>
                                    @foreach($alumnod as $alumnods)
                                        <p id="text3">  La Dirección de Educación Superior agradece su participación en este proceso de evaluación al desempeño docente, 
                                                        misma que servir&aacute; para implementar acciones de mejora, 
                                                        al alumno(a) <b>{{ $userses->name }}</b> 
                                                        de la Institución <b>{{$alumnods->osede}}</b> 
                                                        con sede en <b>{{$alumnods->osubsede}} </b>; 
                                                        perteneciente al programa de <b>{{$alumnods->oprograma}}</b>.
                                        </p> 
                                    @endforeach
                                    <br><br><br>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <img src="img/formSupB.jpg" alt=""width="100%">
                            </td>
                        </tr>
                    </tfoot>
                    </table>

                @elseif($totalAvance<=50)
                    <b>Avance de evaluación al desempeño</b>
                    <span   class= "shadow progress-bar bg-warning progress-bar-striped progress-bar-animated" style= "width:{{$totalAvance}}%; ">
                                <b>{{$totalAvance}}%</b>
                    </span>
                @elseif($totalAvance==0)
                    <b>Avance de evaluación al desempeño</b>
                    <span   class= "shadow progress-bar bg-danger progress-bar-striped progress-bar-animated" style= "width:{{$totalAvance}}%; ">
                                <b>{{$totalAvance}}%</b>
                    </span>
                @endif

@endif

    </div>
    </div>
</div>



@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/buttons.bootstrap4.min.css') }}">
@stop

@section('js')
    <script> console.log('Hi AdminLTE!'); </script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/jszip.min.js') }}"></script>
<script src="{{ asset('js/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/buttons.colVis.min.js') }}"></script>

    

<script>
$(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 5000);
});


$(function () {
    
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      "language": 'es',
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');    

});

$(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 2000);
});



</script>


@stop




