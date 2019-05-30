<?php

namespace App\Http\Controllers;

use App\micro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MicroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( micro $micro)
    {
      $relatorio = $micro->all();
        

        return view('micro.relatorio_micro', compact('relatorio'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('micro.form_micro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, micro $micro)
    {
        $dados = $request->all();
        $dadosfiltrado = array_filter($dados['vaca']);

        for ($i=0; $i < count($dadosfiltrado) ; $i++) {

           $micro = new micro;
           $micro->vaca = $dadosfiltrado[$i];
           $micro->save();
        }

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\micro  $micro
     * @return \Illuminate\Http\Response
     */
    public function show(micro $micro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\micro  $micro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dado = \App\micro::find($id);
        
        return view('micro.editar_form_micro', compact('dado' , 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\micro  $micro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Micro $micro)
    {
        $dado = \App\micro::find($request->id);
        $dado->vaca = $request->vaca;
        $dado->save();
        return redirect()->action('MicroController@store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\micro  $micro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaca = micro::find($id);
        $vaca->delete();
        return redirect()->action('MicroController@index');
    }
}
