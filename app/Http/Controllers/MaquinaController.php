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
    public function index(maquina $maquina)
    {
        // consulta todas maquinas cadastrada
        $dados = $maquina->all();

        //retorna o front da lista de maquinas e envia todos maquinas cadastradas junto
        return view('maquinas.lista_maquinas', compact('dados'));
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
    public function show($id)
    {
        // mostra o front da ficha da maquina e repassa pra viu uma consulta de uma maquina especifica
        return view('maquinas.show', ['maquina' => Maquina::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editar = Maquina::find($id);        
        
        return view('maquinas.cadastro_editar_maquinas', compact('editar', 'id'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $editar = Maquina::find($id);
        $editar->nome_da_maquina=$request->get('nome_da_maquina');
        $editar->marca_da_maquina=$request->get('marca_da_maquina');
        $editar->tratorista=$request->get('tratorista');
        $editar->save();

        if($editar)
        {
            
            return view('maquinas.show', ['maquina' => Maquina::findOrFail($id),'mensagem' => " A maquina $request->nome_da_maquina foi editado com sucesso!"]);
        }
        else
        {
            return view('maquinas.show', ['maquina' => Maquina::findOrFail($id),'mensagem' => "Não foi possivel editar $request->nome_da_maquina!"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objeto = Maquina::find($id);
        $objeto->delete();

        if($objeto)
        {
            return redirect()->action('MaquinaController@index');
        }
        else
        {
            return "não foi possivel excluir essa Maquina!";
        }
    }
}
