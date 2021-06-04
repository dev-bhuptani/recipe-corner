<?php
  session_start();
  require_once 'connect.php';

  $id = $_GET['id'];

  echo "Hello";
  if (mysqli_query($conn, "DELETE from posts where id={$id}" )) {
    header("Location: admin.php");
    exit();
  }
?>