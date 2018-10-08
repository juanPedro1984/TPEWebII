<?php
class adminModel
    {

  private $db;

  function __construct()  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
  }



  function GetTareas()  {
    $sentencia= $this->db->prepare("select* from juegos");
    $sentencia->execute();
    $juegos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $juegos;
  }

  function GetGeneros()  {
    $sentencia= $this->db->prepare("select* from genero");
    $sentencia->execute();
    $genero = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $genero;
  }

  function InsertJuego(){
    $consola=$_GET['cargaConsola'];
    $titulo=$_GET['cargaTitulo'];
    $id_Genero=$_GET['selectGen'];
    $descripcion=$_GET['cargaDescripcion'];
    $precio=$_GET['cargaPrecio'];
    $sentencia = $this->db->prepare("INSERT INTO juegos(Consola,Titulo,id_Genero,Descripcion,Precio) VALUES (?,?,?,?,?)" );
    $sentencia->execute (array($consola,$titulo,$id_Genero,$descripcion,$precio));
    header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/administrador");
  }

  function BorrarJuego(){
    $id_juego = $_GET['idBorrar'];
    $sentencia = $this->db->prepare("delete from juegos where id_Juego=?");
    $sentencia -> execute(array($id_juego));
    header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/administrador");
}

  function EditarJuego(){
    $id_juego = $_GET['idEditar'];
    $consola=$_GET['editConsola'];
    $titulo=$_GET['editTitulo'];
    $descripcion=$_GET['editDescripcion'];
    $precio=$_GET['editPrecio'];
    $sentencia = $this->db->prepare("update juegos set Consola=?,Titulo=?,Descripcion=?,Precio=? where id_Juego=?");
    $sentencia->execute(array($consola,$titulo,$descripcion,$precio,$id_juego));
    header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/administrador");
}
  function InsertGenero(){
    $genero=$_GET['cargaGenero'];
    $sentencia = $this->db->prepare("INSERT INTO genero (Genero) VALUES (?)");
    $sentencia->execute (array($genero));
    header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/administrador");
}
  function BorrarGenero(){
    $genero=$_GET['cargaGenero'];
    $sentencia = $this->db->prepare("delete from Genero where genero=?");
    $sentencia -> execute(array($genero));
    header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/administrador");
}
  function EditarGenero()
  {
    $id_Genero=$_GET['id_gen'];
    $genero=$_GET['editGen'];
    $sentencia = $this->db->prepare("update genero set Genero=? where id_Genero=?");
    $sentencia->execute(array($genero,$id_Genero));
    header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/administrador");
    }


}

 ?>
