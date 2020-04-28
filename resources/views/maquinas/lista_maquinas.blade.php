@extends('layouts.dashboard')

    @section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Lista Maquinas cadastradas</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="datable_1" class="table table-hover display  pb-30" >
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Marca</th>
                                            <th>Responsavel</th>                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                            @foreach ($dados as $item)
                                                <tr>
                                                    <td><a href=" {{ url("/maquinas/$item->id") }} "> {{$item->nome_da_maquina }}</a></td>
                                                    <td><a href=" {{ url("/maquinas/$item->id") }} "> {{$item->marca_da_maquina }}</a></td>
                                                    <td><a href=" {{ url("/maquinas/$item->id") }} "> {{$item->tratorista }} </a></td>
                                                </tr>                                                

                                            @endforeach
                                           
                                        
                                    </tbody>
                                
                                    <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Marca</th>
                                            <th>Responsavel</th>                                            
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </div>

    @endsection