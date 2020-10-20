<?php
require_once('../../Conexion.php');
session_start();
class Usuario extends Conexion
{

public function __construct()
  {
  $this->db=parent::__construct();
  }
public function loging($Usuario,$Password){

    $statement = $this->db->prepare("SELECT * FROM USUARIOS where USUARIO=:Usuario AND PASSWORD=:Password");
    $statement->bindparam(':Usuario',$Usuario);
    $statement->bindparam(':Password',$Password);
    $statement->execute();

    if ($statement->rowcount()==1) {
      $resultset=$statement->fetch();
      $_SESSION['NOMBRE']=$resultset["NOMBRE"];
      $_SESSION['ID']= $resultset["ID_USUARIO"];
      $_SESSION['PERFIL']= $resultset["PERFIL"];
      return TRUE;
    }
  return FALSE;
}

public function getNombre(){
  return $_SESSION['NOMBRE'];
}
public function getId(){
  return $_SESSION['ID'];
}
public function getPerfil(){
  return $_SESSION['PERFIL'];
}

public function ValidarSession(){

  if ($_SESSION['ID'] == null) {
    header('Location: ../../index.php');
  }
}
public function ValidarSessionAdminisstrador(){

  if ($_SESSION['ID']!=null) {
    if ($_SESSION['PERFIL']=='Docente') {
    header('Location: ../../Estudiantes/Vista/Index.php');
}else {
    header('Location: ../../index.php');
}

  }
}
public function Salir(){
 $_SESSION['ID'] =null;
 $_SESSION['PERFIL'] =null;
 $_SESSION['NOMBRE'] =null;
 session_destroy();
  header('Location: ../../index.php');
}



}

 ?>
