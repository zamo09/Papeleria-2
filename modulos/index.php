<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
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
			?>
	<a href="../php/conexion/cerrar_session.php">Cerrar session</a>
	<?php
}
?>
</body>
</html>