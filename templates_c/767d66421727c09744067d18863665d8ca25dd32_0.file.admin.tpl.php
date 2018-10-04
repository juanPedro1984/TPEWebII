<?php
/* Smarty version 3.1.33, created on 2018-10-04 04:08:22
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb5761683bc18_62988329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '767d66421727c09744067d18863665d8ca25dd32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\admin.tpl',
      1 => 1538617783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header1.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bb5761683bc18_62988329 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </title>
  <link rel="stylesheet" type="text/css" href="css/style.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<?php $_smarty_tpl->_subTemplateRender('file:header1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="cuerpo">

  <div class="container">
    <div class="formulario">
      <h1>Cargar Datos</h1>
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
        <textarea name="cargaDescripcion" rows="4" cols="40" placeholder="ingrese breve descripcion"></textarea>
        <button class="btn" type="submit" name="button">cargar</button>
      </form>
    </div>
    <div class="formulario">
      <h1>Borrar Datos</h1>
      <form class="formBorrar" action="borrar" method="get">
        <input  class="inputCarga" type="text" name="idBorrar" value="" placeholder="ingrese Id">
        <button class="btn" type="submit" name="button">Borrar</button>
      </form>
    </div>
    <div class="formulario">
      <h1>Editar Datos</h1>
      <form class="formCarga" action="editar" method="get">
        <input  class="inputCarga" type="text" name="idEditar" value="" placeholder="ingrese Id">
        <input class="inputCarga" type="text" name="editConsola" value="" placeholder="ingrese tipo de consola">
        <input class="inputCarga" type="text" name="editGenero" value="" placeholder="ingrese genero del juego">
        <input class="inputCarga" type="text" name="editTitulo" value="" placeholder="ingrese titulo del juego">
        <input class="inputCarga" type="number" name="editPrecio" value="" placeholder="ingrese precio del juego">
        <textarea name="editDescripcion" rows="4" cols="40" placeholder="ingrese breve descripcion"></textarea>
        <button class="btn" type="submit" name="button">Editar</button>
      </form>
    </div>
    <div class="formulario">
      <h1>Cargar Genero</h1>
      <form class="formCarga" action="genero" method="get">
        <input class="inputCarga" type="text" name="cargaGenero" value="" placeholder="ingrese genero del juego">
        <button class="btn" type="submit" name="button">Cargar</button>
        <button class="btn" type="submit" name="button"formaction="borrarGen">Borrar</button>
      </form>
    </div>
    <div class="formulario">
      <h1>Editar Genero</h1>
      <form class="formCarga" action="editGen" method="get">
        <input class="inputCarga" type="number" name="id_gen" value="" placeholder="ingrese id a modificar">
        <input class="inputCarga" type="text" name="editGen" value="" placeholder="ingrese genero del juego">
        <button class="btn" type="submit" name="button">Editar</button>
      </form>
    </div>
        <div class="lista">
          <h2>Lista de Items</h2>
      <ul class='tabla'>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
        <li>Id:<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
 | Genero: <?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>
</li>
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
        <li> Id: <?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
 | Consola: <?php echo $_smarty_tpl->tpl_vars['juego']->value['Consola'];?>
 | Titulo: <?php echo $_smarty_tpl->tpl_vars['juego']->value['Titulo'];?>
 | Genero: <?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Genero'];?>
 | Descripcion: <?php echo $_smarty_tpl->tpl_vars['juego']->value['Descripcion'];?>
 | Precio <?php echo $_smarty_tpl->tpl_vars['juego']->value['Precio'];?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
