<?php

  session_start();

  $user = "root";
  $pass = "123456";
  $db = "pizzaria";
  $host = "127.0.0.1";

  try {

    $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  } catch (PDOException $e) {

    print "Error: " . $e->getMessage() . "<br/>";
    die();

  }

?>