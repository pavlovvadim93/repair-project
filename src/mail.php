<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$userName = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Форма успешно создана";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера GMAIL
    $mail->Username   = 'pavlov.project.2019@gmail.com'; // Логин на почте
    $mail->Password   = 'cenfe6-Vymsaf-nuxqob'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('pavlov.project.2019@gmail.com', 'Pavlov Project'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('pavlov.vadim.93@mail.ru');  
    // -----------------------
    // Само письмо
    // -----------------------
    $mail->isHTML(true);
    
    $mail->Subject = 'Новая заявка';
    $mail->Body    = "<b>Имя:</b> $userName <br>
    <b>Телефон:</b> $phone <br>
    <b>Почта:</b> $email";
    // Проверяем отравленность сообщения
    if ($mail->send()) {
        echo "Форма успешно отправлена";
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }
} catch (Exception $e) {
        echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
        echo "Сообщение не было отправлено. Причина ошибки: {$phone->ErrorInfo}";
        echo "Сообщение не было отправлено. Причина ошибки: {$userName->ErrorInfo}";
}