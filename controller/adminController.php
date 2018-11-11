<?php


require_once './view/adminView.php';
require_once './model/adminModel.php';
require_once './view/indexView.php';
require_once './model/userModel.php';
require_once './view/registerView.php';
require_once './view/edicionView.php';
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
  private $edicionView;
  private $juego;
  private $generos;

  function __construct(){
    parent::__construct();

    $this->view = new adminView();
    $this->titulo = "DigitalGames";
    $this->index = new indexView();
    $this->registerView = new registerView();
    $this->userMod = new userModel();
    $this->adminModel = new adminModel();
    $this->genModel = new generoModel();
    $this->edicionView = new EdicionView();

    if($this->isAdmin() != true ){
      header(HOME);
    }


  }

  function Admin(){
    if(isset($_GET['seleccionarGenAdmin'])){
      $this->categoria = $_GET['seleccionarGenAdmin'];
      $this->arrCat=$this->genModel->FiltroGen($this->categoria);
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
    $consola=$_POST['cargaConsola'];
    $titulo=$_POST['cargaTitulo'];
    $id_Genero=$_POST['selectGen'];
    $descripcion=$_POST['cargaDescripcion'];
    $precio=$_POST['cargaPrecio'];
    $imagen=$_POST['cargaImagen'];
    $this->adminModel->InsertJuego($consola,$titulo,$id_Genero,$descripcion,$precio,$imagen);
    header(ADMIN);
  }

  function BorrarJuego(){
    $id_juego = $_GET['idBorrar'];
    $this->adminModel->BorrarJuego($id_juego);
    header(ADMIN);
  }

  function Edicion(){
  $id=$_POST['idEditar'];
  $this->generos = $this->genModel->GetGeneros();
  $this->juego = $this->adminModel->GetDetalle($id);
  $this->edicionView->Edicion($this->juego,$this->generos);
  }

  function EditarJuego(){
    $id=$_POST['idEditar'];
    $id_juego = $_POST['idEditar'];
    $consola=$_POST['editConsola'];
    $titulo=$_POST['editTitulo'];
    $id_Genero=$_POST['editGenero'];
    $descripcion=$_POST['editDescripcion'];
    $precio=$_POST['editPrecio'];
    $imagen=$_POST['editImagen'];
    $this->id = $this->adminModel->EditarJuego($id_juego,$consola,$titulo,$id_Genero,$descripcion,$precio,$imagen);
    $this->generos = $this->genModel->GetGeneros();
    $this->juego = $this->adminModel->GetDetalle($id);
    $this->edicionView->Edicion($this->juego,$this->generos);
  }

  function BorrarGenero(){
    $genero=$_POST['cargaGenero'];
    $this->genModel->BorrarGenero($genero);
    header(ADMIN);
  }

  function InsertGenero(){
    $genero=$_POST['cargaGenero'];
    $this->genModel->InsertGenero($genero);
    header(ADMIN);
  }

  function EditarGenero(){
    $id_Genero=$_POST['id_gen'];
    $genero=$_POST['editGen'];
    $this->genModel->EditarGenero($id_Genero,$genero);
    header(ADMIN);
  }

  }



 ?>
