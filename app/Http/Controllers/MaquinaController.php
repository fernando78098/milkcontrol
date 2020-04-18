<?php

namespace App\Http\Controllers;

use App\maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
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
        return view('maquinas.cadastro_editar_maquinas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Maquina $maquina)
    {
        $dados = $maquina->create($request->all());

        if ($dados) 
        {
            $mensagem = "Maquina $request->nome_da_maquina gravado com sucesso!";
            return view('maquinas.cadastro_editar_maquinas', compact('mensagem'));
        }
        else
        {
            $mensagem = "Não foi possivel gravar $request->nome_da_maquina !";
            return view('maquinas.cadastro_editar_maquinas',compact('mensagem'));
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function show(maquina $maquina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function edit(maquina $maquina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, maquina $maquina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function destroy(maquina $maquina)
    {
        //
    }
}
