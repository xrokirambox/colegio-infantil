<?php
include '..//model/conexion.php'; /* Conexión a la base de datos */

$Id=$_GET['Id'];
if(isset($_GET['Id'])){
$sql="DELETE FROM estudiantes WHERE Id = '".$Id."'";

if ($resultado=$conn->query($sql)) {
   header("Location: ../view/estudiantes.php");
}else {
   echo '<script type="text/javascript"> alert("Eliminación fallida")</script>';
}
} 
?>