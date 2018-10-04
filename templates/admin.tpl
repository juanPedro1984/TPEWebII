
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title> {$titulo} </title>
  <link rel="stylesheet" type="text/css" href="css/style.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

{include file = 'header1.tpl'}


<div class="cuerpo">

  <div class="container">
    <div class="formulario">
      <h1>Cargar Datos</h1>
      <form class="formCarga" action="agregar" method="get">
        <input class="inputCarga" type="text" name="cargaConsola" value="" placeholder="ingrese tipo de consola">
        <input class="inputCarga" type="text" name="cargaTitulo" value="" placeholder="ingrese titulo del juego">
        <p>Seleccione Genero
        <select class="inputCarga" name="selectGen">

          {foreach from=$generos item=genero}
            <option value= "{$genero['id_Genero']}" >{$genero['Genero']}</option>
          {/foreach}

        </select>
      </p>
        <input class="inputCarga" type="number" name="cargaPrecio" value="" placeholder="ingrese precio del juego">
        <textarea name="cargaDescripcion" rows="4" cols="40" placeholder="ingrese breve descripcion"></textarea>
        <button class="btn" type="submit" name="button">cargar</button>
      </form>
    </div>
    <div class="formulario">
      <h1>Borrar Datos</h1>
      <form class="formBorrar" action="borrar" method="get">
        <input  class="inputCarga" type="text" name="idBorrar" value="" placeholder="ingrese Id">
        <button class="btn" type="submit" name="button">Borrar</button>
      </form>
    </div>
    <div class="formulario">
      <h1>Editar Datos</h1>
      <form class="formCarga" action="editar" method="get">
        <input  class="inputCarga" type="text" name="idEditar" value="" placeholder="ingrese Id">
        <input class="inputCarga" type="text" name="editConsola" value="" placeholder="ingrese tipo de consola">
        <input class="inputCarga" type="text" name="editGenero" value="" placeholder="ingrese genero del juego">
        <input class="inputCarga" type="text" name="editTitulo" value="" placeholder="ingrese titulo del juego">
        <input class="inputCarga" type="number" name="editPrecio" value="" placeholder="ingrese precio del juego">
        <textarea name="editDescripcion" rows="4" cols="40" placeholder="ingrese breve descripcion"></textarea>
        <button class="btn" type="submit" name="button">Editar</button>
      </form>
    </div>
    <div class="formulario">
      <h1>Cargar Genero</h1>
      <form class="formCarga" action="genero" method="get">
        <input class="inputCarga" type="text" name="cargaGenero" value="" placeholder="ingrese genero del juego">
        <button class="btn" type="submit" name="button">Cargar</button>
        <button class="btn" type="submit" name="button"formaction="borrarGen">Borrar</button>
      </form>
    </div>
    <div class="formulario">
      <h1>Editar Genero</h1>
      <form class="formCarga" action="editGen" method="get">
        <input class="inputCarga" type="number" name="id_gen" value="" placeholder="ingrese id a modificar">
        <input class="inputCarga" type="text" name="editGen" value="" placeholder="ingrese genero del juego">
        <button class="btn" type="submit" name="button">Editar</button>
      </form>
    </div>
        <div class="lista">
          <h2>Lista de Items</h2>
      <ul class='tabla'>
      {foreach from=$generos item=genero}
        <li>Id:{$genero['id_Genero']} | Genero: {$genero['Genero']}</li>
      {/foreach}
      </ul>

      <ul class='tabla'>
      {foreach from=$juegos item=juego}
        <li> Id: {$juego['id_Juego']} | Consola: {$juego['Consola']} | Titulo: {$juego['Titulo']} | Genero: {$juego['id_Genero']} | Descripcion: {$juego['Descripcion']} | Precio {$juego['Precio']}</li>
        {/foreach}
      </ul>
    </div>
  </div>

</div>
{include file="footer.tpl"}

</body>
</html>
