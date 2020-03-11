<?php
	
	// Verifica se houve POST e se o usuário ou senha é(são) vazio(s)
	if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))){
		header("Location: ../index.php"); exit;
	}
	
	// Conectar ao servidor MySQL
	include '../../connection/connection.php';
	
	// Traz o usuario e senha digitado
	$usuario = mysql_real_escape_string($_POST['usuario']);
	$senha = mysql_real_escape_string($_POST['senha']);
	
	// Validacao do usuario/senha digitados
	$sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '". $usuario ."') AND (`senha` = '". sha1($senha) ."') LIMIT 1";
	$query = mysql_query($sql);
	if (mysql_num_rows($query) != 1) {
		// Mensagem de erro quando os dados são inválidos e/ou o usúario não foi encontrado
		echo "<script> alert('Login Errado! Tente Novamente!'),window.open('../index.php','_self')</script>";
		exit;
	} else {
		// Salva os dados encontrados na variável $resultado
		$resultado = mysql_fetch_assoc($query);
		
		// Se a sessão não existir, inicia uma
		if (!isset($_SESSION)) session_start();
		
		// Salva os dados encontrados na sessão
		$_SESSION['UsuarioID'] = $resultado['id'];
		$_SESSION['UsuarioNome'] = $resultado['nome'];
		$_SESSION['UsuarioNivel'] = $resultado['nivel'];
		
		// Redireciona o visitante
		header("Location: ../principal.php"); exit;
	}

?>