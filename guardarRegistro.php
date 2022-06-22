<?php 
	
	echo("<meta http-equiv='refresh' content='1'>");
	$producto = $_POST["producto"];
	$nombre = $_POST["nombre"];
	$direccion = $_POST["direccion"];
	$num_tarjeta = $_POST["num_tarjeta"];
	$tipo_tarjeta = $_POST["tipo_tarjeta"];
	$exp_tarjeta = $_POST["exp_tarjeta"];
	$nip = $_POST["nip"];
	$num_telefono = $_POST["num_telefono"];
	$correo = $_POST["correo"];



	$servidor = "localhost"; $usuario = "root"; $contrasena = ""; $bd = "busstore";
	$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

	if($conexion->connect_error){ echo "Error al conectar a la Base de datos"; }

	$sql = "INSERT INTO pedido (producto, nombre, direccion, num_tarjeta, tipo_tarjeta, exp_tarjeta, nip, num_telefono, correo) VALUES ('$producto', '$nombre', '$direccion', '$num_tarjeta', '$tipo_tarjeta', '$exp_tarjeta', '$nip', '$num_telefono', '$correo')";

	if($conexion->query($sql) === TRUE){		
		header('Location: ejemplo.html');
	}else{
		echo "Ocurrio un error: " . $conexion->error;
	}

 ?>