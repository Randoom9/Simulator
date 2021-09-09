<?php
  session_start();
  require_once 'connect.php';


  $name = trim($_POST['name']);
  $surname = trim($_POST['surname']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $password_confirm= trim($_POST['password_confirm']);



if ($name == "") {
  $_SESSION['message'] = 'Введите имя!';
  header('location:../register.php');
} else {

    if ($surname == "") {
      $_SESSION['message'] = 'Введите фамилию!';
      header('location:../register.php');
    } else {
      if ($email == "") {
        $_SESSION['message'] = 'Введите email!';
        header('location:../register.php');
      } else {

        if ($password === $password_confirm) {
          if ($password != "") {
            // code...
            mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`) VALUES (NULL, '$name', '$surname', '$email', '$password')");
            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('location:../authorization.php');
          } else {
            $_SESSION['message'] = 'Пароль не может быть пустым!';
            header('location:../register.php');
          }
        } else {
          $_SESSION['message'] = 'Пароли не совпадают';
          header('location:../register.php');
        }
    }
  }
}
