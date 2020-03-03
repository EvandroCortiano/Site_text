<?php

	// chama a função conexão
	include ('../../connection/connection.php');
	
	// Recebe na variavel txt o texto escrito no formulario
	$link = $_POST['link'];
	$legenda = utf8_decode($_POST['legfoto']);
	
	// Query responsavel pela inserção dos dados no banco de dados
	$query = "insert into fotos (id_foto, link_foto, legfoto) 
			  VALUES ('', '$link', '$legenda')";
	mysql_query($query, $conexao) or die ("Nao foi possivel inserir os dados");
	
	// echo retorna atualizando a pagina com os dados do banco de dados
	echo "<script> parent.location.href='../adm_fotos.php'</script>";

?>