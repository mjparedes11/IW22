<?php
	@session_start();
	if (@$_SESSION['autentificado'] && $_SESSION['nombres'] && $_SESSION['roll']) {
		include ("../dll/config.php");
		include ("../dll/class_mysqli.php");
		$miconexion = new clase_mysqli;
		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
	}else{
		echo "<script>location.href='../'</script>";
	}
?>