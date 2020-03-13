<?php

// chama a função conexão
include ('../../connection/connection.php');

// Lista de tipos de arquivos permitidos
$tiposPermitidos= array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/jpg');
// Tamanho máximo (em bytes)
$tamanhoPermitido = 1024 * 500; // 500 Kb

// O nome original do arquivo no computador do usuário
$arqName = $_FILES['arquivo']['name'];
// O tipo mime do arquivo. Um exemplo pode ser "image/gif"
$arqType = $_FILES['arquivo']['type'];
// O tamanho, em bytes, do arquivo
$arqSize = $_FILES['arquivo']['size'];
// O nome temporário do arquivo, como foi guardado no servidor
$arqTemp = $_FILES['arquivo']['tmp_name'];
// O código de erro associado a este upload de arquivo
$arqError = $_FILES['arquivo']['error'];

if ($arqError == 0) {
	// Verifica o tipo de arquivo enviado
	if (array_search($arqType, $tiposPermitidos) === false) {
		echo 'O tipo de arquivo enviado é inválido!';
		// Verifica o tamanho do arquivo enviado
	} else if ($arqSize > $tamanhoPermitido) {
		echo 'O tamanho do arquivo enviado é maior que o limite!';
		// Não houveram erros, move o arquivo
	} else {
		$pasta = '../../gallery/upload/';
		// Pega a extensão do arquivo enviado
		$name = explode('.', $arqName);
		$name = end($name);	
		$extensao = strtolower($name);

		// Define o novo nome do arquivo usando um UNIX TIMESTAMP
		$nome = time() . '.' . $extensao;
		
		// Escapa os caracteres protegidos do MySQL (para o nome do usuário)
		$nomeMySQL = mysqli_real_escape_string($conexao, $_POST['nome']);
		$tag_vidro = isset($_POST['vidro']) ? $_POST['vidro'] : "N";
		$tag_polic = isset($_POST['polic']) ? $_POST['polic'] : "N";
		$tag_retra = isset($_POST['retra']) ? $_POST['retra'] : "N";
		$tag_img = "S";
		$tag_video = "N";
		$ativo = "S";

		$upload = move_uploaded_file($arqTemp, $pasta . $nome);
		
		// Verifica se o arquivo foi movido com sucesso
		if ($upload == true) { 
			// Cria uma query MySQL
			$sql = "INSERT INTO gallery 
						(`nome`,`foto`,`tag_img`,`tag_video`,`tag_vidro`,`tag_polic`,`tag_retra`,`ativo`) 
					VALUES 
						('$nomeMySQL', '$nome', '$tag_img', '$tag_video', '$tag_vidro', '$tag_polic', '$tag_retra', '$ativo')";
			
			// Executa a consulta
			$query = mysqli_query($conexao, $sql);
			
			if ($query == true) {
				echo "<script> alert('Foto postada com sucesso!'),window.open('../cad_fotos.php','_self')</script>";
			}
		}
	}
} else if($arqError == 1){
	echo 'Arquivo maior que 7MB!';
} else {
	echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
}

?>