<?php
/* Smarty version 3.1.33, created on 2018-11-09 00:08:40
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be4c1f8391105_17719360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c08492ce1c0ae5cda84863e28e1b2917b3e67393' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\comentarios.tpl',
      1 => 1541718452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:opiniones.tpl' => 1,
  ),
),false)) {
function content_5be4c1f8391105_17719360 (Smarty_Internal_Template $_smarty_tpl) {
?><h4>Deja tu comentario</h4>
<textarea class="comentarios" name="name" rows="2" cols="80"placeholder="Dejanos tu comentario"></textarea>
<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Increible!! - 5 estrellas"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Bastante bueno.. - 4.5 estrellas"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Bueno!! - 4 estrellas"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="EEEHHHH - 3.5 estrellas"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Ehhh - 3 estrellas"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Casi nose.. - 2.5 estrellas"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Medio malo... - 2 estrellas"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Malito - 1.5 estrellas"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Malo.. - 1 estrellas"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Horrible!!- 0.5 estrellas"></label>
</fieldset>
<button type="submit" class="postComent" name="button">Enviar</button>
<?php $_smarty_tpl->_subTemplateRender('file:opiniones.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
