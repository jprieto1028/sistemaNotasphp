<?php
/**
 *
 */
class Conexion
{
protected $db;
private $drive ="mysql";
private $host="localhost";
private $dbname="calificacion";
private $user="root";
private $password="1234";

public  function __construct()
{

try{
  $db=new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}",$this->user,$this->password);
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo "Conectado";
return $db;
}catch(PDOException $e){
  echo "problema de conexion:".$e->getMessage();
}

}
}



?>
