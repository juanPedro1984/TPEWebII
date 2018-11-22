<?php

require_once('libs/Smarty.class.php');

class EdicionView
{
  function Edicion($juego,$generos,$imagenes){
    $smarty = new Smarty();
    $smarty->assign('juego', $juego);
    $smarty->assign('generos', $generos);
    $smarty->assign('imagenes', $imagenes);
    $smarty->display('templates/edicion.tpl');
}
}

 ?>
