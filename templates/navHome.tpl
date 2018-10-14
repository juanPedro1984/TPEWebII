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
    <button type="submit" class="dropdown-item" formaction="" name="getAll" value="1" >Todos los juegos</button>
  {foreach from=$generos item=genero}
    <button type="submit" class="dropdown-item" name="seleccionarGen" value="{$genero['id_Genero']}" >{$genero['Genero']}</button>
  {/foreach}
</form>
</div>
</li>

<li class="nav-item">
<div class="dropdown ">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</button>
<div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
  <form class="signIn" action="signIn" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Documento" placeholder="Ingrese email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Contraseña" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
  <small id="emailHelp" class="form-text text-muted">¿No estas registrado?</small>
  <button type="submit" formaction="register" class="btn btn-primary">Sign up</button>
</form>
</div>
</div>
</li>
</ul>
</div>
