<?php


class comentariosModel
{

  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
  }

  function PostComentario($comentario,$id_Juego,$id_Usuario,$fecha,$valoracion){
    $sentencia = $this->db->prepare("INSERT INTO comentarios (Comentarios,id_Juego,id_Usuario,Fecha,Valoracion) VALUES (?,?,?,?,?)");
    $sentencia->execute (array($comentario,$id_Juego,$id_Usuario,$fecha,$valoracion));
  }
  function GetComentarios(){
    $sentencia = $this->db->prepare("SELECT * FROM `comentarios`");
    $sentencia->execute();
    $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $comentarios;
}

  function GetComentario($id_Coment){
    $sentencia = $this->db->prepare("select * from comentarios where id_Comentarios = ?");
    $sentencia->execute(array($id_Coment));
    $comentario = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $comentario;
  }
  function DeleteComentario($id_Coment){
    $comentario = $this->GetComentario($id_Coment);
    if(isset($comentario)){
      $sentencia = $this->db->prepare("delete from comentarios where id_Comentarios = ?");
      $sentencia->execute(array($id_Coment));
      return $comentario;

    }
  }

  function UpdateComent($comentario,$id_Juego,$id_Usuario,$fecha,$valoracion,$id)
  {
    $coment = $this->GetComentario($id);
    if(isset($comentario)){
    $sentencia = $this->db->prepare("update comentarios set Comentarios=?,id_Juego=?,id_Usuario=?,Fecha=?,Valoracion=? where id_Comentarios=?");
    $sentencia->execute(array($comentario,$id_Juego,$id_Usuario,$fecha,$valoracion,$id));
    $modifyComent = $this->GetComentario($id);
    return $modifyComent;
  }
}

}
 ?>
