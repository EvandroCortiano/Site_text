<?php
	// inclusao script cpnfig.php
	include 'includes/config.php';
	// Atribui nome a pagina
	$page_title = ".: Painel Administrativo Griff Coberturas :.";
	
	// Chama arquivo de conexao com o banco de dados
	include ('../connection/connection.php');

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
		<h1> Videos Cadastrados:</h1>
		<table>
			<tr  class="fonttitulo">
				<td width="430px">Link</td> 
				<td width="250px">Legenda</td> 
				<td width="50px"><font size="1">Excluir|</font></td> 
				<td width="55px"><font size="1">Atualizar</font></td>
			<tr>			
				<?php 
					// verifica a pagina atual caso seja informada na URL, senão atribui como primeiro
					$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
					
					// seleciona todos os itens da tabela
					$sql_select = "select * from fotos";
					$fotos = mysql_query($sql_select);
					
					// conta o total de itens
					$total = mysql_num_rows($fotos);
					
					//seta a quantidade de intens por página, neste caso, 2 itens
					$registro = 9;
					
					// calcula o número de páginas arredondando o resultado para cima
					$numPaginas = ceil($total/$registro);
					
					// variavel para calcular o início da visualizacao com base na página atual
					$inicio = ($registro*$pagina)-$registro;
					
					// seleciona os itens por página
					$sql_select = "SELECT * FROM fotos ORDER BY id DESC LIMIT $inicio,$registro";
					$fotos = mysql_query($sql_select);
					$total = mysql_num_rows($fotos);
					
					// declara modd para uso das cores de linhas
					$modd = 0;
					
					//exibe os produtos selecionados
					while ($result = mysql_fetch_array($fotos)){ ?>
						
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
							<td> <img src="../public/upload/<?php echo $result['foto']; ?>" class="imgfoto" /></td>
							<td> <?php echo utf8_encode($result['nome']);?></td>
							<td align="center"><a href="delete/excluirfoto.php?id_foto=<?php echo $result['id'] ?>&nm_foto=<?php echo $result['foto'] ?>" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir esta foto?')"><img src="imagens/excluir.png" width="20px" /></a></td>
							<td align="center"><a href="upd_videos.php?id_foto=<?php echo $result['id'] ?>"><img src="imagens/atualizar.png" width="20px" /></a></td>
						</tr>
					<?php } ?>
				<tr>
					<td colspan="4" class="pagi_agenda" >		
					<?php 
					// exibe a paginação
					for($i = 1; $i < $numPaginas + 1; $i++){
						echo "&nbsp"."<a href='lista_fotos.php?pagina=$i'>".$i."</a>";
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