<?php
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../Modelo/Estudiantes.php');

$ModeloUsuario = new Usuario();
//$ModeloUsuario->ValidarSession();

$ModeloEstudiante = new Estudiantes();

//$ModeloUsuario->ValidarSessionAdminisstrador();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Sistemas de notas</title>
  </head>
  <body>
    <h1>
      <a href="#">Estudiantes</a> -
      <a href="../../Docentes/Vista/Index.php">Docentes</a> -
      <a href="../../Materias/Vista/Index.php">Materias</a> -
      <a href="../../Administradores/Vista/Index.php">Administradores</a> -
      <a href="../../Usuario/Controlador/salir.php">Salir</a>
    </h1>
<a href="Add.php" target="_blank" >Registra Estudiante</a><br><br>
<table border="2">
  <tr>
  <th>ID</th>
  <th>NOMBRE</th>
  <th>APELLIDO</th>
  <th>DOCUMENTO</th>
  <th>CORREO</th>
  <th>MATERIA</th>
  <th>DOCENTE</th>
  <th>PROMEDIO</th>
  <th>FECHA DE REGISTRO</th>
  <th>ACCIONES</th>
</tr>
<?php
$Estudiantes = $ModeloEstudiante->get();
if($Estudiantes != null){
foreach($Estudiantes as $Estudiante) {
?>
<tr>
 <td><?php echo $Estudiante['ID_ESTUDIANTE'] ?></td>
 <td><?php echo $Estudiante['NOMBRE'] ?></td>
 <td><?php echo $Estudiante['APELLIDO'] ?></td>
 <td><?php echo $Estudiante['DOCUMENTO'] ?></td>
 <td><?php echo $Estudiante['CORREO'] ?></td>
 <td><?php echo $Estudiante['MATERIA'] ?></td>
 <td><?php echo $Estudiante['DOCENTE'] ?></td>
 <td><?php echo $Estudiante['PROMEDIO']?><?php echo"%"?></td>
 <td><?php echo $Estudiante['FECHA_REGISTRO'] ?></td>
<td>
<a href="Edit.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE'] ?>" target="_blank">Editar </a>
<a href="Delete.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE'] ?>" target="_blank">Borrar</a>
  </td>
</tr>
<?php
}
}
?>

</table>
</body>
</html>
