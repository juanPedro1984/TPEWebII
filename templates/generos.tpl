<h2>Lista de Items</h2>

{foreach from=$categorias item=categoria}
<li class="list-group-item">Titulo:{$categoria['Titulo']}<br>Descripcion: {$categoria['Descripcion']}<br>Precio:$ {$categoria["Precio"]}<br></li>
{/foreach}
