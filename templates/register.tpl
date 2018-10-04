<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <title> DigitalGames </title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  {include file = 'header1.tpl'}
<div class="cuerpo">
  <form class="formRegistro" action="cargarRegistro" method="post">
    <h2>Registro de Usuario</h2>
    <input class="inputCarga" type="text" name="ingresarUsuario" value="" placeholder="ingrese documento">
    <input class="inputCarga" type="text" name="ingresarPassword" value="" placeholder="ingrese contraseña">
    <input  class="btn" type="submit" name="cargarUsuario" value="Registrarse">
  </form>
</div>
{include file="footer.tpl"}
</body>
</html>
