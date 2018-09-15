<?php
require_once 'index.php';
require_once 'controller/adminController.php';

$controller = new adminController();

    if($_GET['action'] == ''){
    $controller->Home();
  }
    if($_GET['action'] == 'administrador') {
      $controller->Admin();
  }
    if($_GET['action'] == 'agregar'){
    $controller->InsertJuego();
  }
    if($_GET['action'] == 'borrar'){
    $controller->BorrarJuego();
  }
    if($_GET['action'] == 'editar'){
    $controller->EditarJuego();
  }
    if ($_GET['action'] == 'genero'){
    $controller->InsertGenero();
  }
    if ($_GET['action'] == 'borrarGen'){
      $controller->BorrarGenero();
  }
    if($_GET['action'] == 'editGen'){
      $controller->EditarGenero();
  }



?>
