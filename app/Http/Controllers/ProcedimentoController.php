<?php

namespace App\Http\Controllers;

use App\procedimento;
use App\tratamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $total_cadastradas = array_filter($request->input('vaca'));
        //*$cura = DB::table('tratamentos')->select('nome','medicamento','min','max','carencia')->where('nome', 'Tratamento 1')->get();
        
        
        
        
       
         
        $trat = \App\Tratamento::where('nome','Tratamento 1')->get();
        $tratamento = $trat[0];
        $data = date('Y-m-d');


        for ($i=0; $i < 12 ; $i++) 
        { 
            if($request['vaca'][$i]=="")
            {
                
            }
            else
            {
                $vaca = DB::table('procedimentos')->select('vaca','data')->where('vaca', $request['vaca'][$i])->get();
                if (empty($vaca[0])) 
                {
                    $vaca = $request['vaca'][$i] ;    
                             

                    /*for ($b=0; $b < 3 ; $i++) 
                    { 
                        DB::insert("INSERT INTO procedimentos (vaca,lote,data,massa,tratamento_id) values (?, ?, ?, ?, ?)", [$vaca,"",$data++, $request['massa'][$i],$tratamento->nome]);
                    }    */         

                    
                
                }

            }
            
            

            
            


        };
        
        return view('tratamento-mastite.form1');


        
        
        


        

        
        
    }
}
