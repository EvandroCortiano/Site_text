<?php

	include('../../connection/connection.php');
			
	$userid = $_GET['idusers'];
	
	$sql2="delete from usuarios where id='$userid'";
	mysql_query($sql2,$conexao);
				
	echo "<script> alert('Exclusao realizada com sucesso! Esse usuario nao tem mais acesso ao sistema!'),window.open('../adm_users.php','_self')</script>";


?>