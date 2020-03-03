<?php 
	// icluir conexao banco
	include '../connection/connection.php';
	// inclusao script cpnfig.php
	include 'includes/config.php';
	// Atribui nome a pagina
	$page_title = ".: Painel Administrativo Tecfundy :.";	

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
	
	$fotoid = $_GET['id_foto'];
	
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
			<h1> Atualizar Foto </h1>
			
			<?php 
				$query = mysql_query("SELECT * FROM fotos WHERE id = $fotoid");
				
				while ($result = mysql_fetch_array($query)){
			?>			
			<!-- Formulario de cadastro -->
			<form action="update/atualizarfotos.php?id_foto=<?php echo $result['id']; ?>" id="form" name="form" method="post">
				<label>Foto postada:</label>
				<div class="ftupd"><img src="../public/upload/<?php echo $result['foto']; ?>" class="imgfoto" /></div>
				<br/>
				<label for="legfoto"> Legenda da foto: </label>
				<input type="text" id="legfoto" name="legfoto" value="<?php echo utf8_encode($result['nome']);?>" required />
				<br/>
				<br/><br/>
				
				<input type="submit" name="Atualizar" value="Atualizar" />								
			
			</form>
			<?php } ?>
		</div>
	</div>
	
	<!-- Rodape painel adm -->
	<?php include 'includes/template/rodape.php';?>
</body>

</html>