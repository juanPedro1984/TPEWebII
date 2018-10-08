<?php
/* Smarty version 3.1.33, created on 2018-10-07 21:51:01
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bba63a57603e7_70203827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54ce01dd3ca56340988072aa593a1db2392d2d4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\register.tpl',
      1 => 1538941818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bba63a57603e7_70203827 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <title> DigitalGames </title>
  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <?php $_smarty_tpl->_subTemplateRender('file:navAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="cuerpo">
  <form class="formRegistro" action="cargarRegistro" method="post">
    <h2>Registro de Usuario</h2>
    <input class="inputCarga" type="text" name="ingresarUsuario" value="" placeholder="ingrese documento">
    <input class="inputCarga" type="text" name="ingresarPassword" value="" placeholder="ingrese contraseña">
    <input  class="btn" type="submit" name="cargarUsuario" value="Registrarse">
  </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
