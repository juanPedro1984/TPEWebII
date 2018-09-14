<?php
require_once 'index.php';
require_once 'controller/adminController.php';

$controller = new adminController();

    if($_GET['action'] == ''){
    home();
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



?>
