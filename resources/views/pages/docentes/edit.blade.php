

@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title',  'Evaluar a: '.$alumno->odocente)

@section('content_header')
    <br>
<!--
    <h1><b>Productos Index</b></h1>
-->
@stop

@section('content')

<div class="col-10 card card-purple card-outline shadow">
        <div class="card-header bg-light shadow-sm d-flex mb-2">
                <div  style="font-size:14px;">
                        <i class="icon fas fa-spell-check" style="color:green;"></i>
                            &nbsp; <b>Profesor(a):</b> &nbsp;  
                            {{ $alumno->odocente }}    
                        <br>
                        <i class="fas fa-book" style="color:green;"></i>
                            &nbsp; <b> Asignatura: </b> &nbsp;    
                            {{ $alumno->oasignatura }}      
                            <br>
<!--
                        {{ auth()->user()->id }} - {{ $alumno->id }} . {{ $alumno->id_user }} 
                        
                        @if($docenteval)
                        ---{{ $docenteval->id }}. us {{ $docenteval->id_alumno_usr }} .d {{$docenteval->id_docente }}
                        @endif   
-->
                        <br> 
                        Contesta con veracidad y honestidad las siguientes preguntas, que tiene como objetivo, 
                        conocer tu opinión respecto del desempeño de las y los docentes que participan en el desarrollo del programa curricular que ofrece la Institución. 
                        Y selecciona la opción que mejor exprese el desempeño docente, considerando que 5 es la calificación máxima.
                             
                </div>
                
        </div>

        <div class="card-body table-responsive">
        <form name="FrmCartel" id="FrmCartel" method="post" action="{{ route('pages.evaluaciones.update', $docenteval->id  ) }}" >
        @method('PATCH')
        @csrf
                <table id="example1"  class="table table-sm table-striped  table-hover "  style="font-size:14px;">
                    <thead class="bg-purple" align="center">
                        <tr>
                            <th>#</th>
                            <th>Preguntas de evaluación</th>
                        </tr>
                        </thead>
                    <tbody>
            
                    <?php $count=0; ?>
                        @php($count=0)
                        @foreach ($evaluacion as $evaluaciones)
                        @php($count++)
                        <tr>
                            <td width="5%"  align="right">  
                                <b>{{ $count }} .-</b>
                            </td>
                            <td  width="95%">
                                <b>{{ $evaluaciones->odescripcion }} </b>

                                @php($actual = 'op'.$evaluaciones->onumpregunta) 
                                @php($pregunta = $evaluaciones->onumpregunta )
                                <br> 
                                <input  type="radio" 
                                        id="p{{ $count }}1" 
                                        name="p{{ $evaluaciones->onumpregunta }}" 
                                        value="1"                                         
                                        @if( old('p'.$evaluaciones->onumpregunta, $docenteval->$actual)=='1')checked @endif 
                                        >
                                Totalmente en desacuerdo

                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input  type="radio" 
                                        id="p{{ $count }}2" 
                                        name="p{{ $evaluaciones->onumpregunta }}" 
                                        value="2"                                         
                                        @if( old('p'.$evaluaciones->onumpregunta, $docenteval->$actual)=='2')checked @endif
                                        >
                                En desacuerdo

                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input  type="radio" 
                                        id="p{{ $count }}3" 
                                        name="p{{ $evaluaciones->onumpregunta }}" 
                                        value="3"                                         
                                        @if( old('p'.$evaluaciones->onumpregunta, $docenteval->$actual)=='3')checked @endif
                                        >
                                Ni de acuerdo ni en desacuerdo

                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input  type="radio" 
                                        id="p{{ $count }}4" 
                                        name="p{{ $evaluaciones->onumpregunta }}" 
                                        value="4"                                         
                                        @if( old('p'.$evaluaciones->onumpregunta, $docenteval->$actual)=='4')checked @endif
                                        >
                                De acuerdo    
                                
                                &nbsp;&nbsp;&nbsp;&nbsp;                   
                                <input  type="radio" 
                                        id="p{{ $count }}5" 
                                        name="p{{ $evaluaciones->onumpregunta }}" 
                                        value="5"                                          
                                        @if( old('p'.$evaluaciones->onumpregunta, $docenteval->$actual)=='5')checked @endif
                                        >
                                Totalmente de acuerdo  
                                <br>

                                    @error('p'.$evaluaciones->onumpregunta)
                                        <span style="color:red;"> 
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror  
                                              
                            </td>
                        </tr>
                        @endforeach    

                    </tbody>                  
                </table>

                    <script>
                        function saveRespuesta(elval, val)
                        {
                        //    alert(elval+',' +val);
                            //location.href="{{route('pages.docentes.index', 123) }}";

                    }

                    
                </script>

                <br>
                    
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('pages.docentes.index') }}" class="btn btn-outline-secondary btn-sm"> 
                        <span class="fas fa-reply"></span> 
                        <b>Regresar</b>
                    </a>
                    &nbsp;&nbsp;
<!--
                         onClick=" var respuesta= validarFrmPreguntas(document.FrmCartel); if(respuesta){ document.FrmCartel.submit(); }"
-->
                    <button class="btn btn-outline-success btn-sm"
                    >
                        <b>
                        @if($docenteval->oban_fin==1)
                            Evaluacion concluida 
                        @else
                            Concluir evaluacion
                        @endif
                        
                        </b>
                        <span class="fas fa-check"></span>
                    </button>                                                            
                </div>

                
        </form>
</div>




@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@livewireScripts
    <script> console.log('Hi AdminLTE!'); </script>

<script>


    function validarFrmPreguntas(FrmCartel)
    {

    for (i=1; i<6; i++)
    {
        
        var preg = i+'';
        var texto = 'p'+preg;
        //alert (document.getElementById(texto+'1').value);
            if (document.getElementById(texto+'5').checked == false && 
        document.getElementById(texto+'4').checked== false && 
        document.getElementById(texto+'3').checked== false &&
        document.getElementById(texto+'2').checked== false &&  
        document.getElementById(texto+'1').checked== false) {
            
            alert('Favor de responder la pregunta ' + i);
                return false;
            }
        }
        return true;
    }
</script>

@if($docenteval->oban_fin==1)
<script>
    function deshabilitarFormulario(formulario){
	for(i=0; i<formulario.elements.length; i++){
		formulario.elements[i].disabled = true;
	}
}
deshabilitarFormulario(document.getElementsByName('FrmCartel')[0]);
</script>
@endif

<script type="application/javascript">
function geoip(json){
var userip      = document.getElementById("user_ip");
var countrycode = document.getElementById("user_countrycode");
userip.textContent      = json.ip;
countrycode.textContent = json.country_code;
}
</script>
<script async src="https://get.geojs.io/v1/ip/geo.js"></script>
@stop