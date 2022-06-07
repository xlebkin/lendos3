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
    $mail->Host = "smtp.mail.ru";//Сервер SMTP
    $mail->SMTPAuth = true;
    $mail->Username = "m43545645673@mail.ru";//В документации указано что логин это адрес вместе с собакой
    $mail->Password = "fmfFdCcu8nmv0HfX7Jha";//Пароль
    $mail->SMTPSecure = ssl;
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';
    //Отправитель
    $mail->setFrom('m43545645673@mail.ru');
    // Получатели
    $mail->addAddress('m43545645673@mail.ru');

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