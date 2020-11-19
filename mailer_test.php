<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// use phpDocumentor\Reflection\Location;

require 'vendor/autoload.php';

             $mail = new PHPMailer();
             $mail->isSMTP();
             $mail->SMTPDebug = 2;
             $mail->Debugoutput = 'html';
             $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
                );
             
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = 'irangiroltd@gmail.com';
                $mail->Password = 'shemafa';
                $mail->isHTML(true);     // Set email format to HTML
                
                $mail->setFrom('irangiroltd@gmail.com', 'SHEMA FAYZO');
                $mail->addAddress('shemafaysal@gmail.com');
                $mail->Subject = 'SMTP email test';
                $mail->Body = 'this is some body';
                $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
                
                $mail->AddAttachment('uploads/f.jpg', 'irangiro');
            //  public function AddAttachment(
                            // $path,
            //                   $name = '',
            //                   $encoding = 'base64',
            //                   $type = 'application/octet-stream')

          if ($mail->send()){
            echo "Email Sent";
          }else{
                echo  "Email not Sent". $mail->ErrorInfo;
          }

?>