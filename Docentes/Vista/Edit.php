<?php
require_once('../../Usuario/Modelo/Usuario.php');
require_once('../Modelo/Docentes.php');

$ModeloUsuario = new Usuario();
$ModeloDocentes = new Docentes();
//$ModeloUsuario->ValidarSession();
//$ModeloUsuario->ValidarSessionAdminisstrador();
$Id =$_GET['Id'];
$InformacionDocente=$ModeloDocentes->getById($Id);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Notas</title>
  </head>
  <body>
  <h1>Actualizar Docente </h1>
<form action="../Controlador/Edit.php" method="post">
<input type="hidden" name="Id" value="<?php echo $Id; ?>">
<?php
if ($InformacionDocente!=null) {
  foreach ($InformacionDocente as $info) {

?>
NOMBRE:<br>
<input type="text" name="NOMBRE" required="" autocomplete="off"placeholder="Nombre" value="<?php echo  $info['NOMBRE'];?>"><br><br>
APELLIDO:<br>
<input type="text" name="APELLIDO" required="" autocomplete="off"placeholder="Apellido" value="<?php echo  $info['APELLIDO'];?>"><br><br>
USUARIO:<br>
<input type="text" name="USUARIO" required="" autocomplete="off"placeholder="Usuario" value="<?php echo  $info['USUARIO'];?>"><br><br>
CONTRASEÑA:<br>
<input type="password" name="CONTRASENA" required="" autocomplete="off"placeholder="Contrasena" value="<?php echo  $info['CONTRASENA'];?>"><br><br>
ESTADO :<br>
<select  name="ESTADO" required="" >
  <option value="<?php echo  $info['ESTADO'];?>" ><?php echo  $info['ESTADO'] ?></option>
  <option value="ACTIVO">ACTIVO</option>
  <option value="INACTIVO">INACTIVO</option>
</select><br><br>
<?php
}
}
?>
<input type="submit" value="Actualizar Docente">
</form>
</body>
</html>
