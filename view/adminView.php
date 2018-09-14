<?php

class adminView
{

  function Mostrar($titulo,$juegos,$generos){

     ?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8" />
      <title> <?php echo $titulo; ?></title>
      <link rel="stylesheet" type="text/css" href="css/style.css" >
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>

    <div class="Navegador">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <div class="dropdown">
              <a href=""> <button class="dropbtn" class="nav-link" >HOME</button></a>
            </div>
          </li>
      </ul>
    </div>


    <div class="cuerpo">

      <div class="container">
        <div class="formulario">
          <h1>Cargar Genero</h1>
          <form class="formCarga" action="genero" method="post">
            <input class="inputCarga" type="text" name="cargaGenero" value="" placeholder="ingrese genero del juego">
            <button class="btn" type="submit" name="button">Cargar</button>
            <button class="btn" type="submit" name="button"formaction="borrarGen"  >Borrar</button>
          </form>
        </div>
        <div class="formulario">
          <h1>Cargar Datos</h1>
          <form class="formCarga" action="agregar" method="post">
            <input class="inputCarga" type="text" name="cargaConsola" value="" placeholder="ingrese tipo de consola">
            <input class="inputCarga" type="text" name="cargaTitulo" value="" placeholder="ingrese titulo del juego">
            <select class=inputCarga"" name="selectGen">
              <option value="1">Terror</option>
              <option value="2">Accion</option>
              <option value="3">Aventura</option>
            </select>
            <input class="inputCarga" type="number" name="cargaPrecio" value="" placeholder="ingrese precio del juego">
            <textarea name="cargaDescripcion" rows="8" cols="40" placeholder="ingrese breve descripcion"></textarea>
            <button class="btn" type="submit" name="button">cargar</button>
          </form>
        </div>
        <div class="formulario">
          <h1>Borrar Datos</h1>
          <form class="formBorrar" action="borrar" method="post">
            <input  class="inputCarga" type="text" name="idBorrar" value="" placeholder="ingrese Id">
            <button class="btn" type="submit" name="button">Borrar</button>
          </form>
        </div>
        <div class="formulario">
          <h1>Editar Datos</h1>
          <form class="formCarga" action="editar" method="post">
            <input  class="inputCarga" type="text" name="idEditar" value="" placeholder="ingrese Id">
            <input class="inputCarga" type="text" name="editConsola" value="" placeholder="ingrese tipo de consola">
            <input class="inputCarga" type="text" name="editGenero" value="" placeholder="ingrese genero del juego">
            <input class="inputCarga" type="text" name="editTitulo" value="" placeholder="ingrese titulo del juego">
            <input class="inputCarga" type="number" name="editPrecio" value="" placeholder="ingrese precio del juego">
            <textarea name="editDescripcion" rows="8" cols="40" placeholder="ingrese breve descripcion"></textarea>
            <button class="btn" type="submit" name="button">Editar</button>
          </form>
        </div>
            <div class="lista">
              <h2>Lista de Items</h2>
          <?php
          echo "<ul class='tabla'>";
          foreach ($juegos as $juego) {
            echo   "<li> Id:".$juego['id_Juego'].", Consola: ".$juego['Consola'].", Titulo: ".$juego['Titulo'].",Genero: ".$juego['id_Genero']." Descripcion: ".$juego['Descripcion'].", Precio ".$juego['Precio']."</li>";
          }
          echo "</ul>";

          echo "<ul class='tabla'>";
          foreach ($generos as $genero) {
            echo   "<li> Genero:".$genero['Genero']."</li>";
          }
          echo "</ul>";
           ?>
        </div>
      </div>

    </div>
    <div class="footer">
    <nav class="nav nav-pills nav-fill">
      <p class="nav-item nav-link">Siguenos en nuestras redes sociales: </p>
      <a class="nav-item nav-link" href="http://facebook.com">Facebook <img src="image/Facebook.png" id="Redsocial"/></a>
      <a class="nav-item nav-link" href="http://twitter.com">Twitter <img src="image/Twitter.jpg" id="Redsocial"/></a>
      <a class="nav-item nav-link" href="http://Instagram.com">Instagram <img src="image/Instagram.png" id="Redsocial"/></a>
    </nav>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>
    <?php
    }

  }



 ?>
