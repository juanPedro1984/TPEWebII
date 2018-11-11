<?php
/* Smarty version 3.1.33, created on 2018-11-09 02:43:36
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\opiniones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be4e6489930b3_06633391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '128104571078515c06c9db271136ab6f2fc63b1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\opiniones.tpl',
      1 => 1541727815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be4e6489930b3_06633391 (Smarty_Internal_Template $_smarty_tpl) {
?><h5>Opiniones de los usuarios</h5>
<h6>usuario</h6>
<div class="opiniones">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentario']->value, 'comen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comen']->value) {
?>
<p><?php echo $_smarty_tpl->tpl_vars['comen']->value['Comentarios'];?>
</p>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<?php }
}
