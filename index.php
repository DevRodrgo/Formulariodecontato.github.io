<?php
require_once('scr/PHPMailer.php');
require_once('scr/SMTP.php');
require_once('scr/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'rc0490528@gmail.com';
    $mail->Password = '1234567891011121314151617181920google';
    $mail->Port = 587;

    $mail->setFrom('railmadamascenasantos@gmail.com');
    $mail->addAddress('raimadamascenasantos@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'teste de email';
    $mail->Body = 'Chegou o email teste <strong>Rodrigo</strong>';

    if($mail->send()) {
        echo 'email enviado com sucesso';
    } else {
        echo 'nao foi possivel enviar o email';
    }

} catch (Exception $e) {
    echo 'Erro ao enviar mensagem: {$mail->ErrorInfo}';
}
