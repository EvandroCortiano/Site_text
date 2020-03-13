<?php 
	// inclusao script cpnfig.php
	include 'includes/config.php';
	
	// Atribui nome a pagina
	$page_title = $title_sys;	

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
			<h1> Cadastrar Video </h1>
			
			<!-- Formulario de cadastro -->
			<form action="insert/envia_videos.php" id="form" method="post" enctype="multipart/form-data">
			
				<label for="txFoto"> Video: </label>
				<input type="file" name="video" id="txFoto" required />
				<br/>
				<label for="txFoto"> Foto Capa: </label>
				<input type="file" name="foto" id="txFoto" required />
				<br/>
				<label for="txNome"> Legenda da foto: </label>
				<input type="text" name="nome" id="txNome" required />
				<br/>
				<br/>
				<label for="tags">Informação do video:</label>
				<br/>
				<div style="padding: 5px 0px 10px 20px;">
					<label for="vidro" style="color:#0d12ad;">Vidro:</label>
					<input type="checkbox" name="vidro" id="vidro" value="S">
					<label for="sim">Sim</label>
						<br>
					<label for="policarbonato" style="color:#0d12ad;">Policarbonato:</label>
					<input type="checkbox" name="polic" id="polic" value="S">
					<label for="sim">Sim</label>
						<br>
					<label for="retrateis" style="color:#0d12ad;">Retráteis:</label>
					<input type="checkbox" name="retra" id="retra" value="S">
					<label for="sim">Sim</label>
				</div>			
				<input type="submit" name="Cadastrar" value="Cadastrar" />
				<a href="lista_videos.php" class="btn_action_default" style="float:right;">Listar Videos</a>								
			
			</form>
		</div>
	</div>
	
	<!-- Rodape painel adm -->
	<?php include 'includes/template/rodape.php';?>
</body>

</html>