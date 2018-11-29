<?php

    //Create connection
  $connection = mysqli_connect('localhost', 'root', 'X6FtteFZpqRH2hp3', 'leads');
    if($_POST['name']){
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $shift= $_POST['shift'];

      $q = "INSERT INTO user (name, phone, shift) VALUES ('$name', '$email', '$shift')";

      $query = mysqli_query($connection, $q);

      if($query){
          echo json_encode("Contato enviado!");
          }
      else {
          echo json_encode('Ocorreu um problema');
          }
      }

?>