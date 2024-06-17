<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
session_start();
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
if(isset($_POST["submit"])){
    $fullname =$_POST['fullname'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $select =$_POST['select'];
    $message =$_POST['message'];

  $msg =  `<html><body>
  <p>Full Name = $fullname</p>
   <p>Email = $email</p>
    <p>Phone = $phone</p>
     <p>Select = $select</p>
      <p>Messge = $message</p>
  </body></html>`;

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'test@unideskpartners.com';                     //SMTP username
    $mail->Password   = 'Welcome@2024';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('shashank8652@gmail.com', 'Mailer');
    $mail->addAddress('shashank8652@gmail.com', $fullname);     //Add a recipient
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $msg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} 
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}}