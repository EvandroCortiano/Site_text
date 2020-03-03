<?php

	include('../../connection/connection.php');
			
	$fotoid = $_GET['id_foto'];
	
	$sql2="delete from fotos where id_foto='$fotoid'";
	mysql_query($sql2,$conexao);
				
	echo "<script> alert('Exclusao realizada com sucesso!'),window.open('../lista_fotos.php','_self')</script>";


?>