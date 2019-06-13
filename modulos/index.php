<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Añadir Papeleria</title>
	<link rel="icon" type="image/png" href="../img/logo.ico"/>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/formularios.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-5.9.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
	<script type="text/javascript" src="../vendor/sweetalert/sweetalert.min.js"></script>
</head>
<body>
	<?php 
	session_start();
	if(!isset($_SESSION["user"])){
		print '<script> 
		swal({
			title: "¡¡QUE HACES!!", 
			text: "Necesitas iniciar Sesion primero", 
			icon: "error",
			button: false,
			});
			</script>';
			print '<script>setTimeout ("window.location=\'../\';", 3000);</script>';
		}else{
			//incluimos la barra de navegacion 
			include "nav_bar.php";
			?>
			<!-- PARTE DEL CODIGO AL VALIDAR EL USUARIO -->		
			<div id="wrapper" class="container h-100" >
				<div id="page-content-wrapper" class="row h-100 justify-content-center align-items-center" style=" margin-left: 7px;">
					<div class="container" id="Contenedor">
						<div id="Contenedor2" class="animated login zoomIn">
								<div class="col-md-12">
									<h1 class="text-center titulos">Bienvenidos</h1>
									<h2 class="text-center titulos2">Al panel de administrador</h2>
								</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		?>
		<!-- ARCHIVOS JS NECESARIOS PARA TRABAJAR -->
		<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>
		<script src="../js/mdb.min.js"></script>
		<script src="../vendor/animsition/js/animsition.min.js"></script>
		<script src="../vendor/bootstrap/js/popper.js"></script>
		<script src="../vendor/select2/select2.min.js"></script>
		<script src="../vendor/daterangepicker/moment.min.js"></script>
		<script src="../vendor/countdowntime/countdowntime.js"></script>
		<script src="../js/datatables.min.js"></script>
		<script src="../js/main.js"></script>
		<script>
			function salida(){
				$("#Contenedor").load('bienvenida.php');
			};



			function agregarpapeleria(){
				var nombre = $('#nombre').val();
				var direccion = $('#direccion').val();
				if ($.trim(nombre).length > 0 && $.trim(direccion).length > 0){
					$.ajax({
						url: "../php/insert/insert_papeleria.php",
						method: "POST",
						data: {nombre:nombre, direccion:direccion},
						cache: "false",
						beforeSend:function(){
							$('#guardarpapeleria').val("Guardando...");
						},
						success:function(data){
							$('#guardarpapeleria').val("Guardar");
							if (data=="1"){
								swal("Perfecto!!", ("Ahora la papeleria " + nombre + " ya esta en el sistema" ), "success");
								document.getElementById("nombre").value = "";
								document.getElementById("direccion").value = "";
							}else{
								swal("Tenemos un problema", "Usuario o contraseña incorrecta" , "error");
							}
						}
					});
				}else{
					swal("No me engañes", "Por favor ingresa un usuario y una contraseña" , "error");
				};
			};	

			//Llamado de formularios
			$("#addpapeleria").click(function(event) {
				$("#Contenedor").load('add_papeleria.php');
			});		

			$("#listpapelerias").click(function(event){
				$("#Contenedor").load('list_papelerias.php');
			});
		</script>
	</body>
	</html>