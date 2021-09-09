<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style/style_for_authorization.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  </head>
  <body>
    <form action="vendor/signin.php" method="post">
      <label>Email</label>
      <input autocomplete="off" type="text" name="email" placeholder="Введите email">
      <label>Пароль</label>
      <input  type="password" name="password" placeholder="введите Пароль">
      <button type="submit">Войти</button>
      <p>
        У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
      </p>
      <?php
        if (isset($_SESSION['message'])) {
          echo '<p class="msg">'. $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);

       ?>
    </form>
  </body>
</html>
