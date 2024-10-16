<!-- Conexión a la base de datos jardininfantil -->
<?php

	$conn =mysqli_connect("localhost","root","","jardininfantil");

	if (!$conn) {
		echo "Conexion fallida!";
	}
?>