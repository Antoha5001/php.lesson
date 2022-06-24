<?php

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';

$mail = new PHPMailer(true);

$mail->setLanguage('ru','PHPMailer/language');
$mail->IsHTML(true);
$mail->setFrom('noreply@623030.ru', 'Support 623030.ru');
$mail->addAddress('am01syridl0npal1@mail.ru', 'Other name');
$mail->CharSet = 'utf-8';
$mail->Subject = "Письмо с верхней формы";

$message = "<h1>Здравствуйте</h1>";

if (trim(htmlspecialchars(!empty($_POST['name'])))) {
	$name = $_POST['name'];
	$message .= "<p>Письмо от {$name}</p>";
}
if (trim(htmlspecialchars(!empty($_POST['email'])))) {
	$email = $_POST['email'];
	$message .= "<p>Email {$email}</p>";
}

if (trim(htmlspecialchars(!empty($_POST['hand'])))) {
	$hand = $_POST['hand'];
	$message .= "<p>Этот человек {$hand}</p>";
}

if (trim(htmlspecialchars(!empty($_POST['message'])))) {
	$mess = $_POST['message'];
	$message .= "<p>Сообщение {$mess}</p>";
}

if (trim(htmlspecialchars(!empty($_POST['age'])))) {
	$age = $_POST['age'];
	$message .= "<p>Возраст {$age}</p>";
}

if (!empty($_FILES['file']['tmp_name'])) {
	$mail->addAttachment($_FILES['file']['tmp_name']);
}

$mail->Body = $message;

if (!$mail->send()) {
	$response = "Ошибка";
} else {
	$response = "Сообщение отправлено!";
}

$response = [
	'message' => $response
];

header("Content-type: application/json");

echo json_encode($response);
?>