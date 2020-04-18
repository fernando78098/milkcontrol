@extends('layouts.dashboard')

    @section('content')
           
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Cadastro de Maquina</h6>
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
                                <form action=" {{ action('MaquinaController@store') }} " method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="exampleInputuname_1">Nome da Maquina</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class=" fa fa-automobile"></i></div>
                                            <input type="text" class="form-control" id="exampleInputuname_1" name="nome_da_maquina" placeholder="Maquina">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="exampleInputEmail_1">Marca da Maquina</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class=" fa fa-info"></i></div>
                                            <input type="text" class="form-control" id="exampleInputEmail_1" name="marca_da_maquina" placeholder="Marca">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="exampleInputpwd_1">Tratorista</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                            <input type="text" class="form-control" id="exampleInputpwd_1" name="tratorista" placeholder="Nome Tratorista">
                                        </div>
                                    </div>                                 
                                    <button type="submit" class="btn btn-success mr-10">Submit</button>
                                    <button type="submit" class="btn btn-default"><a href="{{ route('home') }}">Cancel</a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    @endsection