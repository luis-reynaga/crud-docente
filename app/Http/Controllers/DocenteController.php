<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\DocenteCurso;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //var_dump(Docente::all());
        return view("docente.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isCodevalid = true;
        while($isCodevalid){
            $codigo = '00'.date("Y").(string)random_int(1000, 9999);
            $docente = Docente::where('codigo',  $codigo)->first();
            if($docente == null){
                $isCodevalid  = false;
            }
        }

        $docente = Docente::where('email',  $request['email'])->first();
        if($docente){
            return response()->json(['msg' => 'El email ya fue registrado!!', 'status' => 400]); 
        }
        $createDocente = Docente::create([
            'nombres' =>$request['nombre'],
            'email' => $request['email'],
            'grado' => $request['grado'],
            'telefono' => $request['telefono'],
            'codigo' => $codigo,
        ]);

        DocenteCurso::create([
            'cantidad_alumnos' => "0",
            'docente_id' =>   $createDocente->id,
            'curso_id' => 1
        ]);
        return response()->json(['msg' => 'Docente creado!!', 'status' => 200]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        return response()->json($docente); 
    }
}
