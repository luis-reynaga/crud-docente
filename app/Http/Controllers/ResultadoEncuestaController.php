<?php

namespace App\Http\Controllers;

use App\Models\ResultadoEncuesta;
use Illuminate\Http\Request;

class ResultadoEncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("resultado.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        var_dump("test");
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
     * @param  \App\Models\ResultadoEncuesta  $resultadoEncuesta
     * @return \Illuminate\Http\Response
     */
    public function show(ResultadoEncuesta $resultadoEncuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResultadoEncuesta  $resultadoEncuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(ResultadoEncuesta $resultadoEncuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResultadoEncuesta  $resultadoEncuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResultadoEncuesta $resultadoEncuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResultadoEncuesta  $resultadoEncuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResultadoEncuesta $resultadoEncuesta)
    {
        //
    }
}
