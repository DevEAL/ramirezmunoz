<?php

  include_once 'Models/ControllerOhlala.php';
  include_once 'Models/utils/utils.php';
  include_once 'Models/utils/subir.php';
  include_once 'Models/utils/setmail.php';

  $Controller = new ControllerOhlala ();

  $body = array(
    "name" => "{$_POST['name']}",
    "email" => "{$_POST['email']}",
    "phone" => "{$_POST['phone']}",
    "message" => "{$_POST['message']}",
    "presence" => "{$_POST['switch-one']}");

  $response= $Controller->Insert($body);
  
  header("Location:/");
?>