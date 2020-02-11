<!DOCTYPE html>
<html lang="en">

<head>
  <title>Griff Coberturas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:400,700,900 " rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/gallery/font-awesome.min.css" rel="stylesheet">
  <link href="css/gallery/prettyPhoto.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <!-- inicio conteudo site -->
  <div class="site-wrap">

    <!-- Menu toggle -->
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <!-- Top/Menu -->
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0">
              <a href="index.html" class="mb-0">
                <img src="images/logo_v2.png" alt="Logo Griff Coberturas" width="120px">
              </a>
            </h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php#home-section" class="nav-link">Home</a></li>
                <li><a href="index.php#about-section" class="nav-link">Sobre</a></li>
                <li><a href="index.php#services-section" class="nav-link">Nossos Serviços</a></li>
                <li><a href="#gallery-section" class="nav-link">Portifólio</a></li>
                <li><a href="index.php#contact-section" class="nav-link">Contato</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black float-right">
              <span class="icon-menu h3"></span>
            </a>
          </div>
        </div>
      </div>
    </header>

    <!-- Imagem Fundo / Texto -->
    <div class="site-blocks-cover overlay" style="background-image: url(images/banner_1.jpg);" data-aos="fade" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 mt-lg-6 text-center" style="padding-top: 10px;">
            <img src="images/logo.png" alt="Logo Griff Coberturas" class="img-fluid" width="300px">
            <h1>Harmonize seu ambiente com as coberturas de vidro e policarbonato, fixa ou retráteis!</h1>
          </div>
        </div>
      </div>
      <a href="#howitworks-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>

    <!-- Galeria de fotos/videos -->
    <section class="site-section bg-light bg-image" id="gallery-section">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3">Trabalhos Realizados!</h2>
          </div>
        </div>
        <div class="row">

          <ul class="portfolio-filter content-center">
              <li><a class="btn btn-outline-primary active" data-filter="*">Todos</a></li>
              <li><a class="btn btn-outline-primary" data-filter=".vidro">Vidro</a></li>
              <li><a class="btn btn-outline-primary" data-filter=".polic">Policarbonato</a></li>
              <li><a class="btn btn-outline-primary" data-filter=".retra">Retráteis</a></li>
              <li><a class="btn btn-outline-primary" data-filter=".video">Videos</a></li>
          </ul>

          <!-- Carregas imagens e videos -->
          <ul class="portfolio-items col-md-12">

            <?php
              // array com as imagens e videos
              $data = [
                ['href'=>'vidro/vidro_1.jpg', 'img'=>'vidro/vidro_1.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_2.jpg', 'img'=>'vidro/vidro_2.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_3.jpg', 'img'=>'vidro/vidro_3.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_4.jpg', 'img'=>'vidro/vidro_4.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_5.jpg', 'img'=>'vidro/vidro_5.jpg', 'tags'=>'vidro retra', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_6.jpg', 'img'=>'vidro/vidro_6.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_7.jpg', 'img'=>'vidro/vidro_7.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_8.jpg', 'img'=>'vidro/vidro_8.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_9.jpg', 'img'=>'vidro/vidro_9.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_10.jpg', 'img'=>'vidro/vidro_10.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_11.jpg', 'img'=>'vidro/vidro_11.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_12.jpg', 'img'=>'vidro/vidro_12.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_13.jpg', 'img'=>'vidro/vidro_13.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_14.jpg', 'img'=>'vidro/vidro_14.jpg', 'tags'=>'vidro retra', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_15.jpg', 'img'=>'vidro/vidro_15.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_16.jpg', 'img'=>'vidro/vidro_16.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_17.jpg', 'img'=>'vidro/vidro_17.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_18.jpg', 'img'=>'vidro/vidro_18.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_19.jpg', 'img'=>'vidro/vidro_19.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_20.jpg', 'img'=>'vidro/vidro_20.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_21.jpg', 'img'=>'vidro/vidro_21.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_22.jpg', 'img'=>'vidro/vidro_22.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_23.jpg', 'img'=>'vidro/vidro_23.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_24.jpg', 'img'=>'vidro/vidro_24.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_25.jpg', 'img'=>'vidro/vidro_25.jpg', 'tags'=>'vidro retra', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_26.jpg', 'img'=>'vidro/vidro_26.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_27.jpg', 'img'=>'vidro/vidro_27.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_28.jpg', 'img'=>'vidro/vidro_28.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'vidro/vidro_29.jpg', 'img'=>'vidro/vidro_29.jpg', 'tags'=>'vidro', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de vidro'],
                ['href'=>'polic/poli_1.jpg', 'img'=>'polic/poli_1.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_2.jpg', 'img'=>'polic/poli_2.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_3.jpg', 'img'=>'polic/poli_3.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_4.jpg', 'img'=>'polic/poli_4.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_5.jpg', 'img'=>'polic/poli_5.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_6.jpg', 'img'=>'polic/poli_6.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_7.jpg', 'img'=>'polic/poli_7.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_8.jpg', 'img'=>'polic/poli_8.jpg', 'tags'=>'polic retra', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_9.jpg', 'img'=>'polic/poli_9.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_10.jpg', 'img'=>'polic/poli_10.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_11.jpg', 'img'=>'polic/poli_11.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_12.jpg', 'img'=>'polic/poli_12.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_13.jpg', 'img'=>'polic/poli_13.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_14.jpg', 'img'=>'polic/poli_14.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_15.jpg', 'img'=>'polic/poli_15.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_16.jpg', 'img'=>'polic/poli_16.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_17.jpg', 'img'=>'polic/poli_17.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_18.jpg', 'img'=>'polic/poli_18.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_19.jpg', 'img'=>'polic/poli_19.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_20.jpg', 'img'=>'polic/poli_20.jpg', 'tags'=>'polic retra', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'polic/poli_21.jpg', 'img'=>'polic/poli_21.jpg', 'tags'=>'polic', 'icon'=>'icon-eye-open', 'alt'=>'Coberturas de Policarbonato'],
                ['href'=>'videos/video_1.mp4?iframe=true&width=650&height=420', 'img'=>'videos/video_1.jpg', 'tags'=>'vidro retra video', 'icon'=>'icon-play', 'alt'=>'Cobertura retrateis de vidro'],
                ['href'=>'videos/video_2.mp4?iframe=true&width=650&height=420', 'img'=>'videos/video_2.jpg', 'tags'=>'polic video', 'icon'=>'icon-play', 'alt'=>'Cobertura de Policarbonato'],
                ['href'=>'videos/video_3.mp4?iframe=true&width=650&height=420', 'img'=>'videos/video_3.jpg', 'tags'=>'vidro retra video', 'icon'=>'icon-play', 'alt'=>'Cobertura retrateis de vidro'],
                ['href'=>'videos/video_4.mp4?iframe=true&width=650&height=420', 'img'=>'videos/video_4.jpg', 'tags'=>'vidro retra video', 'icon'=>'icon-play', 'alt'=>'Cobertura retrateis de vidro'],
                ['href'=>'videos/video_5.mp4?iframe=true&width=650&height=420', 'img'=>'videos/video_5.jpg', 'tags'=>'vidro retra video', 'icon'=>'icon-play', 'alt'=>'Cobertura retrateis de vidro'],
                ['href'=>'videos/video_6.mp4?iframe=true&width=650&height=420', 'img'=>'videos/video_6.jpg', 'tags'=>'polic retra video', 'icon'=>'icon-play', 'alt'=>'Cobertura retrateis de policarbonato'],
                ['href'=>'videos/video_7.mp4?iframe=true&width=650&height=420', 'img'=>'videos/video_7.jpg', 'tags'=>'vidro retra video', 'icon'=>'icon-play', 'alt'=>'Cobertura retrateis de vidro']
              ];
              // ordenar randonicamente o array
              shuffle($data);
              // percorre array com as imagens e videos
              foreach($data as $dt){
              ?>
                <li class="portfolio-item col-md-3 <?php echo $dt['tags'] ?>">
                  <div class="item-inner">
                    <img src="gallery/<?php echo $dt['img'] ?>" alt="<?php echo $dt['alt'] ?>"/>
                    <div class="overlay">
                        <a class="preview btn btn-info" href="gallery/<?php echo $dt['href'] ?>" rel="prettyPhoto">
                          <i class="<?php echo $dt['icon'] ?>"></i>
                        </a>             
                    </div>   
                  </div>           
                </li>
              <?php
              }
            ?>
              
          </ul>
          <!-- Fim fotos e videos -->
        </div>
      </div>
    </section>

    <!-- Rodape -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">Griff Coberturas</h2>
                <p>Temos o prazer de oferecer os melhores materiais para sua cobertura, prezamos pela qualidade do serviço prestado e relacionamento com nosso clientes.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Links Rápidos</h2>
                <ul class="list-unstyled">
                  <li><a href="index.php#about-section">Sobre</a></li>
                  <li><a href="index.php#services-section">Nossos Serviços</a></li>
                  <li><a href="#gallery-section">Portifólio</a></li>
                  <li><a href="index.php#contact-section">Contato</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="">
              <h2 class="footer-heading mb-4">Siga-nos</h2>
              <a href="https://www.facebook.com/Griff-coberturas-em-Policarbonato-1374382819539280/" target="_blank" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <!-- <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a> -->
              <a href="https://br.linkedin.com/" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <!-- <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a> -->
              </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top">
              <p>
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script> Todos os direitos reservados | Desenvolvido por <a href="http://evandrocortiano.com.br/" target="_blank">Evandro C Cortiano</a>
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>  
  <script src="js/jquery-ui.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/gallery/jquery.prettyPhoto.js"></script>
  <script src="js/gallery/jquery.isotope.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>