<?php
/* Smarty version 3.1.33, created on 2018-10-09 15:00:46
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\listaItems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbca67ee36ba2_14623049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f080064e0fe7ded0fbe349257822ae7eb2658924' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\listaItems.tpl',
      1 => 1539086949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbca67ee36ba2_14623049 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="items">Lista de Items</h2>
<ul class='tabla'>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
<li>Id:<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
 | Genero: <?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>
<hr></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<ul class='tabla'>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
?>
<li> Id:<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
<h4>Titulo:<?php echo $_smarty_tpl->tpl_vars['juego']->value['Titulo'];?>
</h4><hr>Consola:<?php echo $_smarty_tpl->tpl_vars['juego']->value['Consola'];?>
<br>Genero:<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Genero'];?>
<br>Descripcion:<?php echo $_smarty_tpl->tpl_vars['juego']->value['Descripcion'];?>
<br>Precio:$<?php echo $_smarty_tpl->tpl_vars['juego']->value['Precio'];?>
<br><hr></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}