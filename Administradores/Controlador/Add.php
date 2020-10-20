<?php

require_once('../Modelo/Administradores.php');
if ($_POST) {

$ModeloAdminstradores = new Administradores();
$Nombre = $_POST['NOMBRE'];
$Apellido =$_POST['APELLIDO'];
$Usuario =$_POST['USUARIO'];
$Password =$_POST['CONTRASENA'];
$ModeloAdminstradores->add($Nombre,$Apellido,$Usuario,$Password);

} else {
header('location:../../Index.php');
}

?>
