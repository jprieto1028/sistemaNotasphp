<?php
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../Modelo/Administradores.php');

$ModeloUsuario = new Usuario();
//$ModeloUsuario->ValidarSession();
$ModeloAdministrador = new Administradores();
//$ModeloUsuario->ValidarSessionAdminisstrador();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Notas</title>
  </head>
  <body>
   <h1>
   <a href="#">Administradores</a> -
   <a href="../../Docentes/Vista/Index.php">Docentes</a> -
   <a href="../../Materias/Vista/Index.php">Materias</a> -
   <a href="../../Estudiantes/Vista/Index.php">Estudiantes</a> -
  <a href="../../Usuario/Controlador/salir.php">Salir</a>
   </h1>
 <a href="add.php" target="_blank">Registrar Administrador</a><br><br>
<table border="2">
<tr>
  <th>ID</th>
  <th>NOMBRE</th>
  <th>APELLIDO</th>
  <th>USUARIO</th>
  <th>PERFIL</th>
  <th>ESTADO</th>
  <th>ACCIONES</th>
</tr>
<?php
$Administradores=$ModeloAdministrador->get();
if ($Administradores!=null) {
  foreach ($Administradores as $Administrador) {
    ?>
<tr>
<td><?php echo $Administrador['ID_USUARIO'] ?></td>
<td><?php echo $Administrador['NOMBRE'] ?></td>
<td><?php echo $Administrador['APELLIDO'] ?></td>
<td><?php echo $Administrador['USUARIO'] ?></td>
<td><?php echo $Administrador['PERFIL'] ?></td>
<td><?php echo $Administrador['ESTADO'] ?></td>

<td>
  <a href="Edit.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>" target="_blank">Editar </a>
  <a href="Delete.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>" target="_blank">Borrar</a>
</td>
</tr>
<?php
}
}
?>
</table>
  </body>

</html>
