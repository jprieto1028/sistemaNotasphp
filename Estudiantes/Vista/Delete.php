<?php
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../Modelo/Estudiantes.php');

$ModeloUsuario = new Usuario();

//$ModeloUsuario->ValidarSession();
//$ModeloUsuario->ValidarSessionAdminisstrador();
$Id =$_GET['Id'];


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Notas</title>
  </head>
  <body>
    <h1>Eliminar Estudiante</h1>
<form action="../Controlador/Delete.php" method="post">
<input type="hidden" name="Id" value="<?php echo $Id; ?>">
<p> ESTA SEGURO DE ELIMINAR EL ESTUDIANTE?</p>
<input type="submit" value="Eliminar Estudiante">
</form>
</body>
</html>
