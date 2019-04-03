<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Ctrl Milk</title>


		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href=" {{ asset('img/favicon.ico') }} " type="image/x-icon">

		<!-- vector map CSS -->
		<link href=" {{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }} " rel="stylesheet" type="text/css"/>



		<!-- Custom CSS -->
		<link href=" {{ asset('dist/css/style.css') }} " rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->

		<div class="wrapper box-layout pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="{{ route('login') }}">
                    <img class="brand-img mr-10" src="{{ asset('img/logo.png') }}" alt="brand"/>
						<span class="brand-text">Ctrl Milk</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Já tem um registro ?</span>
					<a class="inline-block btn btn-primary btn-rounded" href="{{ route('login') }}">Fazer Login</a>
				</div>
				<div class="clearfix"></div>
			</header>

			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Cadastro de usuarios</h3>
											<h6 class="text-center nonecase-font txt-grey">Dados do usuario</h6>
										</div>
										<div class="form-wrap">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputName_1">Nome</label>
													<input type="text" class="form-control" required="" name="name" id="name" placeholder="Nome de usuario">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email</label>
													<input type="email" class="form-control" required="" name="email" id="exampleInputEmail_2" placeholder="Endereço de email">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Senha</label>
													<input type="password" class="form-control" required="" name="password" id="exampleInputpwd_2" placeholder="senha">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_3">Confirmar senha</label>
													<input type="password" class="form-control" required="" name="password_confirmation" id="exampleInputpwd_3" placeholder="Confirmar senha">
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-primary btn-rounded">Registrar</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
				</div>

			</div>
			<!-- /Main Content -->

		</div>
		<!-- /#wrapper -->

		<!-- JavaScript -->

		<!-- jQuery -->
		<script src=" {{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }} "></script>

		<!-- Bootstrap Core JavaScript -->
		<script src=" {{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }} "></script>
		<script src=" {{ asset('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }} "></script>

		<!-- Slimscroll JavaScript -->
		<script src=" {{ asset('dist/js/jquery.slimscroll.js') }} "></script>

		<!-- Init JavaScript -->
		<script src=" {{ asset('dist/js/init.js') }} "></script>
	</body>
</html>
