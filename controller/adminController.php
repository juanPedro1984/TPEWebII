<?php
require_once './view/adminView.php';
require_once './model/adminModel.php';
require_once './view/indexView.php';
require_once './model/userModel.php';
require_once './view/registerView.php';

class adminController{
  private $view;
  private $titulo;
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

  }

  function HomeController(){
    if(isset($_POST['seleccionarGen'])){
      $this->categoria = $_POST['seleccionarGen'];
      $this->arrCat=$this->userMod->FiltroGen($this->categoria);
      $juegos = $this->adminModel->GetTareas();
      $generos = $this->adminModel->GetGeneros();
      $this->index->Home($this->arrCat,$juegos,$generos);
    }
  else{
    $juegos = $this->adminModel->GetTareas();
    $generos = $this->adminModel->GetGeneros();
    $this->index->Home($this->arrCat,$juegos,$generos);
    }
  }

  function Admin(){
    $juegos = $this->adminModel->GetTareas();
    $generos = $this->adminModel->GetGeneros();
    $this->view->Mostrar($this->titulo,$juegos,$generos);
  }

  function InsertJuego(){
    $this->adminModel->InsertJuego();
  }

  function BorrarJuego(){
    $this->adminModel->BorrarJuego();
  }

  function EditarJuego(){
    $this->adminModel->EditarJuego();
  }

  function BorrarGenero(){
    $this->adminModel->BorrarGenero();
  }

  function InsertGenero(){
    $this->adminModel->InsertGenero();
  }

  function EditarGenero(){
    $this->adminModel->EditarGenero();
  }

  //userModel

  function signUp(){
    $this->registerView->register();
  }

  function verifyUser(){
    $user = $_POST['Documento'];
    $pass = $_POST['Contraseña'];
    $userDb= $this->userMod->GetUsers($user);
    if (isset($userDb)) {
      if (password_verify($pass, $userDb[0]['Password'])){
        $juegos = $this->adminModel->GetTareas();
        $generos = $this->adminModel->GetGeneros();
        $this->view->Mostrar($this->titulo,$juegos,$generos);
      }else {
        echo "contraseña incorrecta";
      }
      }else{
        echo "usuario no existe";
      }
  }

  function cargarRegistro(){
    if ((!empty($_POST['ingresarUsuario']))&&(!empty($_POST['ingresarPassword']))) {
    $this->userMod->CargarUsuario();
      }else{
    header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/register");
      }
    }
  }



 ?>
