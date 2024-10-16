<?php
include '..//model/conexion.php'; /* Conexión a la base de datos */

if(isset($_POST['actualizar1'])) /* Si se presiona el boton actualizar ocurre lo siguiente: */
{

$Id=$_POST['EstId'];
$EstNombre=$_POST['EstNombre'];
$EstApellido=$_POST['EstApellido'];
$EstEdad=$_POST['EstEdad'];
$EstRegistroCivil=$_POST['EstRegistroCivil'];
$EstGrado=$_POST['EstGrado'];
$EstGenero=$_POST['EstGenero'];
$IdAcudiente=$_POST['IdAcudiente'];

$sql="UPDATE estudiantes SET 
EstNombre='".$EstNombre."',
EstApellido='".$EstApellido."',
EstEdad='".$EstEdad."',
EstRegistroCivil='".$EstRegistroCivil."',
EstGrado='".$EstGrado."',
EstGenero='".$EstGenero."',
IdAcudiente='".$IdAcudiente."' WHERE Id = '".$Id."'";

if ($resultado=$conn->query($sql)) {
   header("Location: ../view/estudiantes.php");
}else {
   echo '<script type="text/javascript"> alert("Actualizacion fallida")</script>';
}
}
?>