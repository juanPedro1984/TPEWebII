<?php


class generoModel
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
  }

  function GetGeneros(){
    $sentencia= $this->db->prepare("select* from genero");
    $sentencia->execute();
    $genero = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $genero;
}

  function InsertGenero(){
    $genero=$_GET['cargaGenero'];
    $sentencia = $this->db->prepare("INSERT INTO genero (Genero) VALUES (?)");
    $sentencia->execute (array($genero));
}

  function BorrarGenero(){
    $genero=$_GET['cargaGenero'];
    $sentencia = $this->db->prepare("delete from Genero where genero=?");
    $sentencia -> execute(array($genero));
}

  function EditarGenero(){
    $id_Genero=$_GET['id_gen'];
    $genero=$_GET['editGen'];
    $sentencia = $this->db->prepare("update genero set Genero=? where id_Genero=?");
    $sentencia->execute(array($genero,$id_Genero));
}

}
 ?>
