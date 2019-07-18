<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Ctrl Milk</title>


	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
	<link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

	<!-- Data table CSS -->
	<link href=" {{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }} " rel="stylesheet" type="text/css"/>



	<!-- Custom CSS -->
	<link href=" {{ asset('dist/css/style.css') }} " rel="stylesheet" type="text/css">
</head>

<body>




        <!-- Main content -->
    <section class="content">
        <center><div class="row">
            <!-- left column -->
            <div class="col-md-6 col-xs-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <form action=" {{ route('gravaleitelote') }} " method="POST" >
                    @csrf
                    <div class="box-header with-border">
                        <h3 class="box-title">PESAGEM LEITE</h3>
                    </div>
                        <div class="box-body">
                            <div class="form-group col-md-4 col-xs-4">
                                <label>VACA</label>
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">

                            </div>
                            <div class="form-group col-md-4 col-xs-4">
                                <label >LEITE</label>
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">


                            </div>
                            <div class="form-group col-md-4 col-xs-4">
                                <label >Lote</label>
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">

                            </div>
                        </div>


                        <div class="box-body">
                            <div class="form-group col-md-4 col-xs-4">
                                <label>VACA</label>
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca" name="vaca[]">

                            </div>
                            <div class="form-group col-md-4 col-xs-4">
                                <label >LEITE</label>
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">

                            </div>
                            <div class="form-group col-md-4 col-xs-4">
                                <label >Lote</label>
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote" name="lote[]">

                            </div>
                        </div>





                        <div class="box-footer">

                            <button type="submit" class="btn btn-primary">SALVAR</button>

                        </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
      <!-- /.row -->
    </section>





		</div>
        <!-- /Main Content -->


    <!-- /#wrapper -->

	<!-- JavaScript -->

    <!-- jQuery -->
    <script src=" {{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }} "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=" {{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }} "></script>

	<!-- Data table JavaScript -->
	<script src=" {{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }} "></script>

	<!-- Slimscroll JavaScript -->
	<script src=" {{ asset('dist/js/jquery.slimscroll.js') }} "></script>

	<!-- simpleWeather JavaScript -->
	<script src=" {{ asset('vendors/bower_components/moment/min/moment.min.js') }} "></script>
	<script src=" {{ asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }} "></script>
	<script src=" {{ asset('dist/js/simpleweather-data.js') }} "></script>

	<!-- Progressbar Animation JavaScript -->
	<script src=" {{ asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }} "></script>
	<script src=" {{ asset('vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }} "></script>

	<!-- Fancy Dropdown JS -->
	<script src=" {{ asset('dist/js/dropdown-bootstrap-extended.js') }} "></script>

	<!-- Sparkline JavaScript -->
	<script src=" {{ asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }} "></script>

	<!-- Owl JavaScript -->
	<script src=" {{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }} "></script>

	<!-- Toast JavaScript -->
	<script src=" {{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }} "></script>

	<!-- EChartJS JavaScript -->
	<script src=" {{ asset('vendors/bower_components/echarts/dist/echarts-en.min.js') }} "></script>
	<script src=" {{ asset('vendors/echarts-liquidfill.min.js') }} "></script>

	<!-- Switchery JavaScript -->
	<script src=" {{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }} "></script>

	<!-- Init JavaScript -->
	<script src=" {{ asset('dist/js/init.js') }} "></script>
	<script src=" {{ asset('dist/js/dashboard-data.js') }} "></script>
</body>

</html>
