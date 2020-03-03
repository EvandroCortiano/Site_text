<div id="top_adm">
	<div id="cont_top_adm" >
		<label for="empresa_adm" class="font_top clear" >
			Painel Administrativo
		</label>
	
		<div class="logo_adm" >
			<a href="principal.php">
				<img src="imagens/logo.png" alt="Cantora Daniele Janzen" />
			</a>
		</div>
	
		<div class="user">
			<span class="font_user">Bem vindo, <?php //echo $_SESSION['UsuarioNome']; ?>!</span>
			<span class="font_hora"><?php echo $data_hora ?> </span>
			<span class="font_sair"><a href="includes/sair.php">Sair</a></span> 
		</div>
	</div>
</div>