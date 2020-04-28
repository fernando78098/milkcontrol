<?php

namespace App\Http\Controllers;

use App\ordem_de_servico;
use App\maquina;
use Illuminate\Http\Request;

class OrdemDeServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ordem_de_servico $ordem_de_servico)
    {
        $dados = $ordem_de_servico->where('data_de_fechamento',null)->get();
        
        return view('O_S.lista_o_s',compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hoje= date('d/m/Y');        
        $objeto_maquina = Maquina::all();
        return view('O_S.cadastro_editar_o_s', compact('objeto_maquina', 'hoje'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ordem_de_servico $ordem_de_servico)
    {
        $dados = $ordem_de_servico->create($request->all());

        if($dados)
        {    
            $objeto_maquina = Maquina::all();
            $aviso = "O.S aberto com sucesso!";
            return view('O_S.cadastro_editar_o_s', compact('aviso','objeto_maquina'));
        }
        else
        {
            $objeto_maquina = Maquina::all();
            $aviso = "Não foi possivel abrir esta O.S!";
            return view('O_S.cadastro_editar_o_s', compact('aviso','objeto_maquina'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ordem_de_servico  $ordem_de_servico
     * @return \Illuminate\Http\Response
     */
    public function show($id, ordem_de_servico $ordem_de_servico)
    {
        $dados = $ordem_de_servico::find($id);
        
        return view('O_S.show', compact('dados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ordem_de_servico  $ordem_de_servico
     * @return \Illuminate\Http\Response
     */
    public function edit(ordem_de_servico $ordem_de_servico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ordem_de_servico  $ordem_de_servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ordem_de_servico $ordem_de_servico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ordem_de_servico  $ordem_de_servico
     * @return \Illuminate\Http\Response
     */
    public function destroy(ordem_de_servico $ordem_de_servico)
    {
        //
    }
}
