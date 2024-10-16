<?php 
include "..//model/conexion.php"; /* Conexión a la base de datos */

$queryAcudientes=$conn->query("SELECT * FROM acudientes order by Id");

if(isset($_POST['insertar'])) /*Si se presiona el botón ingresar sucede:  */

{

/* Variables acudientes */

$AcuNombre=$_POST['AcuNombre'];
$AcuApellido=$_POST['AcuApellido'];
$AcuNumIdentificacion=$_POST['AcuNumIdentificacion'];
$AcuDireccion=$_POST['AcuDireccion'];
$AcuTelefono=$_POST['AcuTelefono'];
$AcuParentesco=$_POST['AcuParentesco'];


/* Se insertan los datos a la tabla de acudientes */
$insertarAcu=$conn->query("INSERT INTO acudientes VALUES ('Id','$AcuNombre', '$AcuApellido', '$AcuNumIdentificacion', '$AcuDireccion', '$AcuTelefono', '$AcuParentesco')");
if ($insertarAcu==true)
{
    echo '<script type="text/javascript"> alert("Registro exitoso")</script>';
} else{
    echo '<script type="text/javascript"> alert("Registro fallido")</script>';
}
}
