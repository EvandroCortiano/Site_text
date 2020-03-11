<?php 
	// inclus�o script cpnfig.php
	include 'includes/config.php';
	// Atribui nome a pagina
	$page_title = ".: Painel Administrativo Griff Coberturas :.";	

?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">	
	<title><?=APP_TITLE ?> - <?=$page_title?></title>
    <meta name="webauthor" content="Evandro Cassio Cortiano" />
	
	<link rel="stylesheet" type="text/css" href="includes/css/style.css" />
	
</head>
<body>
	<!-- TOP -->
	<?php include 'includes/template/top_login.php';?>

	<div id="login">
		<!-- Formulário de Login -->
		<form action="includes/validacao.php" method="post">
			<h3> .: Dados para login :.</h3>

			<label for="txUsuario">Usuário:</label>
			<input type="text" name="usuario" id="txUsuario" maxlength="25" />
			<br />
			<label for="txSenha">Senha:</label>
			<input type="password" name="senha" id="txSenha" />
			<br />
			<input type="submit" value="Entrar" />
		</form>
	</div>
	
	<!-- RODAPE -->
	<?php include 'includes/template/rodape.php'; ?>
</body>
</html>