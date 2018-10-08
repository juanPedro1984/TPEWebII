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
<form action="filtrar" method="post" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  {foreach from=$generos item=genero}
    <button type="submit" class="dropdown-item" name="seleccionarGen" value="{$genero['id_Genero']}" >{$genero['Genero']}</button>
  {/foreach}
</form>
</div>
</li>

<li class="nav-item">
 <div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sign In</i> </button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
 <form action="administrador" method="post">
 <li>Documento: <input  type="number" name="Documento" /></li>
 <li>Contraseña: <input type="text" name="Contraseña" /></li>
 <li><input type="submit" value="Sign in"></li>
 <li>¿No estas registrado</li>
 <li><input type="submit" value="Sign up"formaction="register" ></li>
</form>
</div>
</div>
</li>
</ul>
</div>
