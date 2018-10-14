<?php
require_once('libs/Smarty.class.php');

class DetalleView
{

  function mostrarDet($detalles)
  {
    $smarty = new Smarty();
    $smarty->assign('detalle',$detalles);
    $smarty->display('templates/detalle.tpl');
  }
}



 ?>
