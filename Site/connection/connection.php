<?php
	
	//dados para acessar via local
	$server = 'localhost';
	$login = 'root';
	$senha = 'andromeda';
	$banco = 'griff';

	//dados para acessar via 
	// $server = 'localhost';
	// $login = 'u147040911_usernamegriff';
	// $senha = 'BtO]XDGw';
	// $banco = 'u147040911_griff';
	
	//conectar com o servidor
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$conexao = mysqli_connect($server,$login,$senha,$banco);

	//Caso ocorra erro no acesso
	if (!$conexao)
		die ("<h1>Falha a conectar com o Banco de Dados!</h1>");

	//Conecta ao banco
	// mysql_select_db("griff1br",$conexao);
	// mysqli_select_db("griffcoberturas",$conexao);
?>