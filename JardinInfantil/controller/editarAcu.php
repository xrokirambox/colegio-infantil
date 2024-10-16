<?php
include '..//model/conexion.php'; /* Conexión a la base de datos */

if(isset($_POST['actualizar']))/* Si se presiona el boton actualizar ocurre lo siguiente: */
   {

$Id=$_POST['Id'];
$AcuNombre=$_POST['AcuNombre'];
$AcuApellido=$_POST['AcuApellido'];
$AcuNumIdentificacion=$_POST['AcuNumIdentificacion'];
$AcuDireccion=$_POST['AcuDireccion'];
$AcuTelefono=$_POST['AcuTelefono'];
$AcuParentesco=$_POST['AcuParentesco'];

$sql="UPDATE acudientes SET 
AcuNombre='".$AcuNombre."',
AcuApellido='".$AcuApellido."',
AcuNumIdentificacion='".$AcuNumIdentificacion."',
AcuDireccion='".$AcuDireccion."',
AcuTelefono='".$AcuTelefono."',
AcuParentesco='".$AcuParentesco."' WHERE Id = '".$Id."'";

if ($resultado=$conn->query($sql)) {
   header("Location: ../view/acudientes.php");
}else {
   echo '<script type="text/javascript"> alert("Actualizacion fallida")</script>';
}
}
