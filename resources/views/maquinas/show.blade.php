@extends('layouts.dashboard')

    @section('content')

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
      <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ficha de Cadastro </h3>
            </div>          
            <!-- /.box-header -->
            <!-- form start -->            
            <div class="box-body">                
                <div class="form-group">
                    <label class="control-label mb-10" for="exampleInputuname_1">Nome da Maquina</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class=" fa fa-automobile"></i></div>
                        <input type="text" class="form-control" id="exampleInputuname_1" name="nome_da_maquina" value="{{ $maquina->nome_da_maquina ?? null }}" readonly="readonly" placeholder="Nome do Maquina" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label mb-10" for="exampleInputEmail_1">Marca da Maquina</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class=" fa fa-info"></i></div>
                        <input type="text" class="form-control" id="exampleInputEmail_1" name="marca_da_maquina" value="{{ $maquina->marca_da_maquina ?? null }}" readonly="readonly" placeholder="Marca" required>
                    </div>
                </div>                
                <div class="form-group">
                    <label class="control-label mb-10" for="exampleInputpwd_1">Tratorista</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <input type="text" class="form-control" id="exampleInputpwd_1" name="tratorista" value=" {{ $maquina->tratorista ?? null }} " readonly="readonly" placeholder="Nome Tratorista" required>
                    </div>
                </div>                
                  
            </div>
              <!-- /.box-body -->

              <div class="box-footer">                
                <a href=" {{ url("/maquinas/$maquina->id/edit" )}}"><button type="" class="btn btn-primary">Editar</button></a>              
                <a><form action="{{ action('MaquinaController@destroy', $maquina->id) }}" method="POST" class="btn btn-primary" style="padding:0px">
                  {{method_field('DELETE')}}
                  @csrf
                    <input type="hidden" name="id" value="{{$maquina->id}}" />
                    <button type="submit" class="btn btn-primary">Excluir</button>
                  </form></a>


                              
              </div>            
          </div>
          <!-- /.box -->
      </div>

    @endsection