<?php

// chama a função conexão
include ('../../connection/connection.php');

// Recebe o id da linha a atualizar
$fotoid = $_GET['id_foto'];

// Recebe na variavel txt o texto escrito no formulario
$legenda = utf8_decode($_POST['legfoto']);
$tag_vidro = isset($_POST['vidro']) ? $_POST['vidro'] : "N";
$tag_polic = isset($_POST['polic']) ? $_POST['polic'] : "N";
$tag_retra = isset($_POST['retra']) ? $_POST['retra'] : "N";
$ativo = isset($_POST['ativo']) ? $_POST['ativo'] : "N";

// Query responsavel pela atualização dos dados no banco de dados
$query = "UPDATE gallery SET 
            nome = '$legenda',
            tag_vidro = '$tag_vidro',
            tag_polic = '$tag_polic',
            tag_retra = '$tag_retra',
            ativo = '$ativo'
          WHERE id = $fotoid;";

// mysqli_query($conexao, $query) or die ("Nao foi possivel inserir os dados");
$result = mysqli_query($conexao, $query);

if($result === true){
    // echo retorna atualizando a pagina com os dados do banco de dados
    echo "<script> parent.location.href='../lista_fotos.php'</script>";
} else {
    echo "<script> alert('Erro ao atualizar fotos!'),window.open('../cad_fotos.php','_self')</script>";
}

?>