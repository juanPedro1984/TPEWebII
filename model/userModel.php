<?php

class userModel
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
  }

  function GetUsers($user)  {
    $sentencia= $this->db->prepare("select* from usuarios where Usuario = ?");
    $sentencia->execute(array($user));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }
  function CargarUsuario()
  {
    $user = $_POST['ingresarUsuario'];
    $pass =password_hash($_POST['ingresarPassword'], PASSWORD_DEFAULT);

    $sentencia= $this->db->prepare("INSERT INTO usuarios(Usuario,Password) VALUES (?,?)");
    $sentencia->execute (array($user,$pass));
    header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/administrador");
  }
}


 ?>
