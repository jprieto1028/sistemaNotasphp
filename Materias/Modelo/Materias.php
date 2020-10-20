<?php
require_once('../../Conexion.php');
class Materias extends Conexion
{

  function __construct()
  {
    $this->db=parent::__construct();
  }
  public function add($Materia){
  $statement=$this->db->prepare("INSERT INTO materias(MATERIA)  VALUES (:Materia)");
  $statement->bindParam(':Materia',$Materia);
  if ( $statement->execute()) {
  header('location:../Vista/Index.php');
  }else {
  header('location:../Vista/Add.php');
   }
  }
  public function get(){
  $rows=null;
  $statement=$this->db->prepare("SELECT * FROM materias");
  $statement->execute();
  while ($result=$statement->fetch()) {
  $rows[]=$result;
  }
return   $rows;
  }
  public function getById($Id){
    $rows=null;
    $statement=$this->db->prepare("SELECT * FROM materias where ID_MATERIA=:'Id'");
    $statement->bindParam(':Id',$Id);
    $statement->execute();
    while ($result=$statement->fetch()) {
    $rows[]=$result;
    }
  return   $rows;
    }

  public function update($Id,$Materia){
  $statement=$this->db->prepare("UPDATE materias SET MATERIA=:Materia where ID_MATERIA=:Id");
  $statement->bindParam(':Id',$Id);
  $statement->bindParam(':Materia',$Materia);
  if ( $statement->execute()) {
  header('location:../Vista/Index.php');
  }else {
  header('location:../Vista/Edit.php');
   }
  }
  public function delete($Id){
  $statement=$this->db->prepare("DELETE FROM materias  where ID_MATERIA=:Id");
  $statement->bindParam(':Id',$Id);
  if ($statement->execute()) {
  header('location:../Vista/Index.php');
  }else {
  header('location:../Vista/Delete.php');
   }
  }

}
?>
