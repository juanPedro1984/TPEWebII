<?php

require_once('libs/Smarty.class.php');

class indexView
{

function Home($categoria,$juegos,$generos)
{
  $smarty = new Smarty();
  $smarty->assign('categorias',$categoria);
  $smarty->assign('juegos',$juegos);
  $smarty->assign('generos',$generos);
  $smarty->display('templates/index.tpl');
}
}
 ?>
