@extends('layouts.dashboard')

    @section('content')
        
        <!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view"><center><h1>Ordem De Serviço</h1></center>
							<div class="panel-heading">
								
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_2" class="table table-hover table-bordered display mb-30"  >
												<thead>
													<tr>
														
                                                        <th colspan="1">Nome do equipamento: {{ $dados->maquina->nome_da_maquina }} </th>
                                                        <th colspan="2" >Desc: {{ $dados->descricao }} </th>                                                        
                                                        <th rowspan="2" > Nª: {{ $dados->id }} </th>
													</tr>
													<tr>
                                                        <th colspan="1">Tratorista: {{ $dados->maquina->tratorista }} </th>
														<th colspan="1">Data Abertura : {{date('d/m/Y', strtotime($dados->data_de_abertura)) }} </th>
														<th colspan="1" >Data fechamento :@if (isset($dados->data_de_fechamento)){{ date('d/m/Y', strtotime($dados->data_de_fechamento)) }}@endif</th>																												
                                                    </tr>
                                                </thead>
                                                <thead>
                                                    <tr>
                                                        <th>Descrição</th>
                                                        <th>Quantidade</th>
                                                        <th>Valor Unitario</th>
                                                        <th>Valor total</th>
                                                        
                                                    </tr>
                                                </thead>												
												
												<tbody>
													<tr>
														<td>troca de oleo</td>
														<td>1</td>
														<td>$100,00</td>
														<td>$100,00</td>														
													</tr>
													
												</tbody>
											
												<tfoot>
													<tr>
														<th>descrição</th>
                                                        <th>quantidade</th>
                                                        <th>valor Unitario</th>
                                                        <th>Valor total</th>
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
				<!-- /Row -->
    @endsection
