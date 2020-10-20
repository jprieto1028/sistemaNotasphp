<?php

require_once('../Modelo/Materias.php');
if ($_POST) {

$ModeloMateria = new Materias();
$Id = $_POST['Id'];
$Materia =$_POST['MATERIA'];
$ModeloMateria->update($Id,$Materia);

} else {
header('location:../../Index.php');
}

?>
