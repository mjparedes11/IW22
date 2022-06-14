<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mi primera app</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
	<header class="cabeceraPrincipal">
		<h1>Vilonaco Food</h1>
	</header>
	<nav class="menuPrincipal">
		<a href="../">Inicio</a>
		<a href="">Empresa</a>
		<a href="internas/contactos.php">Registro</a>
		<a href="">Listado</a>
		<a href="login.php">Login</a>
	</nav>
	
	<main>
		<div class="cabeceraPrincipal"></div>
		<h2 class="h2listado">Lista de Usuarios</h2>
		<?php
			include("../dll/config.php");
			include("../dll/class_mysqli.php");
			
			$miconexion = new clase_mysqli;
			$miconexion -> conectar(DBHOST, DBUSER, DBPASS, DBNAME);
			$miconexion -> consulta("select id 'CODIGO', nombre NOMBRE, apellido APELLIDO, correo CORREO from usuarios");
			$miconexion -> verconsulta();
			?>
	</main>
	<footer class="piePagina"><h6>Derechos Reservados 2022</h6></footer>
</body>
</html>