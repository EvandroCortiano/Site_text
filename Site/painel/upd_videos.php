<?php 
	// icluir conexao banco
	include '../connection/connection.php';
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
			<h1> Atualizar Video </h1>
			
			<?php 
				$query = mysqli_query($conexao, "SELECT * FROM gallery WHERE id = $fotoid");
				
				while ($result = mysqli_fetch_array($query)){
			?>			
			<!-- Formulario de cadastro -->
			<form action="update/atualizarvideos.php?id_foto=<?php echo $result['id']; ?>" id="form" name="form" method="post">
				<div style="width: 50%;float:left;">
					<label>Video postado:</label>
					<div class="ftupd">
						<video width="300" height="180" controls>
							<source src="../gallery/upload/<?php echo $result['video']; ?>" type="video/mp4">
						</video>
					</div>
					<label>Foto postado:</label>
					<div class="ftupd"><img src="../gallery/upload/<?php echo $result['foto']; ?>" class="imgfoto" /></div>
				</div>
				<div style="width: 50%;float:right;">
				<label for="legfoto"> Legenda do video: </label>
				<input type="text" id="legfoto" name="legfoto" value="<?php echo utf8_encode($result['nome']);?>" required />
				<br/>
				<br/>
				<label for="tags">Informação do video:</label>
				<br/>
				<div style="padding: 5px 0px 10px 20px;">
					<label for="vidro" style="color:#0d12ad;">Vidro:</label>
					<input type="checkbox" name="vidro" id="vidro" value="S"
						<?php if($result['tag_vidro'] == "S"){
							echo "checked";
						} ?>>
					<label for="sim">Sim</label>
						<br>
					<label for="policarbonato" style="color:#0d12ad;">Policarbonato:</label>
					<input type="checkbox" name="polic" id="polic" value="S"
						<?php if($result['tag_polic'] == "S"){
							echo "checked";
						} ?>>
					<label for="sim">Sim</label>
						<br>
					<label for="retrateis" style="color:#0d12ad;">Retráteis:</label>
					<input type="checkbox" name="retra" id="retra" value="S"
						<?php if($result['tag_retra'] == "S"){
							echo "checked";
						} ?>>
					<label for="sim">Sim</label>
				</div>
				<label for="ativo">Ativo:</label>
				<input type="checkbox" name="ativo" id="ativo" value="S"
					<?php if($result['ativo'] == "S"){
						echo "checked";
					} ?>>
				</div>
				<div style="clear: both;padding-top: 20px;">
					<input type="submit" name="Atualizar" value="Atualizar" />	
					<a href="lista_videos.php" class="btn_action_default" style="float:right;">Listar Videos</a>								
				</div>
			
			</form>
			<?php } ?>
		</div>
	</div>
	
	<!-- Rodape painel adm -->
	<?php include 'includes/template/rodape.php';?>
</body>

</html>