<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <title> DigitalGames </title>
  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  {include file = 'navRegister.tpl'}
<div class="cuerpo">
  <h3>Formulario de registro</h3>
  <form class="formRegistro" action="cargarRegistro" method="post">
    <div class="form-group">
      <label class="label" for="exampleInputEmail1">Documento</label>
      <input type="text" class="form-control" id="Documento" aria-describedby="emailHelp" name="ingresarUsuario" placeholder="Ingrese Documento">
      <small id="emailHelp" class="form-text text-muted">Registrese con su DNI</small>
    </div>
    <div class="form-group">
      <label class="label" for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="ingresarPassword" placeholder="Password">
    </div>
    <div class="form-group">
      <label class="label" for="exampleInputPassword1">Repita su Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="repetirPassword" placeholder="Repita su Password">
      <small id="emailHelp" class="form-text text-muted">{$error}</small>
    </div>
    <button type="submit" class="btn btn-primary">Registrarse</button>
  </form>

</div>
  {include file="footer.tpl"}
</body>
</html>
