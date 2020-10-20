<?php
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../Modelo/Administradores.php');

$ModeloUsuario = new Usuario();
$ModeloAdministradores = new Administradores();
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
    <h1>Eliminar Administrador</h1>
<form action="../Controlador/Delete.php" method="post">
<input type="hidden" name="Id" value="<?php echo $Id; ?>">
<p> ESTA SEGURO DE ELIMINAR EL ADMINISTRADOR?</p>
<input type="submit" value="Eliminar Administrador">
</form>
</body>
</html>
