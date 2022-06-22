<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo JQUERY Mobile</title>
	<link rel="stylesheet" href="jquerymobile/jquery.mobile-1.4.5.min.css" />

	<link rel="stylesheet" href="jquerymobile/tema2.min.css" />
	<link rel="stylesheet" href="jquerymobile/jquery.mobile.icons.min.css">
	<link rel="stylesheet" href="jquerymobile/themes/colores.css">
	<script src="jquerymobile/jquery-1.11.1.min.js"></script>
	<script src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php
		$servidor = "localhost"; $usuario = "root"; $contrasena = ""; $bd = "busstore";
		$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

		if($conexion->connect_error){ echo "Error al conectar a la Base de datos"; }

		$sql = "SELECT * FROM pedido";
		$datos = $conexion->query($sql);
	?>
	
	<div data-role="page" id="carrito6" data-theme="c">

		<div data-role="header">
			<h1>Bus Store</h1>
		</div>

		<div role="main" class="ui-content">
			<h2 style="text-align: center; color:orange">Carrito</h2><hr>
			<div class="" style="align-items: center">
				<?php
					if ($datos->num_rows > 0) {
				?>
				<table class="table table-hover" style="border: 2px solid gray; border-collapse: separate; align-content: center; text-align: center">
					<thead>
						<tr>
							<th>ID</th>
							<th>Producto</th>
							<th>Nombre</th>
							<th>Direccion</th>
							<th style="background-color: red; color:white; text-shadow: 1px 1px 1px black">Cancelar</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($registro = $datos->fetch_assoc()){
								echo "<tr>";
									echo "<td style='background-color:#A9FFA2'>".$registro["id"]."</td>";
									echo "<td style='background-color:#BDA2FF'>".$registro["producto"]."</td>";
									echo "<td style='background-color:#A9FFA2'>".$registro["nombre"]."</td>";
									echo "<td style='background-color:#BDA2FF'>".$registro["direccion"]."</td>";
									echo "<td style='background-color:#dfdfdf'><a class='btn btn-danger' href='eliminarCarrito.php?id=".$registro["id"]."'>Cancelar pedido</a> ";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
				<?php } else { echo "<h1>No tienes productos en espera</h1>"; $conexion->close(); } ?>
			</div>

		</div>

		<div data-role="footer" data-position="fixed">
			<div data-role="navbar">
				<ul>
					<li><a href="ejemplo.html" data-icon="grid">Inicio</a></li>
					<li><a href="ejemplo.html#productos" data-icon="star">Productos</a></li>
					<li><a href="#" data-icon="gear" class="ui-btn-active">Carrito</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>

	


</body>
</html>