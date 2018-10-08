<div class="Navegador">
  <ul class="nav justify-content-center">
<li class="nav-item">
  <a class="nav-link" href="home" id="Home">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">Informacion</a>
</li>
<li class="nav-item">
  <div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categoria </button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  {foreach from=$generos item=genero}
    <a class="dropdown-item" href="filGen" value={$genero['id_Genero']} >{$genero['Genero']}</a>
  {/foreach}
</div>
</div>
</li>
</ul>
</div>
