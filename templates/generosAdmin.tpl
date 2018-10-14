<h2 class="items">Lista de Items</h2>
<ul class='tabla'>
{foreach from=$categorias item=categoria}
<li> Id: {$categoria['id_Juego']}<h4>Titulo: {$categoria['Titulo']}</h4><hr>Consola: {$categoria['Consola']}<br>Genero: {$categoria['Genero']} (Id: {$categoria['id_Genero']}) <br>Descripcion: {$categoria['Descripcion']}<br>Precio: ${$categoria["Precio"]}<br><hr></li>
{/foreach}
</ul>
