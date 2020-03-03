<?php
	
	//dados para acessar o banco
	$server = 'localhost';
	$login = 'root';
	$senha = 'root';

	//dados para acessar o banco
	// $server = 'mysql.griffcoberturas.com.br';
	// $login = 'griff1br';
	// $senha = '27grif23';
	
	//conectar com o servidor
	$conexao = mysql_connect($server,$login,$senha);

	//Caso ocorra erro no acesso
	if (!$conexao)
		die ("<h1>Falha a conectar com o Banco de Dados!</h1>");

	//Conecta ao banco
	// mysql_select_db("griff1br",$conexao);
	mysql_select_db("griffcoberturas",$conexao);
?>