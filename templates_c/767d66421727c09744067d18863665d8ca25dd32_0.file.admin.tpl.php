<?php
/* Smarty version 3.1.33, created on 2018-10-09 14:06:20
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbc99bc260128_21597298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '767d66421727c09744067d18863665d8ca25dd32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\admin.tpl',
      1 => 1539086775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navAdmin.tpl' => 1,
    'file:generosAdmin.tpl' => 1,
    'file:listaItems.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbc99bc260128_21597298 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </title>

  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:navAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="cuerpo">

  <div class="contForm">

    <div class="formulario">
      <h2>Alta y Baja de Datos</h2>
      <form class="formCarga" action="agregar" method="get">
        <input class="inputCarga" type="text" name="cargaConsola" value="" placeholder="ingrese tipo de consola">
        <input class="inputCarga" type="text" name="cargaTitulo" value="" placeholder="ingrese titulo del juego">
        <p>Seleccione Genero
        <select class="inputCarga" name="selectGen">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
            <option value= "<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
" ><?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </p>
        <input class="inputCarga" type="number" name="cargaPrecio" value="" placeholder="ingrese precio del juego">
        <textarea name="cargaDescripcion" rows="4" cols="54" placeholder="ingrese breve descripcion"></textarea>
        <p>Ingrese Id para borrar datos
        <input  class="inputCarga" type="text" name="idBorrar" value="" placeholder="ingrese Id">
        </p>
        <div class="buttons">
          <button class="btn" type="submit" name="button">Cargar</button>
          <button class="btn" type="submit" formaction="borrar"name="button">Borrar</button>
        </div>
      </form>
    </div>

    <div class="formulario">
      <h2>Edicion de Datos</h2>
      <form class="formCarga" action="editar" method="get">
        <input  class="inputCarga" type="text" name="idEditar" value="" placeholder="ingrese Id">
        <input class="inputCarga" type="text" name="editConsola" value="" placeholder="ingrese tipo de consola">
        <p>Seleccione Genero
        <select class="inputCarga" name="editGenero">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
            <option value= "<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
" ><?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </p>
        <input class="inputCarga" type="text" name="editTitulo" value="" placeholder="ingrese titulo del juego">
        <input class="inputCarga" type="number" name="editPrecio" value="" placeholder="ingrese precio del juego">
        <textarea name="editDescripcion" rows="4" cols="54" placeholder="ingrese breve descripcion"></textarea>
        <button class="btn" type="submit" name="button">Editar</button>
      </form>
    </div>

    <div class="formulario">
      <h2>Alta y Baja de Generos</h2>
      <form class="formCarga" action="genero" method="get">
        <input class="inputCarga" type="text" name="cargaGenero" value="" placeholder="ingrese genero del juego">
        <div class="buttons">
          <button class="btn" type="submit" name="button">Cargar</button>
          <button class="btn" type="submit" name="button"formaction="borrarGen">Borrar</button>
        </div>
      </form>
    </div>
    <div class="formulario">
      <h2>Edicion de Generos</h2>
      <form class="formCarga" action="editGen" method="get">
        <input class="inputCarga" type="number" name="id_gen" value="" placeholder="ingrese id a modificar">
        <input class="inputCarga" type="text" name="editGen" value="" placeholder="ingrese genero del juego">
        <button class="btn" type="submit" name="button">Editar</button>
      </form>
    </div>
        <div class="lista">
          <?php if ($_smarty_tpl->tpl_vars['categorias']->value !== null) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:generosAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("file:listaItems.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

    </div>
  </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
