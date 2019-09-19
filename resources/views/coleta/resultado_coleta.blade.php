@extends('layouts.dashboard')

    @section('content')

        <!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Relatorio Coleta Leite</h5>
					</div>

				</div>
				<!-- /Title -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>Vaca</th>
														<th>A.E</th>
														<th>A.D</th>
														<th>P.E</th>
                                                        <th>P.D</th>
                                                        <th>Resultado</th>
													</tr>
												</thead>

												<tbody>
													@foreach ($relatorio as $item)

                                                                        <tr>
                                                                            <td>{{$item->micro_id }}</td>
                                                                            <td>{{$item->coleta_ae }}</td>
                                                                            <td>{{$item->coleta_ad }}</td>
                                                                            <td>{{$item->coleta_pe }}</td>
                                                                            <td>{{$item->coleta_pd }}</td>
                                                                            <td></td>


                                                                        </tr>

                                                                    @endforeach

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

    @endsection
