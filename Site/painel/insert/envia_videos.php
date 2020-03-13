<?php

// chama a função conexão
include ('../../connection/connection.php');

// Lista de tipos de arquivos permitidos
$tiposPermitidos= array('video/mp4', 'video/mpg', 'video/mpeg', 'video/mov', 'video/avi', 'video/flv', 'video/wmv');
$tiposPermitidosFoto= array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/jpg');

// recebe o arquivo de video
$videoName = $_FILES['video']['name'];
$videoType = $_FILES['video']['type'];
$videoTemp = $_FILES['video']['tmp_name'];
$videoError = $_FILES['video']['error'];

// recebe a imagem para o video
$fotoName = $_FILES['foto']['name'];
$fotoType = $_FILES['foto']['type'];
$fotoTemp = $_FILES['foto']['tmp_name'];
$fotoError = $_FILES['foto']['error'];

if ($videoError == 0 && $fotoError == 0) {
	// Verifica o tipo de arquivo enviado
	if (array_search($videoType, $tiposPermitidos) === false){
		echo "<script> alert('O tipo de arquivo para o video é inválido!'),window.open('../cad_videos.php','_self')</script>";
	} else if (array_search($fotoType, $tiposPermitidosFoto) === false) {
		echo "<script> alert('O tipo de arquivo para a foto é inválido!'),window.open('../cad_videos.php','_self')</script>";
	} else {
		$pasta = '../../gallery/upload/';
		// Pega a extensão do arquivo enviado
		$nameVideo = explode('.', $videoName);
		$nameVideo = end($nameVideo);	
		$extensaoVideo = strtolower($nameVideo);
		
		$nameFoto = explode('.', $fotoName);
		$nameFoto = end($nameFoto);	
		$extensaoFoto = strtolower($nameFoto);

		// Define o novo nome do arquivo usando um UNIX TIMESTAMP
		$nomeVideo = time() . '.' . $extensaoVideo;
		$nomeFoto = time() . '.' . $extensaoFoto;
		
		// Escapa os caracteres protegidos do MySQL (para o nome do usuário)
		$nomeMySQL = mysqli_real_escape_string($conexao, $_POST['nome']);
		$tag_vidro = isset($_POST['vidro']) ? $_POST['vidro'] : "N";
		$tag_polic = isset($_POST['polic']) ? $_POST['polic'] : "N";
		$tag_retra = isset($_POST['retra']) ? $_POST['retra'] : "N";
		$tag_img = "N";
		$tag_video = "S";
		$ativo = "S";

		$uploadVideo = move_uploaded_file($videoTemp, $pasta . $nomeVideo);
		$uploadFoto = move_uploaded_file($fotoTemp, $pasta . $nomeFoto);
		
		// Verifica se o arquivo foi movido com sucesso
		if ($uploadVideo == true && $uploadFoto == true) { 
			// Cria uma query MySQL
			$sql = "INSERT INTO gallery 
						(`nome`,`foto`,`video`,`tag_img`,`tag_video`,`tag_vidro`,`tag_polic`,`tag_retra`,`ativo`) 
					VALUES 
						('$nomeMySQL', '$nomeFoto', '$nomeVideo', '$tag_img', '$tag_video', '$tag_vidro', '$tag_polic', '$tag_retra', '$ativo')";
			
			// Executa a consulta
			$query = mysqli_query($conexao, $sql);
			
			if ($query == true) {
				echo "<script> alert('Video postado com sucesso!'),window.open('../cad_videos.php','_self')</script>";
			}
		} else {
			echo "<script> alert('Problema com envio do video!'),window.open('../cad_videos.php','_self')</script>";
		}
	}
} else if($arqError == 1){
	echo "<script> alert('Arquivo maior que 7MB!'),window.open('../cad_videos.php','_self')</script>";
} else {
	echo "<script> alert('Ocorreu algum erro com o upload, por favor tente novamente!'),window.open('../cad_videos.php','_self')</script>";
}

?>