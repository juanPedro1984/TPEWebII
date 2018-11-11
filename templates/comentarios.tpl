<h4>Deja tu comentario</h4>
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
{include file='opiniones.tpl'}
