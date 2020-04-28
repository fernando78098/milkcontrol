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
                                            <th>N°</th>
                                            <th>Maquina</th>
                                            <th>Data Abertura</th>                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                            @foreach ($dados as $item)
                                                <tr>
                                                    <td><a href=" {{ url("/OS/$item->id") }} "> {{$item->id }}</a></td>
                                                    <td><a href=" {{ url("/OS/$item->id") }} "> {{$item->maquina->nome_da_maquina }}</a></td>
                                                    <td><a href=" {{ url("/OS/$item->id") }} "> {{$item->data_de_abertura }} </a></td>
                                                </tr>                                                

                                            @endforeach
                                           
                                        
                                    </tbody>
                                
                                    <tfoot>
                                        <tr>
                                            <th>N°</th>
                                            <th>Maquina</th>
                                            <th>Data Abertura</th>                                            
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