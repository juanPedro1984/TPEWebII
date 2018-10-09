<?php
/* Smarty version 3.1.33, created on 2018-10-09 15:17:41
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbcaa75561187_62182420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ac8a98bc6e3687638e3df719311a1db65058c86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\generos.tpl',
      1 => 1539086196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbcaa75561187_62182420 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Lista de Items</h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
<li class="list-group-item">Titulo:<?php echo $_smarty_tpl->tpl_vars['categoria']->value['Titulo'];?>
<br>Descripcion: <?php echo $_smarty_tpl->tpl_vars['categoria']->value['Descripcion'];?>
<br>Precio:$ <?php echo $_smarty_tpl->tpl_vars['categoria']->value["Precio"];?>
<br></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
