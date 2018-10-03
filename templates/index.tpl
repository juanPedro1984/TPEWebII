<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <title> DigitalGames </title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

  <div class="Navegador">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="localhost/proyectos/TPE/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Informacion</a>
  </li>
  <li class="nav-item">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categoria </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Accion</a>
    <a class="dropdown-item" href="#">Aventura</a>
    <a class="dropdown-item" href="#">Terror</a>
  </div>
</div>
</li>
 <li class="nav-item">
   <div class="dropdown">
 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sign In</i> </button>
 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   <form action="administrador" method="post">
   <li>Documento: <input id="input" type="number" name="Documento" /></li>
   <li>Contraseña: <input type="text" name="Contraseña" /></li>
   <li><input type="submit" value="Sign in" ></li>
 </form>
 </div>
</div>
</li>
</ul>
</div>
<div class="cuerpo">
  <p> Un videojuego o juego de video es un juego electrónico en el que una o más personas interactúan, por medio de un controlador, con un dispositivo que muestra imágenes de video.1​ Este dispositivo electrónico, conocido genéricamente como «plataforma», puede ser una computadora, una máquina arcade, una videoconsola o un dispositivo portátil (un teléfono móvil, por ejemplo). Los videojuegos son, año por año, una de las principales industrias del arte y el entretenimiento.
Al dispositivo de entrada usado para manipular un videojuego se lo conoce como controlador de videojuego, o mando, y varía dependiendo de la plataforma. Por ejemplo, un controlador podría únicamente consistir de un botón y una palanca de mando o joystick, mientras otro podría presentar una docena de botones y una o más palancas (mando). Los primeros juegos informáticos solían hacer uso de un teclado para llevar a cabo la interacción, o bien requerían que el usuario adquiriera un joystick con un botón como mínimo.2​ Muchos juegos de computadora modernos permiten o exigen que el usuario utilice un teclado y un ratón de forma simultánea. Entre los controladores más típicos están los gamepads, joysticks, teclados, ratones y pantallas táctiles.
Generalmente, los videojuegos hacen uso de otras maneras, aparte de la imagen, de proveer la interactividad e información al jugador. El audio es casi universal, usándose dispositivos de reproducción de sonido, tales como altavoces y auriculares. Otro tipo de realimentación se hace a través de periféricos hápticos que producen vibración o retroalimentación de fuerza, usándose a veces la vibración para simular la retroalimentación de fuerza. </p>

<h3>Filtrar por genero</h3>
<form class="" action="filGen" method="post">
<select class="inputCarga" name="">
  {foreach from=$generos item=genero}
    <option value={$genero['id_Genero']}>{$genero['Genero']}</option>
  {/foreach}
</select>
<button type="submit" name="button">Filtrar</button>
</form>
<h1>Lista de items</h1><h1></h1>
<ul class='tabla'>

{foreach from=$juegos item=juego}
<li> Consola: {$juego['Consola']} | Titulo: {$juego['Titulo']}</li>
{/foreach}

</ul>



</div>
{include file="footer.tpl"}
</body>
</html>
