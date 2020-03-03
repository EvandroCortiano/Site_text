<?php

	// chama a função conexão
	include ('../../connection/connection.php');
	
	// Recebe na variavel txt o texto escrito no formulario
	$data = $_POST['data'];
	$evento = utf8_decode($_POST['evento']);
	$local = utf8_decode($_POST['local']);
	$hora = $_POST['hora'];
	$obs = utf8_decode($_POST['obs']);
	
	// Query responsavel pela inserção dos dados no banco de dados
	$query = "insert into agenda (id_agenda, data, evento, local, horario, obs_agenda) 
			  VALUES ('', '$data', '$evento', '$local', '$hora', '$obs')";
	mysql_query($query, $conexao) or die ("Nao foi possivel inserir os dados");
	
	// echo retorna atualizando a pagina com os dados do banco de dados
	echo "<script> parent.location.href='../adm_agenda.php'</script>";

?>