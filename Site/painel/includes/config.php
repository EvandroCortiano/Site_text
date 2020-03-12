<?php

// Define o nome do site (não mexer na primeira parte do código, onde está escrito APP_TITLE)
define("APP_TITLE","Griff Coberturas");

	// Hora e data condificada para o Brasil
	$timestamp = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
	$data_hora = gmdate("d/m/Y H:i", $timestamp);

	$title_sys = ".: Griff Coberturas :.";

?>