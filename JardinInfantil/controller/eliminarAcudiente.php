<?php
include '..//model/conexion.php'; /* Conexión a la base de datos */

$id=$_GET['Id'];
if(isset($_GET['Id'])){
$sql="DELETE FROM acudientes WHERE Id = '".$id."'";

if ($resultado=$conn->query($sql)) {
   header("Location: ../view/acudientes.php");
}else {
   echo '<script type="text/javascript"> alert("Eliminación fallida")</script>';
}
} 
?>