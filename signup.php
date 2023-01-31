<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (usuario, email, password) VALUES (:usuario, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
    echo "<script>alert('Su cuenta ha sido creada correctamente');</script>";
    } else {
    echo "<script>alert('Lo sentimos, hubo un error al crear su cuenta');</script>";
    }
  }
?>
<!DOCTYPE html>
<html>
<?php include "php/head.php" ?>
  <body style="text-align: center;">

  <?php include "php/header.php" ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <h1 class="h1_title">Registrarse</h1>
    <span style="color: white;">o <a href="login.php" class="ini_reg">Iniciar sesión</a></span>

    <form action="signup.php" method="POST">
    <input name="usuario" type="text" placeholder="Ingrese su usuario">
      <input name="email" type="email" placeholder="Ingrese su email">
      <input name="password" type="password" placeholder="Ingrese su contraseña">
      <input type="submit" value="Enviar">
    </form>
    </body>
</html>
