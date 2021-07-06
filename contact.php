<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
if(isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['company-name']) && isset($_POST['how']) && isset($_POST['what']) && isset($_POST['tell-more'])){
    $name = $_POST['name'];
    $company_name = $_POST['company-name'];
    $how = $_POST['how'];
    $what = $_POST['what'];
    $tell_more = $_POST['tell-more'];
try {
    //Server settings
  $mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'name@example.com';                 // SMTP username -- PUT YOUR MAIL ADDRESS HERE
$mail->Password = 'password';                           // SMTP password -- PUT YOUR MAIL ADDRESS PASSWORD HERE
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 465;                                  // TCP port to connect, tls=587, ssl=465


    //Recipients -- PUT YOUR MAIL ADDRESS
    $mail->setFrom('name@example.com', 'Mailer');
    $mail->addAddress('name@example.com', 'Joe User');     //Add a recipient
    $mail->addAddress('name@example.com');               //Name is optional

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = '<p><b>Name:</b></p><p>' .$name .'</p><p><b>Company Name:</b></p><p>' .$company_name .'</p><p><b>How did you hear about us?:</b></p><p>' .$how .'</p><p><b>What are you looking for??:</b></p><p>' .$what .'</p><p><b>Tell us more about it:</b></p><p>' .$tell_more;
    $mail->AltBody = 'Name:' .$name .'Company Name:' .$company_name .'How did you hear about us?:' .$how .'What are you looking for??:' .$what .'Tell us more about it:' .$tell_more;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
header('Location: ../views/index.html');
?>