<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
// require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/Language');
$mail->isHTML(true);

// $mail->isSMTP();
// $mail->Host='smtp.mail.ru';
// $mail->SMTPAuth=true;
// $mail->Username='skorpionshik83@mail.ru';
// $mail->Password='serega147258369';
// $mail->SMTPSecure='ssl';
// $mail->Port=465;


$mail->setFrom('info@testsitesergey.ru', 'Кредо-Мебель');
// $mail->setFrom('skorpionshik83@mail.ru','sdfsdfsfsdfs');
// $mail->addAddress('skorpionshik83@mail.ru');
$mail->addAddress('vn.kredo@mail.ru');

// $mail->isHTML(true);

$mail->Subject = 'Привет! Это письмо с сайта Кредо-Мебель';

$body = '<h1>Встречайте супер письмо!</h1>';

if (trim(!empty($_POST['name']))) {
    $body .= '<p><strong>Имя:</strong> ' . $_POST['name'] . '</p>';
}
if (trim(!empty($_POST['email']))) {
    $body .= '<p><strong>E-mail</strong> ' . $_POST['email'] . '</p>';
}
if (trim(!empty($_POST['message']))) {
    $body .= '<p><strong>Сообщение</strong> ' . $_POST['message'] . '</p>';
}
$mail->Body = $body;

if (!$mail->send()) {
    $message = "Ошибка";
} else {
    $message = 'Данные отправлены!';
}

$response=['message'=>$message];
header('Content-type:application/json');
echo json_encode($response);

?>