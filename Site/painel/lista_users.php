<?php
	// inclusao script cpnfig.php
	include 'includes/config.php';
	// Atribui nome a pagina
	$page_title = ".: Painel Administrativo Tecfundy :.";
	
	// Chama arquivo de conexao com o banco de dados
	include ('../connection/connection.php');

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
		<h1> Usuários Cadastradas:</h1>
		<table>
			<tr  class="fonttitulo">
				<td width="200px">Nome Do Usuário</td> 
				<td width="200px">Usuario</td> 
				<td width="200px">Perfil</td>  
				<td width="50px"><font size="1">Excluir|</font></td> 
				<td width="55px"><font size="1">Atualizar</font></td>
			<tr>			
				<?php 
					// verefica a pagina atual caso seja informada na URL, senão atribui como primeiro
					$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
					
					// seleciona todos os itens da tabela
					$sql_select = "select * from usuarios ";
					$users = mysqli_query($conexao, $sql_select);
					
					// conta o total de itens
					$total = mysqli_num_rows($users);
					
					//seta a quantidade de intens por página, neste caso, 2 itens
					$registro = 8;
					
					// calcula o número de páginas arredondando o resultado para cima
					$numPaginas = ceil($total/$registro);
					
					// variavel para calcular o início da visualizacao com base na página atual
					$inicio = ($registro*$pagina)-$registro;
					
					// seleciona os itens por página
					$sql_select = "SELECT * FROM usuarios WHERE id <> 1 ORDER BY id DESC LIMIT $inicio,$registro";
					$users = mysqli_query($conexao, $sql_select);
					$total = mysqli_num_rows($users);
					
					// declara modd para uso das cores de linhas
					$modd = 0;
					
					//exibe os produtos selecionados
					while ($result = mysqli_fetch_array($users)){ ?>
						
						<!-- Cada linha de resultado com uma cor -->
						<?php 						
							// IF para alternar as cores das linhas							
							if ($modd % 2 == 0){
								$corlinha = "#fff";
								} else {
								$corlinha = "#eee";
								}
							$modd++;	
						?> 
		
						<tr class="fontdados" bgcolor="<?php echo $corlinha ?>">
							<td> <?php echo $result['nome']; ?></td>
							<td> <?php echo $result['usuario'];?></td>
							<?php 
								if ($result['nivel'] == 1) {
									$perfil = "Usuario Normal";
								} else if ($result['nivel'] == 2) {
									$perfil = "Administrador";
								} else {
									$perfil = "Esse nivel não existe!";
								}					
							?>
							<td> <?php echo $perfil;?></td>
							<td align="center"><a href="delete/excluirusers.php?idusers=<?php echo $result['id']; ?>" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir este Usuário?')"><img src="imagens/excluir.png" width="20px" /></a></td>
							<td align="center"><a href="upd_users.php?idusers=<?php echo $result['id']; ?>"><img src="imagens/atualizar.png" width="20px" /></a></td>
						</tr>
					<?php } ?>
				<tr>
					<td colspan="5" class="pagi_agenda" >		
					<?php 
					// exibe a paginação
					for($i = 1; $i < $numPaginas + 1; $i++){
						echo "&nbsp"."<a href='lista_users.php?pagina=$i'>".$i."</a>";
					}
				?>
					</td>
				</tr>
		</table>	
	</div>
	
	<!-- Rodape painel adm -->
	<?php include 'includes/template/rodape.php';?>
</body>

</html>