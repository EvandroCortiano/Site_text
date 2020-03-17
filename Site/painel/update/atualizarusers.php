<?php

	// chama a função conexão
	include ('../../connection/connection.php');
	
	// Recebe o id para atualizar
	$id = $_GET['idusers'];
	
	// Recebe na variavel txt o texto escrito no formulario
	$nome = $_POST['adm_nome'];
	$usuario = $_POST['adm_user'];
	$senha = sha1($_POST['adm_senha']);
	$perfil = $_POST['adm_perfil'];

	// Query responsavel pela atualização dos dados no banco de dados
	$query = "UPDATE usuarios SET nome='$nome', usuario='$usuario', senha='$senha', nivel='$perfil' WHERE id='$id'";
	
	mysqli_query($conexao, $query) or die ("Nao foi possivel inserir os dados");
	
	// echo retorna atualizando a pagina com os dados do banco de dados
	echo "<script> parent.location.href='../lista_users.php'</script>";

?>
