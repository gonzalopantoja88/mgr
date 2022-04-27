<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 shadow-login">
				<form class="login100-form validate-form" action="{{route('login-post')}}" method="post">
					@csrf
					<span class="login100-form-title p-b-7">
						<i class="zmdi zmdi-account-circle text-orange fs-100"></i>
					</span>
					<span class="login100-form-title p-b-26 text-orange">	
						MGR
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Digitar correo valido: '@'">
						<input class="input100" type="text" name="email" autofocus>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digitar contraseña">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>