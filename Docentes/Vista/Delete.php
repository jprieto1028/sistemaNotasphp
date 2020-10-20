<?php
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../Modelo/Docentes.php');

$ModeloUsuario = new Usuario();
$ModeloDocentes = new Docentes();
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
    <h1>Eliminar Docente</h1>
<form action="../Controlador/Delete.php" method="post">
<input type="hidden" name="Id" value="<?php echo $Id; ?>">
<p> ESTA SEGURO DE ELIMINAR EL DOCENTE?</p>
<input type="submit" value="Eliminar Docente">
</form>
</body>
</html>
