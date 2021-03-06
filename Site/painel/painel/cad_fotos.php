<?php 
	// inclus�o script cpnfig.php
	include 'includes/config.php';
	
	// Atribui nome a pagina
	$page_title = ".: Painel Administrativo Tecfundy :.";	
/*
	// A sessão precisa ser iniciada em cada página diferente
	if (!isset($_SESSION)) session_start();
	
	// Verifica se não há a variável da sessão que identifica o usuário
	if(!isset($_SESSION['UsuarioID'])){
		// Destrói a sessão por segurança
		session_destroy();
		// Redireciona o visitante de volta pro login
		echo "<script> alert('Acesso Negado! Por favor realizar o Login!'),window.open('index.php','_self')</script>";
		exit;
	}
*/	
?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">	
	<title><?=APP_TITLE ?> - <?=$page_title?></title>
    <meta name="webauthor" content="Evandro Cassio Cortiano" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="includes/css/style.css" />
	<link rel="stylesheet" type="text/css" href="includes/css/style_agenda.css" />
	
</head>
<body>
	<!-- Topo painel adm -->
	<?php include 'includes/template/top.php'; ?>
	
	<!-- Menu painel adm -->
	<?php include 'includes/template/menu.php'; ?>
	
	<!-- Conteudo painel adm -->
	<div id="cont">
		<div id="cad_agenda">
			<h1> Cadastrar Foto </h1>
			
			<!-- Formulario de cadastro -->
			<form action="insert/envia_fotos.php" id="form" name="form" method="post">
				<label for="link"> Link da foto: </label>
				<input type="text" id="link" name="link" required />
				<br/>
				<label for="legfoto"> Legenda da foto: </label>
				<input type="text" id="legfoto" name="legfoto" required />
				<br/>
				<br/><br/>
				
				<input type="submit" name="Cadastrar" value="Cadastrar" />								
			
			</form>
		</div>
	</div>
	
	<!-- Rodape painel adm -->
	<?php include 'includes/template/rodape.php';?>
</body>

</html>