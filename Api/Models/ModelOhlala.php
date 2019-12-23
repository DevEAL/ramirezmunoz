<?php
  include_once 'config/db.php';
  include_once 'utils/setmail.php';
  include_once 'utils/CrearHTML.php';

  class ModelOhlala extends bd{
    function Insert ($body) {

      $sql="INSERT INTO eal_contact (eal_name,eal_email, eal_phone, eal_message, eal_presence)
      VALUES( '{$body['name']}','{$body['email']}', '{$body['phone']}','{$body['message']}','{$body['presence']}')";

      try {
        $db = new bd();
        $db = $db->connect();
        $sth = $db->prepare($sql);
        $sth->execute();
        $id = $db->lastInsertId();

        $asunto = 'RSVP '.$id;
        $template = CrearHTML::Html($body, $asunto);
        
        $email = SendMail::EnviarCorreo($asunto, $template);
        if ($email) {
          return true;
        } else {
          return false;
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }
  }
?>