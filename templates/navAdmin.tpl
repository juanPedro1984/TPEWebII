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
  <form action="filtrarAdmin" method="post" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <button type="submit" class="dropdown-item" formaction="administrador" >Todos los juegos</button>
    {foreach from=$generos item=genero}
      <button type="submit" class="dropdown-item" name="seleccionarGenAdmin" value="{$genero['id_Genero']}" >{$genero['Genero']}</button>
    {/foreach}
  </form>
</div>
</li>
<li class="nav-item">
  <a class="nav-link" href="logout">Logout</a>
</li>
</ul>
</div>
