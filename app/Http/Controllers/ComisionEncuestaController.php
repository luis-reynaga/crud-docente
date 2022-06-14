<?php

namespace App\Http\Controllers;

use App\Models\ComisionEncuesta;
use Illuminate\Http\Request;

class ComisionEncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        var_dump("Isue");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\ComisionEncuesta  $comisionEncuesta
     * @return \Illuminate\Http\Response
     */
    public function show(ComisionEncuesta $comisionEncuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComisionEncuesta  $comisionEncuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(ComisionEncuesta $comisionEncuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComisionEncuesta  $comisionEncuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComisionEncuesta $comisionEncuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComisionEncuesta  $comisionEncuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComisionEncuesta $comisionEncuesta)
    {
        //
    }
}
