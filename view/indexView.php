<?php

require_once('libs/Smarty.class.php');

class indexView
{

function Home($categoria,$juegos,$generos,$detalle,$getAll)
{
  session_start();
  $smarty = new Smarty();
  $smarty->assign('getAll',$getAll);
  $smarty->assign('detalle',$detalle);
  $smarty->assign('categorias',$categoria);
  $smarty->assign('juegos',$juegos);
  $smarty->assign('generos',$generos);
  $smarty->display('templates/index.tpl');
}
}
 ?>
