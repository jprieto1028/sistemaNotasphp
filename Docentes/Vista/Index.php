<?php
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../Modelo/Docentes.php');

$ModeloUsuario = new Usuario();
//$ModeloUsuario->ValidarSession();
$ModeloDocentes = new Docentes();
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
     <h1>
       <a href="#">Docentes</a> -
       <a href="../../Estudiantes/Vista/Index.php">Estudiantes</a> -
       <a href="../../Materias/Vista/Index.php">Materias</a> -
       <a href="../../Administradores/Vista/Index.php">Administradores</a> -
      <a href="../../Usuario/Controlador/salir.php">Salir</a>
     </h1>


   </h1>
 <a href="add.php" target="_blank">Registrar Docente</a><br><br>
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
$Docentes=$ModeloDocentes->get();
if ($Docentes!=null) {
  foreach ($Docentes as $Docente) {
    ?>
<tr>
<td><?php echo $Docente['ID_USUARIO'] ?></td>
<td><?php echo $Docente['NOMBRE'] ?></td>
<td><?php echo $Docente['APELLIDO'] ?></td>
<td><?php echo $Docente['USUARIO'] ?></td>
<td><?php echo $Docente['PERFIL'] ?></td>
<td><?php echo $Docente['ESTADO'] ?></td>

<td>
  <a href="Edit.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" target="_blank">Editar </a>
  <a href="Delete.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" target="_blank">Borrar</a>
</td>
</tr>
<?php
}
}
?>
</table>
  </body>

</html>
