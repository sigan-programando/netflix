<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <div class="tex_log">
      <br><p class="tex">Welcome. </p>  <?= $user['email']; ?>
      <br><p class="tex">You are Successfully Logged In</p>
      </div>
      <div class="btn_index">
      <a class="btn_1" type="button" href="pagina.html">continuar
        <br>
        <br>
      <a class="btn_1" type="button" href="logout.php">cerrar sesion
     
      </a>
      </div>
      
      
    <?php else: ?>
      
    <img class="logo" src="/pngegg (9).png" alt="netflix">
     
    <div class="btn">
    <a  class="btn_1" type="button" href="login.php">iniciar sesion</a>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <h1 class="titulo"> peliculas y series ilimitadas y mucho más </h1>
           <p>Disfruta donde quieras. Cancela cuando quieras.    
           </p>

    <p>¿Quieres ver Netflix ya? ingresa tu email para crear una cuenta o reiniciar tu membresia de Netflix.</p>
    <br>
    <br>
    <br>
  
 
    <div class="btn_comenzar">
    <a class="btn_2" type="button" href="signup.php">comenzar</a>
        
    </div>

      
      
    <?php endif; ?>
  </body>
</html>
