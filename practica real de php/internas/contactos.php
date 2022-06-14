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
		<a href="listado.php">Listado</a>
		<a href="">Login</a>
	</nav>
	
	<main>
		<h2 class="h2Home">Contactos</h2>
		<form method="post" action="procesar.php">
			<div class="grupoInput">
				<label for="nombres">Nombres</label>
				<input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre">
			</div>
			<div class="grupoInput">
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido">
			</div>
			<div class="grupoInput">
				<label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" placeholder="Ingrese su correo">
			</div>
			<div class="grupoInput">
				<label for="clave">Clave</label>
				<input type="password" name="clave" id="clave" placeholder="Ingrese su clave">
			</div>
			<div class="grupoInput">
				<label for="tipoUser">Tipo de usuario</label>
				<select id="tipoUser" name="tipoUser">
					<option>--</option>
					<option value="1">Administrador</option>
					<option value="2">Visitante</option>
				</select>
			</div>
			<div class="grupoInput">
			 <button type="submit" value="Procesar">Procesar</button>
			</div>
		</form>
	</main>
	<footer class="piePagina"><h6>Derechos Reservados 2022</h6></footer>
</body>
</html>