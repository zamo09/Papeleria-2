<?php 
session_start();
if (isset($_SESSION["user"])){
	header("location:modulos/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Papeleria CBA</title>
	<link rel="icon" type="image/png" href="img/logo.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center align-items-center alerta_error">
			<span id="result"></span>
		</div>
	</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<div class="login100-form validate-form">
					<span class="p-b-70 titulo1">
						Papeleria CBA
					</span>
					<span class="login100-form-avatar">
						<img src="img/14-512.png" alt="AVATAR">
					</span>
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Introduce el usuario">
						<input class="input100" type="text" name="user" id="user">
						<span class="focus-input100" data-placeholder="Usuario"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-50" data-validate="Ingresa tu contraseña">
						<input class="input100" type="password" name="pass" id="pass">
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login" id="login"><i class="fa fa-check-circle"></i>&nbsp Continuar</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
</body>
<script>
		$(document).ready(function(){
			$('#login').click(function(){
				var user = $('#user').val();
				var pass = $('#pass').val();
				if ($.trim(user).length > 0 && $.trim(pass).length > 0){
					$.ajax({
						url: "php/select/validar_login.php",
						method: "POST",
						data: {user:user, pass:pass},
						cache: "false",
						beforeSend:function(){
							$('#login').val("Validando...");
						},
						success:function(data){
							$('#login').val("Continuar");
							if (data=="1"){
								$(location).attr('href','modulos/');
							}else{
								$('#result').html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> Usuario o contraseña incorrectas.</div>");
							}
						}
					});
				}else{
					$('#result').html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> Ingresa un usuario o contraseña</div>");
				};
			});
		});
	</script>
</html>