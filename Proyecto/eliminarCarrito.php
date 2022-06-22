<?php 

	$servidor = "localhost"; $usuario = "root"; $contrasena = ""; $bd = "busstore";
	$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

	if($conexion->connect_error){ echo "Error al conectar a la Base de datos"; }

	$id = $_GET["id"];

	$sql = "DELETE FROM pedido WHERE id=$id";

	if($conexion->query($sql) === TRUE){
		header('Location: consultarCarrito.php');
	}else{
		echo "Ocurrio un error: " . $conexion->error;
	}

 ?>