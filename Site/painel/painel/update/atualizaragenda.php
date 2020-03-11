<?php

	// chama a função conexão
	include ('../../connection/connection.php');
	
	// Recebe o id da linha a atualizar
	$id = $_GET['id_agenda'];
	
	// Recebe na variavel txt o texto escrito no formulario
	$data = $_POST['data'];
	$evento = utf8_decode($_POST['evento']);
	$local = utf8_decode($_POST['local']);
	$hora = $_POST['hora'];
	$obs = utf8_decode($_POST['obs']);
	
	// Query responsavel pela atualização dos dados no banco de dados
	$query = "UPDATE agenda SET data='$data', evento='$evento', local='$local', horario='$hora', obs_agenda='$obs' WHERE id_agenda='$id'";
	
	mysql_query($query, $conexao) or die ("Nao foi possivel inserir os dados");
	
	// echo retorna atualizando a pagina com os dados do banco de dados
	echo "<script> parent.location.href='../lista_agenda.php'</script>";

?>