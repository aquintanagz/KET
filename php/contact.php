<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

// Obteniendo los datos del formulario
    $nombre = $_POST['email'];
    $email = $_POST['email'];
    $telefono = ":";
    $personas = ":";
    $fecha = ":";
    $hora = ":";
    $mensaje = ":";
    $asunto = 'subscribir';
    
      // Si la validaci贸n del captcha es correcta, entonces ya creamos el mensaje
       $msg = "<p>You have recieved a new message from the enquiries form on your website.</p>
                          <p><strong>First name: </strong> {$nombre} </p>
                          <p><strong>Email Address: </strong> {$email} </p>
                          <p><strong>Mobile </strong> {$telefono} </p>
                          <p><strong>Sujet: </strong> {$asunto} </p>
                          <p><strong>Message: </strong> {$mensaje} </p>
                          <p>This message was sent from the IP Address: {$ipaddress} on {$fecha} at </p>";
    
    $mail = new PHPMailer(TRUE);

        $mail->CharSet = 'UTF-8';
        $mail->setFrom('hola@keto-morfosis.mx', 'holaKeto');
        //$mail->addAddress('enanoup@hotmail.com');
        $mail->addAddress('contacto@keto-morfosis.mx');
        $mail->Subject = 'Contacto desde Website keto-morfosis';
        $mail->isHTML(TRUE);
        $mail->Body = $msg;
        $mail->isSMTP();
        $mail->Host = 'mail.keto-morfosis.mx';
        $mail->SMTPAuth = true;
        $mail->Port = 465;
        $mail->Mailer = 'smtp';
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'hola@keto-morfosis.mx';
        $mail->Password = '@p92HOLAl50*';
  
        /* Enable SMTP debug output. */
     $mail->SMTPDebug = 2; 

        if ($mail->send()) {

            // Recargar la p谩gina despues de 1 segundos y redireccionar a "index.html#contacto"
            
            //header('Refresh: 1; URL=https://keto-morfosis.mx/');
           //header("Refresh:0");

            echo "<script> location.replace('https://keto-morfosis.mx/') </script>";
    
        } else {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    

?>