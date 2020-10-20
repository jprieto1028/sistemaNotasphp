<?php
require_once('../../Usuario/Modelo/Usuario.php');


$ModeloUsuario = new Usuario();

//$ModeloUsuario->ValidarSession();
//$ModeloUsuario->ValidarSessionAdminisstrador();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Notas</title>
  </head>
  <body>
  <h1>Registrar Docente </h1>
<form action="../Controlador/add.php" method="post">
NOMBRE:<br>
<input type="text" name="NOMBRE" required="" autocomplete="off"placeholder="Nombre"><br><br>
APELLIDO:<br>
<input type="text" name="APELLIDO" required="" autocomplete="off"placeholder="Apellido"><br><br>
USUARIO:<br>
<input type="text" name="USUARIO" required="" autocomplete="off"placeholder="Usuario"><br><br>
CONTRASENA:
<br>
<input type="password" name="CONTRASENA" required="" autocomplete="off"placeholder="Contrasena"><br><br>
<input type="submit" value="Registrar Docente">
</form>
</body>
</html>
