<?php

namespace App\Http\Controllers;

use App\procedimento;
use Illuminate\Http\Request;

class ProcedimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tratamento-mastite.form1');
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
     * @param  \App\procedimento  $procedimento
     * @return \Illuminate\Http\Response
     */
    public function show(procedimento $procedimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\procedimento  $procedimento
     * @return \Illuminate\Http\Response
     */
    public function edit(procedimento $procedimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\procedimento  $procedimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, procedimento $procedimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\procedimento  $procedimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(procedimento $procedimento)
    {
        //
    }
    public function procurar(Request $request)
    {
        $total_cadastradas = count(array_filter($request->input('vaca')));
        $set = array();


        for ($i=0; $i < $total_cadastradas ; $i++) {
            $set['vaca'][$i] = $request->input('vaca')[$i];
            $set['massa'][$i] = $request->input('massa')[$i];


        };
        


        for($i=0; $i < $total_cadastradas; $i++)
        {
            

        };

        
        
    }
}
