<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">	
	<button class="navbar-toggler" type="button" data-toggle="collapse" 
	data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
	aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link" href="../modulos/">Inicio <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Pedido</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
			data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Altas
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<a class="dropdown-item" id="addpapeleria">Agregar Papeleria</a>
			<a class="dropdown-item" id="listpapelerias">Lista de Papelerias</a>
			<a class="dropdown-item" href="#">Agregar Producto</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="#">Agregar Usuario</a>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link disabled" href="#">Disabled</a>
	</li>
</ul>
</div>
<!-- LOGO CENTRAL DE LA PAPELERIA  -->
<a class="navbar-brand justify-content-center" href="#">
	<img src="../img/papeleria.png" width="40" height="40" class="d-inline-block align-top" alt="">
	Papeleria CBA
</a>
<!-- PARTE DEL USUARIO DEL LADO IZQUIERDO -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-user"></i> <?php echo $_SESSION["user"]; ?>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="#">Cambiar Nombre</a>
				<a class="dropdown-item" href="#">Cambiar Contraseña</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="../php/conexion/cerrar_session.php"><i class="fa fa-times-circle"></i> Cerrar Sesion</a>
			</div>
		</li>
	</ul>
</div>
</nav>