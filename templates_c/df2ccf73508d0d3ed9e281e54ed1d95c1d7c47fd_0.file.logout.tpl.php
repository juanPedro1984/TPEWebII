<?php
/* Smarty version 3.1.33, created on 2018-10-15 05:09:51
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc404ffbe2ae6_64740601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df2ccf73508d0d3ed9e281e54ed1d95c1d7c47fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\logout.tpl',
      1 => 1539572987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc404ffbe2ae6_64740601 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post">
  <button type="submit" class="dropdown-item" formaction="administrador">Administrar contenido</button>
  <button type="submit" class="dropdown-item" formaction="logout">Logout</button>
</form>
<?php }
}
