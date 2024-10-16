<?php 
include "..//model/conexion.php"; /* Conexión a la base de datos */

if(isset($_POST['ingresar'])) /*Si se presiona el botón ingresar sucede:  */
    {
    
    
/* Variables estudiantes */

$EstNombre=$_POST['EstNombre'];
$EstApellido=$_POST['EstApellido'];
$EstEdad=$_POST['EstEdad'];
$EstRegistroCivil=$_POST['EstRegistroCivil'];
$EstGrado=$_POST['EstGrado'];
$EstGenero=$_POST['EstGenero'];
$IdAcudiente=$_POST['IdAcudiente'];

/* Se insertan los datos a la tabla de estudiantes */
$insertarEst=$conn->query("INSERT INTO estudiantes VALUES ('Id','$EstNombre', '$EstApellido', '$EstEdad', '$EstRegistroCivil', '$EstGrado', '$EstGenero', '$IdAcudiente')");
if ($insertarEst==true)
{
    echo '<script type="text/javascript"> alert("Registro exitoso")</script>';
} else{
    echo '<script type="text/javascript"> alert("Registro fallido")</script>';
}
}
?>