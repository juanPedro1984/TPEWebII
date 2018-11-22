<?php

require_once('libs/Smarty.class.php');

class userView
{
  function usuariosView($users){
      $smarty = new Smarty();
      $smarty->assign('usuarios',$users);
      $smarty->display('templates/usuarios.tpl');

  }

}


 ?>
