<?php

// chama a função conexão
include ('../../connection/connection.php');

// Recebe o id da linha a atualizar
$videoid = $_GET['id_video'];

// Recebe na variavel txt o texto escrito no formulario
$legenda = utf8_decode($_POST['legvideo']);

// Query responsavel pela atualização dos dados no banco de dados
$query = "UPDATE videos SET legvideo='$legenda' WHERE id_video='$videoid'";

mysql_query($query, $conexao) or die ("Nao foi possivel inserir os dados");

// echo retorna atualizando a pagina com os dados do banco de dados
echo "<script> parent.location.href='../lista_videos.php'</script>";

?>