<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../UNIAUCTION_6/PHPMailer/src/Exception.php';
require '../UNIAUCTION_6/PHPMailer/src/PHPMailer.php';
require '../UNIAUCTION_6/PHPMailer/src/SMTP.php';



$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = 'uniauctionmail@gmail.com';
$mail->Password = 'Dom123456';
$mail->setFrom('uniauctionmail@gmail.com', 'uniauctionnoreply');
$mail->addAddress($email, $first_name);
$mail->Subject = 'UniAuction Email Verification';
$mail->msgHTML("Hello, this email is to verify your account! Please use the following code to verify: " . $verificationCode); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Message sent!";
}

?>