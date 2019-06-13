<?php 
	session_start();
	require "../conexion/conexion.php";
	if (isset($_POST["nombre"]) && isset($_POST["direccion"])){
		$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
		$direccion = mysqli_real_escape_string($con, $_POST["direccion"]);
		$id = $_SESSION['id_usuario'];
		$sql =$con->query("INSERT INTO papeleria (nombre,direccion,activo,id_usuario) VALUES ('$nombre','$direccion',1,'$id');");
		if ($sql){
			echo "1";
		}else{
			echo "error";
		}
	}else{
		echo "error";
	}
?>