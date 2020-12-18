<?php
  if (isset($_SESION['email_u'])) {
    header ('Location: index.php?accion=panel');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title></title>
  <link href="styles/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
        <div class="container">
              <h3 class="login-heading mb-4">Registrarse es simple!</h3>
              <form action="index.php" method="get">
                <input type="hidden" name="accion" value="register">
                <div class="form-group">
                  <label for="inputEmail">Correo electrónico</label>
                  <input type="email" class="form-control" placeholder="ejemplo@gmail.com" name="email" required autofocus>
                </div>
                <div class="form-group">
                  <label for="inputNombre">Contraseña</label>
                  <input type="password" class="form-control" name="pass" required autofocus>
                </div>
                <div class="form-group">
                  <label for="inputApellido">Confirmar contraseña</label>
                  <input type="password" class="form-control" name="ccpass" required autofocus>
                </div>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Obtener cuenta</button>
                <div class="text-center">
                  <a class="small" href="index.php?accion=form_login">¿Ya tienes una cuenta?</a></div>
              </form>
        </div>
</div>
</body>
</html>