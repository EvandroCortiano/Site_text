<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    // recebe os valores do formulario
    $name = @trim(stripslashes($_POST['fname'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['phone'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    // cria cabecalho do email
    $email_from = $email;
    $email_to = 'contato@griffcoberturas.com.br';

    // cria corpo do email
    $body = 'Name: ' . $name . "\n\n" . 
            'Email: ' . $email . "\n\n" . 
            'Subject: ' . $subject . "\n\n" . 
            'Message: ' . $message;

    // realiza o envio
    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    // finaliza processo
    echo json_encode($status);
    die;