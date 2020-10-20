<?php
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../Modelo/Materias.php');

$ModeloUsuario = new Usuario();
$ModeloMaterias = new Materias();
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
    <h1>Actualizar Materia</h1>
<form  action="../Controlador/Edit.php" method="post">
<input type="hidden" name="Id" value="<?php echo $Id; ?>">

<input type="text" name="MATERIA" required="" autocomplete="off" placeholder="Nombre Materia"><br><br>
<input type="submit" value="Actualizar Materia" >
</form>
  </body>
</html>
