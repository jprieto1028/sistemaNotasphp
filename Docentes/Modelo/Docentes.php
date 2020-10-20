<?php
require_once('../../Conexion.php');
class Docentes extends Conexion
{

  function __construct()
  {
      $this->db=parent::__construct();
  }
  public function add($Nombre,$Apellido,$Usuario,$Password){
    $statement=$this->db->prepare("INSERT INTO usuarios (NOMBRE,APELLIDO,USUARIO,PASSWORD,
    PERFIL,ESTADO) VALUES(:Nombre,:Apellido,:Usuario,:Password,'DOCENTE','ACTIVO')");
   $statement->bindParam(':Nombre',$Nombre);
   $statement->bindParam(':Apellido',$Apellido);
   $statement->bindParam(':Usuario',$Usuario);
   $statement->bindParam(':Password',$Password);
   if ( $statement->execute()) {
    header('location:../Vista/Index.php');
   }else {
    header('location:../Vista/Add.php');
   }

   }

  public function get(){
    $rows=null;
    $statement=$this->db->prepare("SELECT * FROM usuarios WHERE PERFIL='DOCENTE'");
    $statement->execute();
    while ($result= $statement->fetch()) {
   $rows[]=$result;
   }
   return $rows;
  }
  public function getById($Id){
    $rows=null;
    $statement=$this->db->prepare("SELECT * FROM usuarios WHERE PERFIL='Docente' AND ID_USUARIO=:ID");
    $statement->bindParam(':ID',$Id);
    $statement->execute();
    while ($result= $statement->fetch()) {
   $rows[]=$result;
   }
   return $rows;
  }
  public function update($Id,$Nombre,$Apellido,$Usuario,$Password,$Estado){
  $statement=$this->db->prepare("UPDATE usuarios SET NOMBRE=:Nombre,APELLIDO=:Apellido,USUARIO=:Usuario,
    PASSWORD=:Password,ESTADO=:Estado where ID_USUARIO=:Id");
    $statement->bindParam(':Id',$Id);
    $statement->bindParam(':Nombre',$Nombre);
    $statement->bindParam(':Apellido',$Apellido);
    $statement->bindParam(':Usuario',$Usuario);
    $statement->bindParam(':Password',$Password);
    $statement->bindParam(':Estado',$Estado);
    if ($statement->execute()) {
     header('location:../Vista/Index.php');
    }else {
     header('location:../Vista/Edit.php');
    }
}
  public function delete($Id){
    $statement =$this->db->prepare("DELETE FROM usuarios  WHERE ID_USUARIO=:Id");
      $statement->bindParam(':Id',$Id);
      if ( $statement->execute()) {
       header('location:../Vista/Index.php');
     }else {
       header('location:../Vista/Delete.php');
     }
  }




}



 ?>
