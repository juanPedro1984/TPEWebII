<?php


require_once './view/adminView.php';
require_once './model/adminModel.php';
require_once './view/indexView.php';
require_once './model/userModel.php';
require_once './view/registerView.php';
require_once './model/generoModel.php';
require_once 'securedController.php';

class adminController extends SecuredController
{
  private $view;
  private $titulo;
  private $genModel;
  private $adminModel;
  private $index;
  private $userMod;
  private $registerView;
  private $arrCat;
  private $categoria;

  function __construct(){
    parent::__construct();

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
      $juegos = $this->adminModel->GetJuegos();
      $generos = $this->genModel->GetGeneros();
      $this->view->Mostrar($this->arrCat,$this->titulo,$juegos,$generos);
    }else{
    $juegos = $this->adminModel->GetJuegos();
    $generos = $this->genModel->GetGeneros();
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
