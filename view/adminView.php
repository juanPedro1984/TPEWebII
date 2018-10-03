<?php

require_once('libs/Smarty.class.php');
class adminView
{
  function Mostrar($titulo,$juegos,$generos){
    $smarty = new Smarty();
    $smarty->assign('juegos',$juegos);
    $smarty->assign('generos',$generos);
    $smarty->assign('titulo',$titulo);
    $smarty->display('templates/admin.tpl');

  }

}



 ?>
