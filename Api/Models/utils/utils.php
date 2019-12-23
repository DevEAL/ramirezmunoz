<?php
  class utils {
    public static function error ($mensaje) {
      echo '<code>' . json_encode(array('mensaje' => $mensaje)). '</code>';
    }
    public static function exito ($mensaje) {
      echo '<code>' . json_encode(array('mensaje' => $mensaje)). '</code>';
    }
    public static function PrintJson ($array) {
      echo '<code>'.json_encode($array).'</code>';
    }
  }

?>