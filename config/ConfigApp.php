<?php
class ConfigApp{

  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [
      ''=>'adminController#HomeController',
      'home'=>'adminController#HomeController',
      'signIn'=>'adminController#verifyUser',
      'agregar'=>'adminController#InsertJuego',
      'borrar'=>'adminController#BorrarJuego',
      'editar'=>'adminController#EditarJuego',
      'genero'=>'adminController#InsertGenero',
      'borrarGen'=>'adminController#BorrarGenero',
      'editGen'=>'adminController#EditarGenero',
      'register'=>'adminController#signUp',
      'cargarRegistro'=>'adminController#cargarRegistro',
      'administrador'=>'adminController#admin',
      'filtrar'=>'adminController#HomeController'
  ];
}

 ?>
