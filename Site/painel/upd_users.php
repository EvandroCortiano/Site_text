<?php 
	// incluir conexao
	include '../connection/connection.php';
	// inclusao script cpnfig.php
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
	
	$userid = $_GET['idusers'];
	
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
			<h1> Atualizar Usuários </h1>
			
			<?php 
				$query = mysql_query("SELECT * FROM usuarios WHERE id = $userid");
				
				while ($result = mysql_fetch_array($query)){
			?>
			<!-- Formulario de cadastro -->
			<form action="update/atualizarusers.php?idusers=<?php echo $result['id']; ?>" id="form" name="form" method="post">
				<label for="adm_nome"> Nome usuário: </label>
				<input type="text" id="adm_nome" name="adm_nome" value="<?php echo utf8_encode($result['nome']); ?>" required />
				<br/>
				<label for="adm_user"> Usuário: </label>
				<input type="text" id="adm_user" name="adm_user" value="<?php echo utf8_encode($result['usuario']); ?>" required />
				<br/>
				<label for="adm_senha"> Senha: </label>
				<input type="password" id="adm_senha" name="adm_senha" required />
				<br />
				<label for="atencao">Para atualizar é preciso inserir a senha ou registrar uma nova senha, no campo senha!</label>
				<br/>
				<label for="adm_perfil"> Perfil do Usuário: </label>
				<select name="adm_perfil">
					<?php 
						if ($result['nivel'] == 1) {
							$perfil = "Usuario Normal";
							$nv = "1";
						} else if ($result['nivel'] == 2) {
							$perfil = "Administrador";
							$nv = "2";
						} else {
							$perfil = "Esse nivel não existe!";
						}					
					?>
					<option value="<?php $nv; ?>"> <?php echo $perfil; ?> </option>
					<option value="selected"> --- </option>
					<option value="1">Usuario Normal</option>
					<option value="2">Administrador</option>

				</select>
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