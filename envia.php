<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$nome = utf8_encode($_POST["nome"]);
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

ini_set('default_charset','UTF-8');

$mail = new PHPMailer(true);

try {
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();

	//SMTP GMAIL - > smtp.gmail.com

	$mail->Host = 'smtp.live.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'Mateus29vx@hotmail.com';
	$mail->Password = 'Ma29052003';

	// SE NÃO FOR, MUDE A PORT PARA 465
	
	$mail->Port = 25;

	$mail->setFrom('Mateus29vx@hotmail.com');
	$mail->addAddress('Mateus29vx@hotmail.com');
	
	$mail->isHTML(true);
	$mail->Subject = 'Pedido de Orçamento';
	$mail->Body = 'Chegou o email o orçamento <strong>'. $nome .'</strong><br>Email: '. $email .' <br> Mensagem:'. $mensagem. '';
	$mail->AltBody = 'Chegou o email teste do '. $nome .'  Email: '. $email .'    Mensagem:'. $mensagem. '';

	if($mail->send()) {
		
		echo "<script>window.location='index.html'</script>";
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}