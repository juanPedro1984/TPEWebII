<?php

require_once('libs/Smarty.class.php');

class indexView
{

function Home($juegos,$generos)
{
  $smarty = new Smarty();
  $smarty->assign('juegos',$juegos);
  $smarty->assign('generos',$generos);
  $smarty->display('templates/index.tpl');
}
}
 ?>
