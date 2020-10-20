<?php

require_once('../Modelo/Administradores.php');
if ($_POST) {

$ModeloAdministradores = new Administradores();
$Id = $_POST['Id'];
$Nombre = $_POST['NOMBRE'];
$Apellido =$_POST['APELLIDO'];
$Usuario =$_POST['USUARIO'];
$Password =$_POST['CONTRASENA'];
$Estado =$_POST['ESTADO'];
$ModeloAdministradores->update($Id,$Nombre,$Apellido,$Usuario,$Password,$Estado);

} else {
header('location:../../Index.php');
}

?>
