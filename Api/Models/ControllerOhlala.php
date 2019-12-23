<?php
  include_once 'ModelOhlala.php';
  include_once 'utils/utils.php';

  class ControllerOhlala {
    private $error;
    private $imagen;
    function Insert($body) {

      $model= new  ModelOhlala();

      $response = $model->Insert($body);

      if ($response) {
        return true;
      } else {
        return false;
      }
    }

  }
?>