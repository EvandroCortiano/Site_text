<?php

	// chama a função conexão
	include ('../../connection/connection.php');
	
	// Recebe na variavel txt o texto escrito no formulario
	$nome = $_POST['adm_nome'];
	$usuario = $_POST['adm_user'];
	$senha = sha1($_POST['adm_senha']);
	$email = sha1($_POST['adm_email']);
	$perfil = $_POST['adm_perfil'];

	// Query responsavel pela inserção dos dados no banco de dados
	$query = "insert into usuarios (id, nome, usuario, senha, nivel, email) 
			  VALUES ('', '$nome', '$usuario', '$senha', '$perfil', '$email')";
	mysql_query($query, $conexao) or die ("Nao foi possivel inserir os dados");
	
	// echo retorna atualizando a pagina com os dados do banco de dados
	echo "<script> parent.location.href='../adm_users.php'</script>";

?>