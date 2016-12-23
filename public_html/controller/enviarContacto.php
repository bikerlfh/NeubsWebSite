<?php
require("Conexion.php");

$conexion = new Conexion();

$nombre = $conexion->quote($_POST['nombre']);
$email = $conexion->quote($_POST['email']);
$asunto = $conexion->quote($_POST['asunto']);
$descripcion = $conexion->quote($_POST['descripcion']);

$query = "INSERT INTO mensaje(nombre,email,asunto,mensaje,fecha) values(".$nombre.",".$email.",".$asunto.",".$descripcion.",'".date('d-m-Y H:m:s')."')";
$result = $conexion->query($query);
if($result == true)
     $result = "Tu mensaje ha sido enviado satisfactoriamente. Pronto te responderemos.";
else
    $result = "ERROR: Al intentar guardar el mensaje";

header("Location:../contacto.php?msg=".$result)
?>
