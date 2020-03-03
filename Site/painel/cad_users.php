<?php 
	// inclus�o script cpnfig.php
	include 'includes/config.php';
	// Atribui nome a pagina
	$page_title = ".: Painel Administrativo Tecfundy :.";	

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
			<h1> Cadastrar Usuários </h1>
			
			<!-- Formulario de cadastro -->
			<form action="insert/envia_users.php" id="form" name="form" method="post">
				<label for="adm_nome"> Nome usuário: </label>
				<input type="text" id="adm_nome" name="adm_nome" required />
				<br/>
				<label for="adm_user"> Usuário: </label>
				<input type="text" id="adm_user" name="adm_user" required />
				<br/>
				<label for="adm_senha"> Senha: </label>
				<input type="password" id="adm_senha" name="adm_senha" required />
				<br/>
				<label for="adm_email"> Email: </label>
				<input type="text" id="adm_email" name="adm_email" required />
				<br/>
				<label for="adm_perfil"> Perfil do Usuário: </label>
				<select name="adm_perfil" >
					<option value="selected"> Selecionar </option>
					<option value="1">Usuario Normal</option>
					<option value="2">Administrador</option>

				</select>
				<br/><br/>
				
				<input type="submit" name="Cadastrar" value="Cadastrar" />								
			
			</form>
		</div>
	</div>
	
	<!-- Rodape painel adm -->
	<?php include 'includes/template/rodape.php';?>
</body>

</html>