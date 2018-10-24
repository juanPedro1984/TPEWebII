<?php
/* Smarty version 3.1.33, created on 2018-10-24 05:59:21
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\todosLosJuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bcfee194d76f0_04772564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '709090652f4ff5f57cd1f451ab1b93f493241364' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\todosLosJuegos.tpl',
      1 => 1540353518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcfee194d76f0_04772564 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Todos los juegos</h2>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
?>
          <tr>
          <td class="tdCategoria"><button type="submit" class="btnDet" name="checkDetalle" value="<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value['Titulo'];?>
</button></td>
          <td class="tdCategoria"><?php echo $_smarty_tpl->tpl_vars['juego']->value['Consola'];?>
</td>
          <td class="tdCategoria"><button type="submit" class="btnDet" formaction="filtrar" method="get" name="seleccionarGen" value="<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value['Genero'];?>
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
