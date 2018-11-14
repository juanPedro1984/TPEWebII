<?php
require_once('libs/Smarty.class.php');

class DetalleView
{

  function mostrarDet($detalles,$userId)
  {
    $smarty = new Smarty();
    $smarty->assign('detalle',$detalles);
    $smarty->assign('userId',$userId);
    $smarty->display('templates/detalle.tpl');
  }
}



 ?>
