<?php
require_once './view/adminView.php';
require_once './model/adminModel.php';

class adminController{
  private $view;
  private $titulo;
  private $model;

  function __construct()  {
    $this->view = new adminView();
    $this->titulo = "DigitalGames";
    $this->model = new adminModel();
  }

  function Admin(){
    $juegos = $this->model->GetTareas();
    $generos = $this->model->GetGeneros();
    $this->view->Mostrar($this->titulo,$juegos,$generos);
  }

  function InsertJuego(){
    $this->model->InsertJuego();
  }

  function BorrarJuego(){
    $this->model->BorrarJuego();
  }

  function EditarJuego(){
    $this->model->EditarJuego();
  }
  function BorrarGenero(){
    $this->model->BorrarGenero();
  }
  function InsertGenero(){
    $this->model->InsertGenero();
  }

}


 ?>
