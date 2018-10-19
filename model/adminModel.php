<?php

class adminModel
    {

  private $db;

  function __construct()  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
  }

  function GetJuegos()  {
    $sentencia= $this->db->prepare("select juegos.*, genero.* from juegos, genero where juegos.id_Genero = genero.id_Genero");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetDetalle($id){
    $sentencia= $this->db->prepare("select juegos.*, genero.Genero from juegos, genero where  juegos.id_Juego = ? and juegos.id_Genero = genero.id_Genero");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertJuego(){
    $consola=$_GET['cargaConsola'];
    $titulo=$_GET['cargaTitulo'];
    $id_Genero=$_GET['selectGen'];
    $descripcion=$_GET['cargaDescripcion'];
    $precio=$_GET['cargaPrecio'];
    $sentencia = $this->db->prepare("INSERT INTO juegos(Consola,Titulo,id_Genero,Descripcion,Precio) VALUES (?,?,?,?,?)" );
    $sentencia->execute (array($consola,$titulo,$id_Genero,$descripcion,$precio));
  }

  function BorrarJuego(){
    $id_juego = $_GET['idBorrar'];
    $sentencia = $this->db->prepare("delete from juegos where id_Juego=?");
    $sentencia -> execute(array($id_juego));
  }

  function EditarJuego(){
    $id_juego = $_GET['idEditar'];
    $consola=$_GET['editConsola'];
    $titulo=$_GET['editTitulo'];
    $id_Genero=$_GET['editGenero'];
    $descripcion=$_GET['editDescripcion'];
    $precio=$_GET['editPrecio'];
    $sentencia = $this->db->prepare("update juegos set Consola=?,Titulo=?,Descripcion=?,id_Genero=?,Precio=? where id_Juego=?");
    $sentencia->execute(array($consola,$titulo,$descripcion,$id_Genero,$precio,$id_juego));
  }

}
 ?>
