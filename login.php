<?php include('conexion.php');
error_reporting(E_ALL);
if($_POST) {
  session_start();
  $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "no ha ingresado el usuario";
  $contrasenia = (isset($_POST['contrasenia'])) ? $_POST['contrasenia'] : "no ha ingresado la contraseña";

  $usuario = mysqli_real_escape_string($conexion, $usuario);

  $stmt = $conexion->prepare("SELECT contrasenia FROM usuarios WHERE usuario=?");
  $stmt->bind_param("s", $usuario);
  $stmt->execute();
  $resultado = $stmt->get_result();

  if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();
    $contrasenia_hash = $fila['contrasenia'];

    // if (password_verify($contrasenia, $contrasenia_hash)) {
    if ($contrasenia == $contrasenia_hash) {
      $_SESSION['usuario'] = $usuario;
      $_SESSION['tiempoInicio'] = time();
      header("location: home.php");
      exit;
    } else {
      echo '<h2 style="font-size: 24px; color: #ff6666;">Contraseña incorrecta</h2>';
    }
  } else {
    echo '<h2 style="font-size: 24px; color: #ff6666;">El usuario no existe</h2>';
  }
}
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body style="width: 100vw; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 20px; background-color: #ffe6e6; font-family: 'Comic Sans MS', cursive;">

  <h2 style="font-size: 24px; color: #333;">Login</h2>

  <form action="login.php" method="post" style="width: 50%; text-align: center;">
    <p style="font-size: 16px; color: #333;">Nombre de Usuario</p>
    <input type="text" class="form-control" name="usuario" style="width: 80%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;" required>
    </br>
    <p style="font-size: 16px; color: #333;">Contraseña</p>
    <input type="password" class="form-control" name="contrasenia" style="width: 80%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;" required>
    </br>
    <button type="submit" class="btn btn-success" style="background-color: #66ccff; color: #fff; font-size: 16px; padding: 10px 20px; margin-top:16px; border: none; cursor: pointer;">Ingresar</button>
  </form>

  <p>Si aun no tienes una cuenta puedes registrarte:</p>
  <a href="register.php" style="text-decoration: none; background-color: #66ccff; color: #fff; padding: 10px 20px; border-radius: 5px; font-size: 16px;">Register</a>


</body>
</html>
