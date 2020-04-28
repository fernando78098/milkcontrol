@extends('layouts.dashboard')

    @section('content')
           
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Abertura de O.S</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- seção de mostrar avisos-->
            <div class="col-md-12">
                @if (isset($mensagem))
                    <!--mostra esse aviso-->
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ $mensagem }}
                    </div>
                @else
                    <!-- se nao verifica se tem alguma varriavel chamado errors-->
                    @if (isset($errors) && count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            @foreach( $errors->all() as $error )
                                <p> {{ $error }} </p>
                            @endforeach
                        </div>
                    @endif
                @endif
            </div>            
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-wrap">

                                @if (isset($editar))
				                    <!--se tiver manda para essa rota de edição-->
                                    <form method="post" action=" {{action('OrdemDeServicoController@update' , $id)}} ">
                                    <input name="_method" type="hidden" value="PATCH">
				                @else
					                <!-- se nao manda para essa rota de cadastro-->
					                <form action=" {{ action('OrdemDeServicoController@store') }} " method="POST" >

				                @endif 
                                
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label mb-10">Maquina</label>
                                        <select class="form-control" name="maquina_id">
                                            @foreach ($objeto_maquina as $item)
                                                <option value=" {{ $item->id }} " @if( isset($editar) && $editar->nome_da_maquina == "$item->nome_da_maquina") selected @endif> {{ $item->nome_da_maquina }} </option>                                                
                                            @endforeach                                                                                 
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label mb-10" for="exampleInputuname_1">Data Abertura</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class=" fa fa-calendar-o"></i></div>
                                            <input type="date" class="form-control" id="exampleInputuname_1" name="data_de_abertura" value="{{ $editar->data_de_abertura ?? null }}" placeholder="Nome do Maquina">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label mb-10" for="exampleInputuname_1">Data Fechamento</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class=" fa fa-calendar-o"></i></div>
                                            <input type="date" class="form-control" id="exampleInputuname_1" name="data_de_fechamento" value="{{ $editar->data_de_fechamento ?? null }}" placeholder="Nome do Maquina">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="exampleInputEmail_1">Descrição do problema</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class=" fa fa-info"></i></div>
                                            <textarea  class="form-control" id="exampleInputEmail_1" rows="4" name="descricao" value="{{ $editar->descricao ?? null }}" placeholder="Digite aqui o problema" required></textarea>
                                        </div>
                                    </div>                
                                                                    
                                    <button type="submit" class="btn btn-success mr-10">Salvar</button>
                                    <button type="submit" class="btn btn-default"><a href="{{ route('home') }}">Cancel</a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    @endsection