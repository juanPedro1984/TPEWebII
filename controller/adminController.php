<?php
define('ADMIN',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/administrador");
define('HOME',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));

require_once './view/adminView.php';
require_once './model/adminModel.php';
require_once './view/indexView.php';
require_once './model/userModel.php';
require_once './view/registerView.php';
require_once './model/generoModel.php';

class adminController{
  private $view;
  private $titulo;
  private $genModel;
  private $adminModel;
  private $index;
  private $userMod;
  private $registerView;
  private $arrCat;
  private $categoria;

  function __construct()  {
    $this->view = new adminView();
    $this->titulo = "DigitalGames";
    $this->index = new indexView();
    $this->registerView = new registerView();
    $this->userMod = new userModel();
    $this->adminModel = new adminModel();
    $this->genModel = new generoModel();
  }

  function Admin(){
    if(isset($_POST['seleccionarGenAdmin'])){
      $this->categoria = $_POST['seleccionarGenAdmin'];
      $this->arrCat=$this->userMod->FiltroGen($this->categoria);
      $juegos = $this->adminModel->GetTareas();
      $generos = $this->adminModel->GetGeneros();
      $this->view->Mostrar($this->arrCat,$this->titulo,$juegos,$generos);
    }else{
    $juegos = $this->adminModel->GetTareas();
    $generos = $this->adminModel->GetGeneros();
    $this->view->Mostrar($this->arrCat,$this->titulo,$juegos,$generos);
  }
  }

  function InsertJuego(){
    $this->adminModel->InsertJuego();
    header(ADMIN);
  }

  function BorrarJuego(){
    $this->adminModel->BorrarJuego();
    header(ADMIN);
  }

  function EditarJuego(){
    $this->adminModel->EditarJuego();
    header(ADMIN);
  }

  function BorrarGenero(){
    $this->genModel->BorrarGenero();
    header(ADMIN);
  }

  function InsertGenero(){
    $this->genModel->InsertGenero();
    header(ADMIN);
  }

  function EditarGenero(){
    $this->genModel->EditarGenero();
    header(ADMIN);
  }

  }



 ?>
