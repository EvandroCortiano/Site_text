<?php

	include('../../connection/connection.php');
			
	$fotoid = $_GET['id_foto'];
	$foto = $_GET['nm_foto'];
	
	$sql2="DELETE FROM gallery WHERE id = $fotoid;";
	$retsult = mysqli_query($conexao, $sql2);
	
	if($retsult === true){
		chmod("../../gallery/upload", 0777);
		if(unlink("../../gallery/upload/$foto"));
		
		echo "<script> alert('Exclusao realizada com sucesso!'),window.open('../lista_fotos.php','_self')</script>";
	} else {
		echo "<script> alert('Erro ao excluir foto!'),window.open('../upd_fotos.php?id_foto=$fotoid.php','_self')</script>";
	}
?>