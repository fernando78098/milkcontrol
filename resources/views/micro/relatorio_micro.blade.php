@extends('layouts.dashboard')

    @section('content')

    
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Export</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>Export</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
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
														<th>Editar</th>
														<th>Excluir</th>
														
													</tr>
												</thead>
												
												<tbody>
                                                    
                                                    @foreach ($relatorio as $item)

                                                        <tr>
                                                        <td>{{$item->vaca }}</td>
                                                            <td>
                                                                <a href=" {{ url("/micro/$item->id/edit" )}}">
                                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                                </a>
                                                            </td>
                                                            
                                                            <td>
                                                                <form method="post" action="/micro/{{$item->id}}">
                                                                    {{method_field('DELETE')}}
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                                 </form>
                                                            </td>
                                                            


                                                        </tr>                       

                                                    @endforeach


													
													
												</tbody>
											
												<tfoot>
													<tr>
														<th>vaca</th>
														<th>Editar</th>
														<th>Excluir</th>														
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
                <!-- Data table JavaScript -->
	
			
    @endsection