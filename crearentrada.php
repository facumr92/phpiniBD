<?php
include("db.php");

if(isset($_POST['envio'])){
    $titulo= $_POST['titulo'];
    $mensaje= $_POST['mensaje'];

$titulo= mysqli_real_escape_string($con, $titulo);
$mensaje= mysqli_real_escape_string($con, $mensaje);

$resultado= mysqli_query($con, ' INSERT INTO entrada(titulo, mensaje ) VALUES ( "' . $titulo . '", "' . $mensaje . '" ) ');

if(!$resultado)
echo"No se pudo enviar el comentario";

else{
   
header("Location: index.php");
}
}/*
else
echo"error";*/
