<?php

namespace App\Http\Controllers;

use App\tratamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route as IlluminateRoute;
use Symfony\Component\Routing\Route;

class TratamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(tratamento $tratamento)
    {
        $dados = $tratamento->all();

        return view('configuracoes.tratamentos.table', compact('dados'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configuracoes.tratamentos.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, tratamento $tratamento)
    {
        $dados = $tratamento->create($request->all());

        if($dados)
        {
            $aviso = "Tratamento Cadastrado com sucesso!";
            return view('configuracoes.tratamentos.form' , compact('aviso'));
        }
        else
        {
            $aviso = "Não foi possivel cadastrar esse Tratamento!";
            return view('configuracoes.tratamentos.form' , compact('aviso'));
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tratamento  $tratamento
     * @return \Illuminate\Http\Response
     */
    public function show(tratamento $tratamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tratamento  $tratamento
     * @return \Illuminate\Http\Response
     */
    public function edit(tratamento $tratamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tratamento  $tratamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tratamento $tratamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tratamento  $tratamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(tratamento $tratamento)
    {
        //
    }
}
