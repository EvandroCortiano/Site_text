<?php

	include('../../connection/connection.php');
			
	$userid = $_GET['idusers'];
	
	$sql2="DELETE FROM usuarios WHERE id='$userid'";
	mysqli_query($conexao, $sql2);
				
	echo "<script> alert('Exclusao realizada com sucesso! Esse usuario nao tem mais acesso ao sistema!'),window.open('../adm_users.php','_self')</script>";


?>