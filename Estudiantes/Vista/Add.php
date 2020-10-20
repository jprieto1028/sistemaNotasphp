<?php
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../../Metodos.php');

$ModeloUsuario = new Usuario();
$ModeloMetodos = new Metodos();
//$ModeloUsuario->ValidarSession();
//$ModeloUsuario->ValidarSessionAdminisstrador();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistema de notas</title>
  </head>
  <body>
    <h1> Registrar Estudiante</h1>
 <form  action="../Controlador/Add.php" method="post">
  NOMBRE :<br>
  <input type="text"  name="NOMBRE" required="" autocomplete="off"  placeholder="NOMBRE"><br><br>
  APELLIDO:<br>
   <input type="text" name="APELLIDO" required="" autocomplete="off" placeholder="APELLIDO"><br><br>
   DOCUMENTO :<br>
   <input type="text"  name="DOCUMENTO" required="" autocomplete="off"  placeholder="DOCUMENTO"><br><br>
   CORREO:<br>
    <input type="email" name="CORREO" required="" autocomplete="off" placeholder="CORREO"><br><br>
    MATERIA :<br>
    <select  name="MATERIA" required="">
       <option >Seleccione</option>
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
       <option >Seleccione</option>
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
     <input type="number"  name="PROMEDIO" required="" autocomplete="off"  placeholder="PROMEDIO"><br><br>
    <input type="submit"  value="Registrar Estudiante">
</form>

</body>
</html>
