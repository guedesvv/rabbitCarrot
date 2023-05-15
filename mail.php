<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'teste@rabbitcarrot.com.br';
$mail->Password = 'Teste1010';
$mail->setFrom('teste@rabbitcarrot.com.br', 'Caue');
$mail->addReplyTo('testerecebe@rabbitcarrot.com.br', 'Caue N');
$mail->addAddress('testerecebe@rabbitcarrot.com.br', 'contato');
$mail->Subject = 'Testando PHPMailer';
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->Body = 'This is a plain text message body';
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'O email foi enviado com sucesso.';
}
?>