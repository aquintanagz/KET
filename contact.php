<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

// Obteniendo los datos del formulario
    $nombre = $_POST['mc-email'];
    $email = $_POST['mc-email'];
    $telefono = ":";
    $personas = ":";
    $fecha = ":";
    $hora = ":";
    $mensaje = ":";
    $asunto = 'subscribir';
    
      // Si la validación del captcha es correcta, entonces ya creamos el mensaje
       $msg = "<p>You have recieved a new message from the enquiries form on your website.</p>
						  <p><strong>First name: </strong> {$nombre} </p>
						  <p><strong>Email Address: </strong> {$email} </p>
						  <p><strong>Mobile </strong> {$telefono} </p>
						  <p><strong>Sujet: </strong> {$asunto} </p>
						  <p><strong>Message: </strong> {$mensaje} </p>
						  <p>This message was sent from the IP Address: {$ipaddress} on {$fecha} at </p>";
    
    $mail = new PHPMailer(TRUE);

        $mail->CharSet = 'UTF-8';
        $mail->setFrom('mychefcitoteam50@gmail.com', 'mychefcito');
        //$mail->addAddress('enanoup@hotmail.com');
        $mail->addAddress('contacto@keto-morfosis.mx');
        $mail->Subject = 'Contacto desde Website keto-morfosis';
        $mail->isHTML(TRUE);
        $mail->Body = $msg;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Port = 465;
        $mail->Mailer = 'smtp';
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'hola@keto-morfosis.mx';
        $mail->Password = '@p92HOLAl50*';
  
        /* Enable SMTP debug output. */
     $mail->SMTPDebug = 2; 

        if ($mail->send()) {

            // Recargar la página despues de 1 segundos y redireccionar a "index.html#contacto"
            
            header('Refresh: 1; URL=index.html');

            echo "<script> alert('GRACIAS! EN BREVE NOS PONDREMOS EN CONTACTO CONTIGO'); </script>";
    
        } else {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    

?>