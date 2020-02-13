<?php
    // recebe os valores do formulario
    $name = $_POST['fname']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $message = $_POST['message']; 

$contato =  "Mensagem de contato via site!";

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados a serem enviados
$corpo = "Contato via site, por: \n";
$corpo .= "Nome: " . $name . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Telefone: " . $phone . "\n";
$corpo .= "Mensagem: " . $message . "\n";

$email_to = 'contato@griffcoberturas.com.br';

$status = mail($email_to, $contato, $corpo, $headers); //enviando o email

if($status){
	echo "<script> alert('Contato enviado com sucesso.'); </script>"; //verifica se foi enviado o email com sucesso
}
else{
	echo "<script> alert('Falha ao enviar a solicitacao.'); </script>"; //se houve algum erro de envio.
}
echo "<script> window.location.href = 'http://griffcoberturas.com.br';</script>";