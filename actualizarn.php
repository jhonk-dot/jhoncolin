<html>
	<head>
		<title>Ejercicio  - Update</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
			include 'conexion2.php';
			$consulta = $conexion2 -> query ("UPDATE compania SET nombre = 'alejandro' WHERE nombre = 'VALEN'") or die ("Ha fallado la conexión");
			$conexion = null;
			echo 'El registro se ha actualizado correctamente';
		?>
	</body>
</html>