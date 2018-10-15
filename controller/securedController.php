<?php


class SecuredController
{

function __construct()
{
  session_start();
  if (isset($_SESSION['User'])){
    if ( isset($_SESSION['LAST_ACTIVITY']) &&
    (time() - $_SESSION['LAST_ACTIVITY'] > 600)) {
      $this->logout(); // destruye la sesión, y vuelve al login
    }
    $_SESSION['LAST_ACTIVITY'] = time();
  }
  else{
    header(HOME);
  }
}

function logout(){
  session_start();
  session_destroy();

  header(HOME);
}


}


 ?>
