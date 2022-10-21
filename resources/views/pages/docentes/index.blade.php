
@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Evaluación del desempeño del personal docente')

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
                <b><i class="icon fas fa-user-check" style="color:green;"></i> Evaluación al desempeño del personal docente</b>                
            </div>
    </div>

    <div class="card-body table-responsive">
            <div class="callout callout-secondary alert-dismissable fade show" style="font-size:14px;">
                        <p><b>Instrucciones de evaluación: </b></p>
                        
                        <div >
                            <ol>
                                <li value="1">
                                        Da click en el nombre de un docente para comenzar a evaluarlo
                                </li>
                                <li value="2">
                                        Lee con atención cada pregunta, y asigna la puntuación que representa la evaluación al desempeño del docente
                                </li>
                                <li value="3">
                                        Selecciona la opción que a tu juicio es la correcta para cada pregunta
                                </li>
                                <li value="4">
                                        Cuando hayas finalizado da clic en el botón 
                                        <span class="badge badge-success">CONCLUIR EVALUACIÓN</span>
                                        <i class="fas fa-mouse-pointer"></i>
                                </li>
                                <li value="5">
                                        Regresarás al listado de tus docentes y repite los pasos anteriores hasta evaluar a todos
                                </li>
                                <li value="6">
                                        Al terminar de evaluar a todos da click en el botón "Imprimir comprobante"
                                </li>
                            </ol>
                        </div> 

            </div> 

            <div>
        
                    <table id="example1"  class="table table-sm table-striped table-hover" style="font-size:14px;">
                        <thead class="bg-purple" >
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Asignatura</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                        <tbody>
                        <?php $count=0; ?>
                            @php($count=0)
                        @foreach ($alumno as $alumnos)
                            @php($count++)
                            <tr valign="middle">
                                <td width="5%" align="center"> {{ $count }} </td>

                                <td  width="30%"> {{ $alumnos->odocente }} </td>

                                <td  width="40%"> {{ $alumnos->oasignatura }} </td>

                                <td  width="10%" align="center">   
                                    <a href="{{ route('pages.docentes.edit', $alumnos->id) }}" class="btn btn-outline-warning btn-sm" title="Editar">
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                </td>
                                <td whidth="15%"> 
                                    <span class="progress" >
                        @foreach ($docenteval as $docentevals)
                            @if($docentevals->id_docente==$alumnos->id)
                                @php($total=$docentevals->op1 + $docentevals->op2 + $docentevals->op3 + $docentevals->op4 + $docentevals->op5 + $docentevals->op6 + $docentevals->op7 +
                                  $docentevals->op8 + $docentevals->op9 + $docentevals->op10  + $docentevals->op11 + $docentevals->op12 + $docentevals->op13 + $docentevals->op14 +
                                  $docentevals->op15 + $docentevals->op16 + $docentevals->op17 + $docentevals->op18 + $docentevals->op19 + $docentevals->op20 + $docentevals->op21 + 
                                  $docentevals->op22 + $docentevals->op23 + $docentevals->op24 + $docentevals->op25 + $docentevals->op26 + $docentevals->op27 + $docentevals->op28 +
                                  $docentevals->op29 + $docentevals->op30 + $docentevals->op31 + $docentevals->op32 + $docentevals->op33 + $docentevals->op34 + $docentevals->op35)
                                    @if($docentevals->oban_fin==1)
                                                <span   class="progress-bar bg-success progress-bar-striped progress-bar-animated" 
                                                        style="width:100%;">
                                                        <b>100%</b>
                                                </span>
                                    @else

                                        @if($total==0)
                                                <span   class="progress-bar bg-danger progress-bar-striped progress-bar-animated" 
                                                        style="width:15%;">
                                                        <b>0%</b>
                                                </span>
                                        @elseif($total<175)
                                            @php($res=($total*100)/175))
                                                <span   class="progress-bar bg-warning progress-bar-striped progress-bar-animated" 
                                                        style="width:{{round($res)}}%;">
                                                        <b>{{round($res)}}%</b>
                                                </span>
                                        @elseif($total==175)
                                                <span   class="progress-bar bg-success progress-bar-striped progress-bar-animated" 
                                                        style="width:100%;">
                                                        <b>100%</b>
                                                </span>
                                        @endif

                                    @endif

                            @endif
                        @endforeach
                                    </span>  
                                </td>
                            </tr>
                        @endforeach
                        </tbody>                  
                    </table>








                
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