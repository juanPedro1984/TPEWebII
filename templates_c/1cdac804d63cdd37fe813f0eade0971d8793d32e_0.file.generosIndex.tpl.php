<?php
/* Smarty version 3.1.33, created on 2018-10-24 18:00:17
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\generosIndex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd09711c6e012_23880902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cdac804d63cdd37fe813f0eade0971d8793d32e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\generosIndex.tpl',
      1 => 1540353457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd09711c6e012_23880902 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Juegos por genero</h2>

  <form action="mostrarDetalle" method="get">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Consola</th>
          <th scope="col">Genero</th>
        </tr>
      </thead>
      <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <tr>
          <td class="tdCategoria"><button type="submit" class="btnDet" name="checkDetalle" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_Juego'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['Titulo'];?>
</button></td>
          <td class="tdCategoria"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['Consola'];?>
</td>
          <td class="tdCategoria"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['Genero'];?>
</td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </form>
<?php }
}
