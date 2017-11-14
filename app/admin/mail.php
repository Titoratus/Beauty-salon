<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require '../libs/vendor/autoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->Port = 587;
$mail->Username = "exstarence@gmail.com";  // SMTP username
$mail->Password = "CurrJadeij05"; // SMTP password

$mail->From = "yarik-kekus@gmail.com";
$mail->FromName = "Евгесус";
$mail->AddAddress("noxioustoo@yandex.ru", "myname");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Ярик, ты что-то не то сказал!";
$mail->Body    = "Ничего против не имею, но в чс добавлю.";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>