<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$title = "Заголовок письма";
$body = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name<br>
<b>Почта:</b> $email<br><br>
<b>Сообщение:</b><br>$message
";

$mail = new PHPMailer(true);
try {
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
    $mail->addAddress('xleb2342@gmail.com');

    //Контент сообщения
    $mail->isHTML(true);
    $mail->Subject = 'Моя Музыка';
    $mail->Body    = $body;
    $mail->send();
echo 'Сообщение успешно отправлено';
    } catch (Exception $e) {
        echo 'При отправке сообщения произошла следующая ошибка : ', $mail->ErrorInfo;
}
?>