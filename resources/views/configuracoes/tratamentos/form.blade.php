@extends('layouts.dashboard')

    @section('content')
            <!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
                                        <h6 class="panel-title txt-dark">Cadastro de Tratamentos</h6>
									</div>
									<div class="clearfix">
                                        <!-- caso tenha uma variavel chamado aviso-->
										@if (isset($aviso))
										    <!--mostra esse aviso-->
										    <div class="alert alert-success alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												 {{ $aviso }}
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
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
                                            <form action="{{ action('TratamentoController@store') }}" method="POST">
                                                @csrf
												<div class="form-group">
													<label class="control-label mb-10 text-left">Nome Do Tratamento</label>
													<input type="text" class="form-control" name="nome" value="" required>
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Nome Do Medicamento</label>
													<input type="text" class="form-control" name="medicamento" value=""  required>
												</div>
												<div class="form-group mt-30 mb-30">
													<label class="control-label mb-10 text-left">Periodo Minimo De Tratamento</label>
													<select class="form-control" name="min">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
                                                </div>
                                                <div class="form-group mt-30 mb-30">
													<label class="control-label mb-10 text-left">Periodo maximo De Tratamento</label>
													<select class="form-control" name="max">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
													</select>
												</div>
												<div class="form-group mt-30 mb-30">
													<label class="control-label mb-10 text-left">Periodo De Carencia</label>
													<select class="form-control" name="carencia">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
													</select>
                                                </div>

												<div class="form-group mb-0">
													<button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Salvar</span></button>
												</div>

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

    @endsection
