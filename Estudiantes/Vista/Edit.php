<?php
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../Modelo/Estudiantes.php');
require_once('../../Metodos.php');
$ModeloUsuario = new Usuario();
$ModeloEstudiantes = new Estudiantes();
//$ModeloUsuario->ValidarSession();
//$ModeloUsuario->ValidarSessionAdminisstrador();
$Id =$_GET['Id'];
$InformacionEstudiante=$ModeloEstudiantes->getById($Id);
$ModeloMetodos = new Metodos();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistema de notas</title>
  </head>
  <body>
    <h1> Actualizar Estudiante</h1>
  <form  action="../Controlador/Edit.php" method="post">
<input type="hidden" name="Id" value="<?php echo $Id; ?>">
<?php
if ($InformacionEstudiante!=null) {
  foreach ($InformacionEstudiante as $info) {

?>
NOMBRE :<br>
  <input type="text"  name="NOMBRE" required="" autocomplete="off"  placeholder="NOMBRE" value="<?php echo  $info['NOMBRE'];?>"><br><br>
  APELLIDO:<br>
   <input type="text" name="APELLIDO" required="" autocomplete="off" placeholder="APELLIDO" value="<?php echo  $info['APELLIDO'];?>"><br><br>
   DOCUMENTO :<br>
   <input type="number"  name="DOCUMENTO" required="" autocomplete="off"  placeholder="DOCUMENTO" value="<?php echo  $info['DOCUMENTO'];?>"><br><br>
   CORREO:<br>
    <input type="email" name="CORREO" required="" autocomplete="off" placeholder="CORREO" value="<?php echo  $info['CORREO'];?>"><br><br>
    MATERIA :<br>
    <select  name="MATERIA" required="">
       <option value="<?php echo  $info['MATERIA'];?>" ><?php echo  $info['MATERIA'] ?></option>
       <?php
      $Materias=$ModeloMetodos-> getMaterias();
      if($Materias != null){
      foreach($Materias as $Materia) {
       ?>
     <option><?php echo $Materia['MATERIA'];?></option>

    <?php
     }
   }
   ?>
    </select><br><br>
    DOCENTE:<br>
      <select  name="DOCENTE" required="">
      <option value="<?php echo  $info['DOCENTE'];?>" ><?php echo  $info['DOCENTE'] ?></option>
      <?php
       $Docentes=$ModeloMetodos->getDocentes();
       if($Docentes != null){
       foreach($Docentes as $Docente) {
      ?>
     <option value="<?php echo $Docente['NOMBRE']. '  '.$Docente['APELLIDO'];?>" ><?php echo $Docente['NOMBRE']. '   '.$Docente['APELLIDO'];?></option>
     <?php
      }
    }
    ?>
    </select><br><br>
     PROMEDIO :<br>
     <input type="number"  name="PROMEDIO" required="" autocomplete="off"  placeholder="PROMEDIO" value="<?php echo  $info['PROMEDIO'];?>"><br><br>
<?php

}
}
?>
<input type="submit"  value="Actualizar Estudiante">
</form>

</body>
</html>
