<?php

require_once('../Modelo/Materias.php');
if ($_POST) {

$ModeloMaterias = new Materias();
$Materia = $_POST['MATERIA'];
$ModeloMaterias->add($Materia);

} else {
header('location:../../Index.php');
}

?>
