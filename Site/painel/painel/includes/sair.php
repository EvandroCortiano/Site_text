<?php

	session_start(); // Inicia a sessão
	session_destroy(); // Destrói a sessao limpando todos os valores salvos
	header("Location: ../index.php"); exit; // Redireciona o visitante
	
?>