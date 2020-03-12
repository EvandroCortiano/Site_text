<?php

// arquivo de conexao
include ('connection/connection.php');

// pesquisa os arquivos ativos na base de dados
$sql = "SELECT nome, foto, tag_img, tag_video, tag_vidro, tag_polic, tag_retra, ativo 
        FROM gallery 
        WHERE ativo = 'S';";
$gallery = mysqli_query($conexao, $sql);
$total = mysqli_num_rows($gallery);

// monta galeria
$tags = '';
foreach ($gallery as $result){ 
    $tags .= $result['tag_vidro'] == 'S' ? ' vidro' : '';
    $tags .= $result['tag_polic'] == 'S' ? ' polic' : '';
    $tags .= $result['tag_retra'] == 'S' ? ' retra' : '';
    $tags .= $result['tag_video'] == 'S' ? ' video' : '';
    $icon = $result['tag_img'] == 'S' ? 'icon-eye-open' :  'icon-play';
    ?>
    <li class="portfolio-item col-md-3 <?php echo $tags ?>">
        <div class="item-inner">
        <img src="gallery/upload/<?php echo $result['foto'] ?>" alt="<?php echo $result['nome'] ?>"/>
        <div class="overlay">
            <a class="preview btn btn-info" href="gallery/upload/<?php echo $result['foto'] ?>" rel="prettyPhoto">
                <i class="<?php echo $icon ?>"></i>
            </a>             
        </div>   
        </div>           
    </li>
<?php } ?>