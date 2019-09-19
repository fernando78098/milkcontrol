<?php

namespace App\Http\Controllers;

use App\coleta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        /** Recupera todos animais na ordenha  */
        $vaca = $request->all();



        //** Recupera todas vacas cadastradas */
        $vaca_cadastradas = DB::table('micros')->select('vaca')->get();



        //** Total Vacas Cadastradas */
       $total_cadastradas = count($vaca_cadastradas);
       //** Convertendo dados do banco em um array */
       $set = array();

       for ($i=0; $i < $total_cadastradas ; $i++) {
           $set[$i] = $vaca_cadastradas[$i]->vaca;

       }
        /** faz um array somente do numero das vacas dentro da ordenha  */
        $total_vacas_ordenha = array_filter($vaca['vaca']);






        //** Conta quantas vacas tem na ordenha  */
        $total_vacas = count($total_vacas_ordenha);









        return view('coleta.form_coleta_amostra', compact('vaca','total_vacas','set', 'total_vacas_ordenha'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dados = $request->all();
        $dadosfiltrado = array_filter($dados['vaca']);


        for ($i=0; $i < count($dadosfiltrado) ; $i++) {

            DB::insert("INSERT INTO coletas (micro_id, coleta_ae, coleta_ad, coleta_pe, coleta_pd ) values (?, ?, ?, ?, ?)", [$dados['vaca'][$i],$dados['coleta_ae'][$i],$dados['coleta_ad'][$i],$dados['coleta_pe'][$i],$dados['coleta_pd'][$i]]);

        }

        return redirect('/coleta');







    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function result(coleta $coleta)
    {
        $relatorio = $coleta->all();
        return view('coleta.resultado_coleta', compact('relatorio'));
    }
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
