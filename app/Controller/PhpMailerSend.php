<?php
namespace App\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PhpMailerSend{
    public static function sendMail($username,$subject,$message,$email = "ginsan.ben3@gmail.com"){
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth=true;
        $mail->Username = "ginsan.ben3@gmail.com";
        $mail->Password = "dajnxobdpzmrtzeg";
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        $mail->setFrom($email,$username);
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject= $subject;
        $mail->Body = $message;
        $mail->send();
    }

}
?>