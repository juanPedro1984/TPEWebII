<?php

require_once('libs/Smarty.class.php');

class registerView
{
  function register()
  {
    $smarty = new Smarty();
    $smarty->display('templates/register.tpl');
  }
}



 ?>
