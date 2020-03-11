<?php

// chama a função conexão
include ('../../connection/connection.php');

// Recebe o id da linha a atualizar
$fotoid = $_GET['id_foto'];

// Recebe na variavel txt o texto escrito no formulario
$legenda = utf8_decode($_POST['legfoto']);

// Query responsavel pela atualização dos dados no banco de dados
$query = "UPDATE fotos SET legfoto='$legenda' WHERE id_foto='$fotoid'";

mysql_query($query, $conexao) or die ("Nao foi possivel inserir os dados");

// echo retorna atualizando a pagina com os dados do banco de dados
echo "<script> parent.location.href='../lista_fotos.php'</script>";

?>