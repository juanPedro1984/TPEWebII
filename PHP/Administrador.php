<?php

 ?>
<!--PHP para administrador. Si el registro es correcto debe de redireccionar a esta pagina -->


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title> DigitalGames.com</title>
  <link rel="stylesheet" type="text/css" href="CSS\style.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="Principio">
  </div>
  <div class="Navegador">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <div class="dropdown">
       <button class="dropbtn" class="nav-link" >Home</button>
      </div>
      </li>
<li class="nav-item" >
  <div class="dropdown">
 <button class="dropbtn" class="nav-link" >Juegos</button>
 <div class="dropdown-content">
       <ul class="nav navbar-nav">
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">PC</span> <span class="caret"></span></a>
               <ul class="dropdown-menu">
                   <li><a href="#">Accion</a></li>
                   <li><a href="#">Aventura</a></li>
                   <li><a href="#">Terror</a></li>
               </ul>
           </li>
       </ul>
           <ul class="nav navbar-nav">
               <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">PS3</span> <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                       <li><a href="#">Accion</a></li>
                       <li><a href="#">Aventura</a></li>
                       <li><a href="#">Terror</a></li>
                   </ul>
               </li>
           </ul>
           <ul class="nav navbar-nav">
               <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">PS4</span> <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                       <li><a href="#">Accion</a></li>
                       <li><a href="#">Aventura</a></li>
                       <li><a href="#">Terror</a></li>
                   </ul>
               </li>
           </ul>
 </div>
</div>
</li>
<li class="nav-item">
  <div class="dropdown">
 <button class="dropbtn" class="nav-link">Informacion</button>
 <div class="dropdown-content">
   <a >Noticias</a>
   <a >Mas vendidos</a>
   <a >Foro</a>
 </div>
</div>
</li>
<li class="nav-item">
  <div class="dropdown">
 <button class="dropbtn" class="nav-link disabled">Sign In</button>
 <div class="dropdown-content" id="dropdown-form">
          <form action="usuario.php" method="get">
          <li>Documento: <input type="number" name="Documento" /></li>
        <li>Contraseña: <input type="text" name="Contraseña" /></li>
          <li><input type="submit" value="Sign in"></li>

  </form>
 </div>
</div>
</li>
</ul>
</div>
<div class="cuerpo">
</div>
<div class="footer">
<nav class="nav nav-pills nav-fill">
  <p class="nav-item nav-link">Siguenos en nuestras redes sociales: </p>
  <a class="nav-item nav-link" href="http://facebook.com">Facebook <img src="Image/Facebook.png" id="Redsocial"/></a>
  <a class="nav-item nav-link" href="http://twitter.com">Twitter <img src="Image/Twitter.jpg" id="Redsocial"/></a>
  <a class="nav-item nav-link" href="http://Instagram.com">Instagram <img src="Image/Instagram.png" id="Redsocial"/></a>
</nav>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
