<?php

namespace App\Http\Controllers;

use App\coleta;
use Illuminate\Http\Request;

class ColetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('coleta.form');
    }

    public function coletado(Request $request)
    {
        dd($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request);
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
     * @param  \App\coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function show(coleta $coleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function edit(coleta $coleta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coleta $coleta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(coleta $coleta)
    {
        //
    }
}
