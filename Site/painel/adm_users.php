<?php 
	// inclusao script cpnfig.php
	include 'includes/config.php';
	// Atribui nome a pagina
	$page_title = $title_sys;

	// A sessão precisa ser iniciada em cada página diferente
	if (!isset($_SESSION)) session_start();
	
	$nivel_necessario = 2;
	
	// Verifica se não há a variável da sessão que identifica o usuário
	if(!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)){
		// Destrói a sessão por segurança
		// session_destroy();
		// Redireciona o visitante de volta pro login
		echo "<script> alert('Acesso Negado!'),window.open('principal.php','_self')</script>";
		exit;
	}
	
?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">	
	<title><?=APP_TITLE ?> - <?=$page_title?></title>
    <meta name="webauthor" content="Evandro Cassio Cortiano" />
	
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
		<h1>Administrar Usuários</h1>
		
		<div class="botoes"> 
			<a href="cad_users.php">
				<div class="btcad">
					<div><img src="imagens/cad_foto.png"/>
						 <h2>Cadastrar</h2>
					</div>
				</div>
			</a>
			<a href="lista_users.php">
				<div class="btlist">
					<div><img src="imagens/list_foto.png"/></div>
						 <h2>Listar</h2>
				</div>
			</a>
		</div>
	
	</div>
	
	<!-- Rodape painel adm -->
	<?php include 'includes/template/rodape.php';?>
</body>

</html>