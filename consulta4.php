<html>
	<html>
	<head>
		<title>Ejercicio 70</title>
		<meta charset="UTF-8" />
		<style>
			th{
				border : 5px solid gray;
				background : blue;
                text-shadow: black;  
                width: 10%;
				 }

			
	    </style>
	</head>
	<body>
	<?php
		include 'conexion2.php'; 
		$consulta = $conexion2 -> query("SELECT nombre, VIP FROM compania WHERE VIP = 'si'") or die ("Ha fallado la conexión");
			while ( $registro = $consulta -> fetch_assoc() ) {
				echo '<table>'.
				"
                <th>VIP</th>
                <th>nombre</th>
				 
				 ".

				"<tr>".
				
				"<td>".$registro['VIP']."</td>".
                "<td>".$registro['nombre']."</td>".
				
			    "</tr>".
			    "</table>";
               }
			    $conexion2=null;
	?>

	<br>
    	
	</body>
	</html>