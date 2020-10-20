<?php

require_once('../Modelo/Docentes.php');
if ($_POST) {

$ModeloDocentes = new Docentes();
$Id = $_POST['Id'];
$Nombre = $_POST['NOMBRE'];
$Apellido =$_POST['APELLIDO'];
$Usuario =$_POST['USUARIO'];
$Password =$_POST['CONTRASENA'];
$Estado =$_POST['ESTADO'];
$ModeloDocentes->update($Id,$Nombre,$Apellido,$Usuario,$Password,$Estado);

} else {
header('location:../../Index.php');
}

?>
