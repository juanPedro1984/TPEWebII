<?php


class SecuredController
{

function __construct()
{
  session_start();
  if (isset($_SESSION['User'])){

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
