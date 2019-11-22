<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Ctrl Milk</title>


		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
		<link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

		<!-- vector map CSS -->
        <link href="{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

        <script type="text/javascript">
            response.setHeader("Set-Cookie", "HttpOnly;Secure;SameSite=Strict");
        </script>



		<!-- Custom CSS -->
		<link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->

		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="{{ route('login') }}">
						<img class="brand-img mr-10" src="{{ asset('img/logo.png') }}" alt="brand"/>
						<span class="brand-text">Ctrl Milk</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Não tem uma conta?</span>
					<a class="inline-block btn btn-primary  btn-rounded" href="{{ route('register') }}">Cadastrar</a>
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
											<h3 class="text-center txt-dark mb-10">Ctrl Milk</h3>
											<h6 class="text-center nonecase-font txt-grey">Aréa de acesso</h6>
										</div>
										<div class="form-wrap">
											<form method="POST" action="{{ route('login') }}">
												@csrf
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Usuario</label>
													<select class="form-control" name="email">
														<option value="luiz@luiz.com.br">Luiz Fernando</option>
														<option value="rita@rita.com.br">Rita</option>
														<option value="sandro@sandro.com.br">Sandro</option>
														<option value="lucas@lucas.com.br">Lucas</option>
													</select>
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Senha</label>
													<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="{{ route('password.request') }}">Esqueceu a senha ?</a>
														<div class="clearfix"></div>
														<input type="password" class="form-control" name="password" required="" id="exampleInputpwd_2" placeholder="Senha">
												</div>

												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input   type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
														<label for="checkbox_2"> Mantenha-me conectado</label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-primary  btn-rounded">Entrar</button>
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
<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>


	</body>
</html>
