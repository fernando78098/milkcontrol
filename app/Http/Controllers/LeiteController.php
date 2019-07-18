<?php

namespace App\Http\Controllers;

use App\leite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('leite.data');
    }

    public function leite(Request $request,leite $leite )
    {
        $dados = $request->all();

        if ($dados['turno'] == "noite")
        {
            $dadosss = ++$dado['data'];
            $relatorio = DB::table('leites')->select('vaca', 'turno', 'leite', 'data')->where('data', $dados['data'])->where('data', $dadosss)->where('turno',$dados['turno'])->get();


            $data = $relatorio['0']->data;
            $datas = date('d-m-Y', strtotime($data));
            $turno = $relatorio['0']->turno;
            $final = "$datas  $turno";

            return view('leite.relatorio',compact('relatorio','data', 'final'));
        }else
        {
            $relatorio = DB::table('leites')->select('vaca', 'turno', 'leite', 'data')->where('data', $dados['data'])->where('turno',$dados['turno'])->get();

            $data = $relatorio['0']->data;
            $datas = date('d-m-Y', strtotime($data));
            $turno = $relatorio['0']->turno;
            $final = "$datas  $turno";

            return view('leite.relatorio',compact('relatorio','data', 'final'));


        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leite.form');
    }

    public function leitelote()
    {
        return view('leite.form_leite_lote');
    }

    public function gravaleite(Request $request,leite $leite)
    {
        $turno_manha_inicio = date_format(date_create('04:00'), 'H:i');
        $turno_manha_fim = date_format(date_create('11:59'), 'H:i');
        $turno_tarde_inicio = date_format(date_create('12:00'), 'H:i');
        $turno_tarde_fim = date_format(date_create('19:59'), 'H:i');
        $turno_noite_inicio = date_format(date_create('20:00'), 'H:i');
        $turno_noite_fim = date_format(date_create('00:00'), 'H:i');
        $horaAtual = date('H:i');


        if ($horaAtual >= $turno_manha_inicio && $horaAtual <= $turno_manha_fim) {
            $turno = 'manha';
        }elseif ($horaAtual >= $turno_tarde_inicio && $horaAtual <= $turno_tarde_fim) {
            $turno = 'tarde';
        }elseif ($horaAtual >= $turno_noite_inicio or $horaAtual < $turno_manha_inicio) {
           $turno = 'noite';
        }else
        {
            $turno = "teste";
        }


        $dados = $request->all();
        $dadosfiltrado = array_filter($dados['vaca']);







        for ($i=0; $i < count($dadosfiltrado) ; $i++) {

            DB::insert("INSERT INTO leites (vaca, turno, lote, leite, data ) values (?, ?, ?, ?, ?)", [$dados['vaca'][$i],$turno,$dados['lote'][$i],$dados['leite'][$i],date('Y-m-d')]);

        }

        return back()->withInput();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,leite $leite)
    {
        $turno_manha_inicio = date_format(date_create('04:00'), 'H:i');
        $turno_manha_fim = date_format(date_create('11:59'), 'H:i');
        $turno_tarde_inicio = date_format(date_create('12:00'), 'H:i');
        $turno_tarde_fim = date_format(date_create('19:59'), 'H:i');
        $turno_noite_inicio = date_format(date_create('20:00'), 'H:i');
        $turno_noite_fim = date_format(date_create('00:00'), 'H:i');
        $horaAtual = date('H:i');

        if ($horaAtual >= $turno_manha_inicio && $horaAtual <= $turno_manha_fim) {
            $turno = 'manha';
        }elseif ($horaAtual >= $turno_tarde_inicio && $horaAtual <= $turno_tarde_fim) {
            $turno = 'tarde';
        }elseif ($horaAtual >= $turno_noite_inicio or $horaAtual < $turno_manha_inicio) {
           $turno = 'noite';
        }else
        {
            $turno = "teste";
        }


        $dados = $request->all();
        $dadosfiltrado = array_filter($dados['vaca']);






        for ($i=0; $i < count($dadosfiltrado) ; $i++) {

            DB::insert("INSERT INTO leites (vaca, turno, leite, data ) values (?, ?, ?, ?)", [$dados['vaca'][$i],$turno,$dados['leite'][$i],date('Y-m-d')]);

        }

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\leite  $leite
     * @return \Illuminate\Http\Response
     */
    public function show(leite $leite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\leite  $leite
     * @return \Illuminate\Http\Response
     */
    public function edit(leite $leite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\leite  $leite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, leite $leite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\leite  $leite
     * @return \Illuminate\Http\Response
     */
    public function destroy(leite $leite)
    {
        //
    }
}
