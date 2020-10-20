<?php
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../Modelo/Materias.php');

$ModeloUsuario = new Usuario();
//$ModeloUsuario->ValidarSession();
$ModeloMaterias = new Materias();
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
       <a href="#">Materias</a> -
       <a href="../../Docentes/Vista/Index.php">Docentes</a> -
       <a href="../../Estudiantes/Vista/Index.php">Estudiantes</a> -
       <a href="../../Administradores/Vista/Index.php">Administradores</a> -
       <a href="../../Usuario/Controlador/salir.php">Salir</a>
     </h1>


   </h1>
   <a href="Add.php" target="_blank">Registrar Materias</a>
<table border="2">

<tr>
   <th>Id</th>
   <th>Materia</th>
   <th>Acciones</th>
</tr>
<?php
$Materias=$ModeloMaterias->get();
if ($Materias!=null) {
foreach ($Materias as $Materia) {
?>
<tr>
   <td><?php echo $Materia['ID_MATERIA'] ?></td>
   <td><?php echo $Materia['MATERIA'] ?></td>
 <td>
   <a href="Edit.php ?Id= <?php echo $Materia['ID_MATERIA'] ?>" target="_blank">Editar</a>
   <a href="Delete.php ?Id= <?php echo $Materia['ID_MATERIA'] ?>" target="_blank">Borrar</a>
 </td>
 </tr>
 <?php
 }
 }

 ?>
</table>
  </body>
</html>
