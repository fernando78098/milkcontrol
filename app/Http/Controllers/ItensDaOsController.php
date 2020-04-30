<?php

namespace App\Http\Controllers;

use App\itens_da_os;
use App\ordem_de_servico;
use Illuminate\Http\Request;

class ItensDaOsController extends Controller
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
    public function create(Request $request, ordem_de_servico $ordem_de_servico)
    {
        $objeto_os = $ordem_de_servico->find($request->id);
        return view('itens_os.cadastro_editar_itens_os',compact('objeto_os'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, itens_da_os $itens_da_os, ordem_de_servico $ordem_de_servico)
    {
        $dados = $itens_da_os->create($request->all());

        if($dados)
        {    
            
            $objeto_os = $ordem_de_servico->find($request->ordem_de_servico_id);
            $aviso = "O.S aberto com sucesso!";
            return view('itens_os.cadastro_editar_itens_os', compact('aviso','objeto_os'));
        }
        else
        {
            $objeto_os = $ordem_de_servico->find($request->ordem_de_servico_id);
            $aviso = "Não foi possivel abrir esta O.S!";
            return view('itens_os.cadastro_editar_itens_os', compact('aviso','objeto_os'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\itens_da_os  $itens_da_os
     * @return \Illuminate\Http\Response
     */
    public function show(itens_da_os $itens_da_os)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\itens_da_os  $itens_da_os
     * @return \Illuminate\Http\Response
     */
    public function edit(itens_da_os $itens_da_os)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\itens_da_os  $itens_da_os
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, itens_da_os $itens_da_os)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\itens_da_os  $itens_da_os
     * @return \Illuminate\Http\Response
     */
    public function destroy(itens_da_os $itens_da_os)
    {
        //
    }
}
