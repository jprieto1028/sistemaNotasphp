<?php
require_once('../Modelo/Usuario.php');

if ($_POST) {

 $Usuario=$_POST['Usuario'];
 $Password=$_POST['Contrasena'];
 $Modelo=new Usuario();

if ($Modelo->loging($Usuario,$Password)) {
  header('location:../../Estudiantes/Vista/Index.php');
}else {
 header('location:../../Index.php');
}
}else {
 header('location:../../Index.php');
}







?>
