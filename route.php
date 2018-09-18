<?php
require_once 'view/indexView.php';
require_once 'controller/adminController.php';

$controller = new adminController();

    if($_GET['action'] == ""){
    $controller->HomeController();

  }else{
      $partesURL = explode ("/",$_GET['action']);

    if($partesURL[0] === 'administrador') {
      $controller->Admin();
  }
    elseif($partesURL[0] === 'agregar'){
    $controller->InsertJuego();
  }
    elseif($partesURL[0] == 'borrar'){
    $controller->BorrarJuego();
  }
    elseif($partesURL[0] == 'editar'){
    $controller->EditarJuego();
  }
    elseif ($partesURL[0] == 'genero'){
    $controller->InsertGenero();
  }
    elseif ($partesURL[0] == 'borrarGen'){
      $controller->BorrarGenero();
  }
    elseif($partesURL[0] == 'editGen'){
      $controller->EditarGenero();
  }
}



?>
