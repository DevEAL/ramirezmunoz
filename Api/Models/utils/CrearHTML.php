<?php

class CrearHTML{
  public static function Html($body, $titulo) {
    $asistencia = $body['presence'] === '1' ? 'Si' : 'No';
      $HTMLStart =
          '
          <html>
            <head>
              <meta charset=utf-8"/>
            </head>
            <body>
          ';
      $HTMLBody =
          '
          <div>
            <h2>'.$titulo.'</h2>
          </div>
          <div>
            <p>Nombre: <span>'.$body['name'].'</span></p>
            <p>Correo: <span>'.$body['email'].'</span></p>
            <p>Celular: <span>'.$body['phone'].'</span></p>
            <p>Mensaje: <span>'.$body['message'].'</span></p>
            <p>Confirmas tu asistencia: <span>'.$asistencia.'</span></p>
          </div>
          ';
      $HTMLFinish =
          '
            </body>
          </html>
          ';
      $HTML = $HTMLStart . $HTMLBody . $HTMLFinish;

      return $HTML;
  }
}

?>