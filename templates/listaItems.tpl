<h2 class="items">Lista de generos</h2>
<ul class='tabla'>
{foreach from=$generos item=genero}
<li>Id: {$genero['id_Genero']} | Genero: {$genero['Genero']}<hr></li>
{/foreach}
</ul>
<h2 class="items">Lista de juegos</h2>
<ul class='tabla'>
{foreach from=$juegos item=juego}
<li> Id: {$juego['id_Juego']}<h4>Titulo: {$juego['Titulo']}</h4><hr>Consola: {$juego['Consola']}<br>Genero: {$juego['Genero']} (Id:  {$juego['id_Genero']})<br>Precio: ${$juego['Precio']}<br>Descripcion: <br>{$juego['Descripcion']}<br><hr></li>
{/foreach}
</ul>
