@extends('layouts.dashboard')

@section('content')

   <!-- Row -->
   <div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Relatorio de Pesagem</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form class="form-inline" action="{{ route('relatorio') }}" method="POST">
                        @csrf
											   <div class="form-group mr-15">
													<label class="control-label mr-10" for="">data:</label>
													<input type="date" class="form-control"  name="data">
												</div>
												<div class="form-group mr-15">
													<label class="control-label mr-10" for="pwd_inline">Turno:</label>
                          
                          <select class="form-control"  name="turno">
														<option selected="selected">manha</option>
														<option>tarde</option>
														<option>noite</option>
													  </select>
												</div>
												
												<button type="button" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Procurar</span></button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>	
					<!-- /Row -->

@endsection
