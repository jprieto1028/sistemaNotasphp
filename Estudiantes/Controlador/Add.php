<?php

require_once('../Modelo/Estudiantes.php');
if ($_POST) {

$ModeloEstudiante = new Estudiantes();
$Nombre = $_POST['NOMBRE'];
$Apellido =$_POST['APELLIDO'];
$Documento =$_POST['DOCUMENTO'];
$Correo =$_POST['CORREO'];
$Materia =$_POST['MATERIA'];
$Docente =$_POST['DOCENTE'];
$Promedio =$_POST['PROMEDIO'];
$Fecha =date('y-m-d');

$ModeloEstudiante->add($Nombre,$Apellido,$Documento,$Correo,$Materia,$Docente,$Promedio,$Fecha);

} else {
header('location:../../Index.php');
}

?>
