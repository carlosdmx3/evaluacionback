<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\RespuestasRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Alumno;
use App\Evaluacion;
use App\EvaluacionDocente;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = DB::table('users')
            ->select('id', 'name', 'omatricula', 'ofolio', 'oanio', 'oetapa')
            ->where('id', '=', auth()->user()->id )
            ->get();
        
        $alumno = DB::table('alumno_docente')
            ->select('id', 'id_user', 'omatricula', 'ofolio', 'odocente', 'oasignatura')
            ->where('omatricula', '=', auth()->user()->omatricula )
            ->where('ofolio', '=', auth()->user()->ofolio )
            ->OrderBy('odocente', 'ASC')
            ->OrderBy('oasignatura', 'ASC')
            ->GroupBy('id', 'omatricula', 'ofolio','odocente', 'oasignatura')
            ->get();

        $docenteval = DB::table('docente_eval')
            ->select('id','id_alumno_usr','id_docente','oban_fin','op1','op2','op3','op4','op5','op6','op7','op8','op9','op10','op11','op12','op13','op14','op15','op16','op17','op18','op19','op20','op21','op22','op23','op24','op25','op26','op27','op28','op29','op30','op31','op32','op33','op34','op35')
            ->where('id_alumno_usr', auth()->user()->id )
            ->OrderBy('id_alumno_usr', 'ASC')
            ->OrderBy('id_docente', 'ASC')
            ->get();

        return view('pages.docentes.index', ['alumno' => $alumno ,'users' => $users, 'docenteval' => $docenteval ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evaluacion = DB::table('evaluacion')
            ->select('id', 'odescripcion', 'oseccion', 'onumpregunta')
            ->where('oanio', '=', '2022' )
            ->where('oetapa', '=', '1' )
            ->OrderBy('onumpregunta', 'ASC')
            ->get();

        $alumno = Alumno::find($id);

        $docenteval = DB::table('docente_eval')
            ->select('id','id_alumno_usr','id_docente','op1','op2','op3','op4','op5','op6','op7','op8','op9','op10','op11','op12','op13','op14','op15',
                    'op16','op17','op18','op19','op20','op21','op22','op23','op24','op25','op26','op27','op28','op29','op30','op31','op32','op33','op34','op35', 'oban_fin')
            ->where('id_alumno_usr', '=', auth()->user()->id )
            ->where('id_docente', '=', $id )
            ->first();

        return view('pages.docentes.edit', ['alumno' => $alumno, 'evaluacion' => $evaluacion ,'docenteval' => $docenteval] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RespuestasRequest $request, $id)
    {
        DB::table('docente_eval')
        ->where('id_docente', $id ) 
        ->update(array('oban_fin' => 1));

        $users = DB::table('users')
            ->select('id', 'name', 'omatricula', 'ofolio', 'oanio', 'oetapa')
            ->where('id', '=', auth()->user()->id )
            ->get();
    
        $alumno = DB::table('alumno_docente')
            ->select('id', 'id_user', 'omatricula', 'ofolio', 'odocente', 'oasignatura')
            ->where('omatricula', '=', auth()->user()->omatricula )
            ->where('ofolio', '=', auth()->user()->ofolio )
            ->OrderBy('odocente', 'ASC')
            ->OrderBy('oasignatura', 'ASC')
            ->GroupBy('id', 'omatricula', 'ofolio','odocente', 'oasignatura')
            ->get();

        $docenteval = DB::table('docente_eval')
            ->select('id','id_alumno_usr','id_docente','op1','op2','op3','op4','op5','op6','op7','op8','op9','op10','op11','op12','op13','op14','op15','op16','op17','op18','op19','op20','op21','op22','op23','op24','op25','op26','op27','op28','op29','op30','op31','op32','op33','op34','op35')
            ->where('id_alumno_usr', auth()->user()->id )
            ->OrderBy('id_alumno_usr', 'ASC')
            ->OrderBy('id_docente', 'ASC')
            ->get();

    return redirect()->route('pages.docentes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
