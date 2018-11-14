<?php

require_once 'api.php';
require_once './../model/comentariosModel.php';


class ComentApiController extends Api
{

  protected $model;

  function __construct()
  {
    parent::__construct();
    $this->model= new comentariosModel();
  }

  function PostComentario(){
    $array=$this->getJSONdata();
    $this->model->PostComentario($array->Comentarios,$array->id_Juego,$array->id_Usuario,$array->Fecha,$array->Valoracion);
  }

  function GetComentarios($id = null){
    if(isset($id)){
      $id_Coment = $id[0];
      $data = $this->model->GetComentario($id_Coment);
    }else{
      $data = $this->model->GetComentarios();
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }
    else {
      return $this->json_response(null , 404);
    }
}

    function DeleteComentario($param = null ){
      if(count($param)==1){
        $id_Coment=$param[0];
        $response = $this->model->DeleteComentario($id_Coment);
        return $this->json_response($response, 200);
      }
      else {
        return $this->json_response(null , 404);
      }
    }

    function UpdateComentario($param){

      if(count($param) == 1){
        $id = $param[0];
        $array = $this->getJSONData();
        $response = $this->model->UpdateComent($array->Comentarios,$array->id_Juego,$array->id_Usuario,$array->Fecha,$array->Valoracion,$id);
        return "Comentario modificado:".$this->json_response($response, 200);
      }else{
        return $this->json_response("No task specify", 300);

      }
    }
  }
