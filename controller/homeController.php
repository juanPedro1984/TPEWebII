<?php

require_once './view/indexView.php';
require_once './model/userModel.php';
require_once './view/registerView.php';
require_once './model/adminModel.php';
require_once './model/generoModel.php';
require_once './view/detalleView.php';



class homeController
{

  private $index;
  private $userMod;
  private $genModel;
  private $adminModel;
  private $registerView;
  private $detalleView;
  private $arrCat;
  private $categoria;
  private $detalle;
  private $getAll;


  function __construct() {
    $this->index = new indexView();
    $this->registerView = new registerView();
    $this->userMod = new userModel();
    $this->adminModel = new adminModel();
    $this->genModel = new generoModel();
    $this->detalleView = new DetalleView();
  }

  function HomeController(){
    if(isset($_POST['seleccionarGen'])){
      $this->categoria = $_POST['seleccionarGen'];
      $this->arrCat=$this->userMod->FiltroGen($this->categoria);
      $juegos = $this->adminModel->GetTareas();
      $generos = $this->genModel->GetGeneros();
      $this->index->Home($this->arrCat,$juegos,$generos,$this->detalle,$this->getAll);
    }elseif(isset($_POST['getAll'])){
      $this->getAll = $_POST['getAll'];
      $juegos = $this->adminModel->GetTareas();
      $generos = $this->genModel->GetGeneros();
      $this->index->Home($this->arrCat,$juegos,$generos,$this->detalle,$this->getAll);
    }else{
      $juegos = $this->adminModel->GetTareas();
      $generos = $this->genModel->GetGeneros();
      $this->index->Home($this->arrCat,$juegos,$generos,$this->detalle,$this->getAll);
    }
  }

  function signUp(){
    $message="";
    $this->registerView->register($message);
  }

  function verifyUser(){
    $user = $_POST['Documento'];
    $pass = $_POST['Contraseña'];
    $userDb= $this->userMod->GetUsers($user);
    if (isset($userDb)) {
      if (password_verify($pass, $userDb[0]['Password'])){
        session_start();
        $_SESSION['User'] = $user;
        header(ADMIN);
        }
      }else{
        echo "usuario no existe";
      }
  }

  function mostrarDetalle(){
    $id=$_POST['checkDetalle'];
    if (isset($id)){
    $this->detalle = $this->adminModel->GetDetalle($id);
    $this->detalleView->mostrarDet($this->detalle);
  }
}

}
 ?>
