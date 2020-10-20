<?php

require_once('../Modelo/Docentes.php');
if ($_POST) {

$ModeloDocentes = new Docentes();
$Nombre = $_POST['NOMBRE'];
$Apellido =$_POST['APELLIDO'];
$Usuario =$_POST['USUARIO'];
$Password =$_POST['CONTRASENA'];
$ModeloDocentes->add($Nombre,$Apellido,$Usuario,$Password);

} else {
header('location:../../Index.php');
}

?>
