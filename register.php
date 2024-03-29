<?php
include('conexion.php');

if($_POST) {
  $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "no ha ingresado el usuario";
  $contrasenia = (isset($_POST['contrasenia'])) ? $_POST['contrasenia'] : "no ha ingresado la contraseña";
  $contraseniaConfirm = (isset($_POST['contraseniaConfirm'])) ? $_POST['contraseniaConfirm'] : "no ha ingresado la contraseña";
  $edad = (isset($_POST['edad'])) ? $_POST['edad'] : "no ha ingresado la edad";
  $sexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : "no ha seleccionado el sexo";
  $query = "INSERT INTO usuarios(usuario,contrasenia,edad,sexo) VALUES('$usuario', '$contrasenia','$edad','M')";
  $ejecutar = mysqli_query($conexion, $query);
  if($contrasenia != $contraseniaConfirm) {
    echo "las contraseñas no coinciden";
  } else {
    if ($ejecutar) {
      header("location:login.php");
      exit(); // Importante: terminar el script después de redirigir
    } else {
      echo "Error al registrar usuario: " . mysqli_error($conexion);
    }
  }
  
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
</head>
<body style="width: 100vw; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 20px; background-color: #ffe6e6; font-family: 'Comic Sans MS', cursive;">

  <h2 style="font-size: 24px; color: #333;">Registro</h2>

  <form action="register.php" method="post" style="width: 50%; text-align: center;">
    <p style="font-size: 16px; color: #333;">Nombre de Usuario</p>
    <input type="text" class="form-control" name="usuario" style="width: 80%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;" required>
    <br>
    <p style="font-size: 16px; color: #333;">Contraseña</p>
    <input type="password" class="form-control" name="contrasenia" style="width: 80%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;" required>
    <br>
    <p style="font-size: 16px; color: #333;">Confirme la contraseña</p>
    <input type="password" class="form-control" name="contraseniaConfirm" style="width: 80%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;" required>
    <br>
    <p style="font-size: 16px; color: #333;">Edad</p>
    <input type="number" class="form-control" name="edad" style="width: 80%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;" required>
    <br>
    <p style="font-size: 16px; color: #333;">Sexo</p>
    <select name="sexo" class="form-control" style="width: 80%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;" required>
      <option value="M">Masculino</option>
      <option value="F">Femenino</option>
    </select>
    <br>
    <button type="submit" class="btn btn-success" style="background-color: #66ccff; color: #fff; font-size: 16px; padding: 10px 20px; margin-top:16px; border: none; cursor: pointer;">Registrarse</button>
  </form>

  <p>Si ya tienes una cuenta puedes ingresar: </p>

  <a href="login.php" style="text-decoration: none; background-color: #66ccff; color: #fff; padding: 10px 20px; border-radius: 5px; font-size: 16px;">Iniciar Sesión</a>

</body>
</html>
