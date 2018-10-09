<h2 class="items">Lista de Items</h2>
<ul class='tabla'>
{foreach from=$generos item=genero}
<li>Id:{$genero['id_Genero']} | Genero: {$genero['Genero']}<hr></li>
{/foreach}
</ul>

<ul class='tabla'>
{foreach from=$juegos item=juego}
<li> Id:{$juego['id_Juego']}<h4>Titulo:{$juego['Titulo']}</h4><hr>Consola:{$juego['Consola']}<br>Genero:{$juego['id_Genero']}<br>Descripcion:{$juego['Descripcion']}<br>Precio:${$juego['Precio']}<br><hr></li>
{/foreach}
</ul>
