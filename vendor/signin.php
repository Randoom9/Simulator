<?php
  session_start();
  require_once 'connect.php';

  $email = trim($_POST['email']);
  $password = trim($_POST['password']);



  $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'");

  if (mysqli_num_rows($check_user) > 0) {
    header('location:../pages/first/main.php');
  } else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('location:../authorization.php');
  }
// echo mysqli_num_rows($check_user);
