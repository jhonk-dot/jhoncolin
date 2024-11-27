
<?php

$nombre= $_POST['nombre'];
$Edad= $_POST['Edad'];
$Fecha=$_POST['Fecha'];
$VIP= $_POST['VIP'];
$Provincia= $_POST['Provincia'];
$Direccion= $_POST['Direccion'];

include 'conexion2.php';
$consulta = $conexion2 -> query("INSERT INTO compania(nombre,Edad,Fecha,VIP,Provincia,Direccion) VALUES ('$_REQUEST[nombre]','$_REQUEST[Edad]','$_REQUEST[Fecha]','$_REQUEST[VIP]','$_REQUEST[Provincia]','$_REQUEST[Direccion]')");

echo "correcto";


?>

<html>
	<head>
		<title>expreso s</title>
		<meta charset="UTF-8" />
	</head>
	<body>
   <br>
   <a href="opc.html" style="font-size: 25px; color: green;">Ir al menu de opciones</a>



<br>

	
        <a href="logout.php">Cerrar sesión</a>
	</body>
</html>