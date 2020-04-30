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
                                    <form method="post" action=" {{action('ItensDaOsController@update' , $id)}} ">
                                    <input name="_method" type="hidden" value="PATCH">
				                @else
					                <!-- se nao manda para essa rota de cadastro-->
					                <form action=" {{ action('ItensDaOsController@store') }} " method="POST" >

				                @endif 
                                
                                    @csrf
                                    
                                    <div class="form-group col-md-12">
                                        <label class="control-label mb-10" for="exampleInputuname_1">Numero da O.S</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class=" fa fa-info"></i></div>
                                            <input type="text" class="form-control" id="exampleInputuname_1" name="ordem_de_servico_id" value="{{ $objeto_os->id ?? null }}" readonly="readonly" placeholder="Descrição">
                                        </div>
                                    </div>                                   
                                    <div class="form-group col-md-12">
                                        <label class="control-label mb-10" for="exampleInputuname_1">Descrição</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class=" fa fa-info"></i></div>
                                            <input type="text" class="form-control" id="exampleInputuname_1" name="descricao" value="{{ $editar->descricao ?? null }}" placeholder="Descrição">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label mb-10" for="exampleInputuname_1">quantidade</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class=" fa fa-calendar-o"></i></div>
                                            <input type="text" class="form-control" id="exampleInputuname_1" name="quantidade" value="{{ $editar->quantidade ?? null }}" placeholder="quantidade">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label mb-10" for="exampleInputuname_1">Valor Unitario</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class=" fa fa-calendar-o"></i></div>
                                            <input type="text" class="form-control" id="exampleInputuname_1" name="valor_unitario" value="{{ $editar->valor_unitario ?? null }}" placeholder="Valor Unitario">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="control-label mb-10" for="exampleInputuname_1">Valor Total</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class=" fa fa-calendar-o"></i></div>
                                            <input type="text" class="form-control" id="exampleInputuname_1" name="valor_total" value="{{ $editar->valor_total ?? null }}" placeholder="Valor total">
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