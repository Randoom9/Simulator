<?php
session_start();
$balls = 0;

if (isset($_POST['button'])) {
  $balls + 1;
  
  header('Location:../pages/first/main3.php');
}
