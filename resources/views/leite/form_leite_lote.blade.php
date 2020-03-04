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
                    @if($errors->any())
                    @foreach($errors->all() as $error)      {{ $error }} @endforeach 
                @elseif(session()->has('success'))
                      {{ session('success') }}
                @endif
            <!-- general form elements -->
            <div class="box box-primary">
                <form action=" {{ action('LeiteController@store') }} " method="POST" >
                    @csrf
                    <div class="box-header with-border">
                        <h3 class="box-title">PESAGEM LEITE</h3>
                    </div>
                        <div class="box-body">
                            <div class="form-group col-md-4 col-xs-4">
                                <label>VACA</label>
                                <input type="number" class="form-control"  placeholder="Vaca 1" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 2" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 3" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 4" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 5" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 6" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 7" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 8" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 9" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 10" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 11" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 12" name="vaca[]">

                            </div>
                            <div class="form-group col-md-4 col-xs-4">
                                <label >LEITE</label>
                                <input type="number" class="form-control"  placeholder="LEITE 1" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 2" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 3" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 4" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 5" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 6" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 7" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 8" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 9" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 10" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 11" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 12" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">


                            </div>
                            <div class="form-group col-md-4 col-xs-4">
                                <label >Lote</label>
                                <input type="number" class="form-control"  placeholder="Lote 1" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 2" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 3" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 4" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 5" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 6" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 7" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 8" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 9" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 10" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 11" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 12" name="lote[]">

                            </div>
                        </div>


                        <div class="box-body">
                            <div class="form-group col-md-4 col-xs-4">
                                <label>VACA</label>
                                <input type="number" class="form-control"  placeholder="Vaca 1" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="vaca 2" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 3" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 4" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 5" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 6" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 7" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 8" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 9" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 10" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 11" name="vaca[]">
                                <input type="number" class="form-control"  placeholder="Vaca 12" name="vaca[]">

                            </div>
                            <div class="form-group col-md-4 col-xs-4">
                                <label >LEITE</label>
                                <input type="number" class="form-control"  placeholder="LEITE 1" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 2" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 3" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 4" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 5" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 6" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 7" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 8" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 9" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 10" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 11" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                <input type="number" class="form-control"  placeholder="LEITE 12" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">

                            </div>
                            <div class="form-group col-md-4 col-xs-4">
                                <label >Lote</label>
                                <input type="number" class="form-control"  placeholder="Lote 1" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 2" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 3" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 4" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 5" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 6" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 7" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 8" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 9" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 10" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 11" name="lote[]">
                                <input type="number" class="form-control"  placeholder="Lote 12" name="lote[]">

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
