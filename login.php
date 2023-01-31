<?php
session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /piratix');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (is_countable($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      $_SESSION['user_usuario'] = $results['usuario'];
      header("Location: /piratix/index.php");
    } else {
    echo "<script>alert('Lo sentimos, sus datos son incorrectos');</script>";
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

    <h1 class="h1_title">Iniciar sesión</h1>
    <span style="color: white;">o <a href="signup.php" class="ini_reg">Registrarse</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="email" placeholder="Ingrese su email">
      <input name="password" type="password" placeholder="Ingrese su contraseña">
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
