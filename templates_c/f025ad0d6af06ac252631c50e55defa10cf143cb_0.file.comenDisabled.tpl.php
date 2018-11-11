<?php
/* Smarty version 3.1.33, created on 2018-11-02 02:37:36
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\comenDisabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdbaa60bbd5a6_21595801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f025ad0d6af06ac252631c50e55defa10cf143cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\comenDisabled.tpl',
      1 => 1541122654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:opiniones.tpl' => 1,
  ),
),false)) {
function content_5bdbaa60bbd5a6_21595801 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea class="comentarios" disabled name="name" rows="2" cols="80"placeholder="Ingresa para dejarnos tu comentario"></textarea>
<?php $_smarty_tpl->_subTemplateRender('file:opiniones.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
