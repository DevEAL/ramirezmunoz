<?php
use PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\SMTP ;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

  class SendMail{
    static function EnviarCorreo($asunto, $body){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'sendohlala@gmail.com';                     // SMTP username
            $mail->Password   = 'Enalgun1*';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('sendohlala@gmail.com', 'Admin Web');
            $mail->addAddress('andreayalejandromatrimonio2020@gmail.com');     // Add a recipient
            // $mail->addAddress('backend@enalgunlugarestudio.com');             // Name is optional
            // $mail->addAddress('desarrollo@enalgunlugarestudio.com');

            // // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = utf8_decode($asunto);
            $mail->Body    = $body;

            $mail->send();

            return true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }
    }
  }

?>