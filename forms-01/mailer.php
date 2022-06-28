<?php

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;
use \PHPMailer\PHPMailer\SMTP;

try {
		
	require __DIR__.'/PHPMailer/PHPMailer.php';
	require __DIR__.'/PHPMailer/Exception.php';
	require __DIR__.'/PHPMailer/SMTP.php';

	require __DIR__.'/settings.php';

	$mail = new PHPMailer(true);

	//Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.yandex.ru';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'korolev.sergei22';                     //SMTP username
    $mail->Password   = PASS_YA;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	$mail->setLanguage('ru','PHPMailer/language');
	$mail->IsHTML(true);
	$mail->setFrom('korolev.sergei22@yandex.ru', 'Support 623030.ru');
	$mail->addAddress('korolev.sergei22@yandex.ru');
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
		$uploads_path = $_SERVER['DOCUMENT_ROOT']."/uploads/";
		$file_name = basename($_FILES['file']['name']);
		$full_path = $uploads_path.$file_name;
		move_uploaded_file($_FILES['file']['tmp_name'], $full_path);

		$mail->addAttachment($full_path);
	}

	$mail->Body = $message;

	// var_dump($mail->send());

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
} catch (Exception $e) {
	$response = [
		'message' => "Ошибка"
	];

	header("Content-type: application/json");

	echo json_encode($response);
	// var_dump($response);
}
?>