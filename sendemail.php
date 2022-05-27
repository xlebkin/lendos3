<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 4;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";//Сервер SMTP gmail
    $mail->SMTPAuth = true;
    $mail->Username = "xleb2342@gmail.com";//В документации Google указано что логин это адрес вместе с собакой
    $mail->Password = "1230984576";//Пароль
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    //Отправитель
    $mail->setFrom('xleb2342@gmail.com');
    // Получатели
    $mail->addAddress('adfkjgfhdsjfhfsvjlkd@gmail.com');

    //Контент сообщения
    $mail->isHTML(true);
    $mail->Subject = 'Мое первое сообщение далеко';
    $mail->Body    = 'Мое сообщение о новых';
    $mail->AltBody = 'Новое сообщение через mailer';
    $mail->send();
echo 'Сообщение успешно отправлено';
    } catch (Exception $e) {
        echo 'При отправке сообщения произошла следующая ошибка : ', $mail->ErrorInfo;
}
?>