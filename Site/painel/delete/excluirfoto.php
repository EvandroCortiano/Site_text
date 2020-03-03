<?php

	include('../../connection/connection.php');
			
	$fotoid = $_GET['id_foto'];
	$foto = $_GET['nm_foto'];
	
	$sql2="delete from fotos where id='$fotoid'";
	mysql_query($sql2,$conexao);
	
	chmod("../../public/upload", 0777);
	if(unlink("../../public/upload/$foto"));
	
	echo "<script> alert('Exclusao realizada com sucesso!'),window.open('../lista_fotos.php','_self')</script>";


?>