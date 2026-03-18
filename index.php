<?php
include "./connect.php";
// infomrations 
// Une fois que la requête a été exécutée avec succès, cette ligne récupère la première (et unique) ligne de résultat renvoyée par la base de données. La fonction fetch() récupère une ligne de résultat sous la forme d'un tableau associatif où les clés sont les noms des colonnes et les valeurs sont les valeurs correspondantes de la ligne.
$info = $conn->prepare("SELECT * from infos limit 1");
$info->execute();
$info = $info->fetch();
// data of home_page table
$home_page = $conn->prepare("SELECT * from home_page Limit 1");
$home_page->execute();
$home_page = $home_page->fetch();

$home_slider = $conn->prepare("SELECT * from home_slider");
$home_slider->execute();
$home_slider = $home_slider->fetchAll();

$home_partenaire = $conn->prepare("SELECT * from home_partenaire");
$home_partenaire ->execute();
$home_partenaire  = $home_partenaire ->fetchAll();

// data of srvices table
// Cette ligne prépare une requête SQL pour sélectionner toutes les colonnes (*) de la table nommée "services". 
$services = $conn->prepare("SELECT * from services");
$services->execute();
$services = $services->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
  <!-- Library CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-theme.html" rel="stylesheet" />
  <link href="css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/animations.css" media="screen" rel="stylesheet" />
  <link href="css/superfish.css" media="screen" rel="stylesheet" />
  <link href="css/revolution-slider/css/settings.css" media="screen" rel="stylesheet" />
  <link href="css/prettyPhoto.css" media="screen" rel="stylesheet" /><!-- Theme CSS -->
  <link href="css/style.css" rel="stylesheet" /><!-- Skin -->
  <link class="colors" href="css/colors/blue.css" rel="stylesheet" /><!-- Responsive CSS -->
  <link href="css/theme-responsive.css" rel="stylesheet" /><!-- Switcher CSS -->
  <link href="css/switcher.css" rel="stylesheet" />
  <link href="css/spectrum.css" rel="stylesheet" /><!-- Favicons -->
  <link href="img/logo plomberie .png" rel="shortcut icon" />
  <link href="img/ico/apple-touch-icon.png" rel="apple-touch-icon" />
  <link href="img/ico/apple-touch-icon-72.png" rel="apple-touch-icon" sizes="72x72" />
  <link href="img/ico/apple-touch-icon-114.png" rel="apple-touch-icon" sizes="114x114" />
  <link href="img/ico/apple-touch-icon-144.png" rel="apple-touch-icon" sizes="144x144" />


  <title>Société de plomberie à Casablanca | HVNET PLOMBERIE </title>
  <meta name="description"
    content="Société de plomberie, plomberie à Casablanca, HVNET plomberie , Societe de plomberie sur Casablanca et partout au Maroc.">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Link canonique -->
  <link rel="canonical" href="index.php/">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style type="text/css">
    .home .content .container .row .posts-block.col-lg-9.col-md-8.col-sm-8.col-xs-12 article .post-content .img-content {
      text-align: justify;
    }

    .home .content .container .row .posts-block.col-lg-9.col-md-8.col-sm-8.col-xs-12 article .post-content .img-content {
      text-align: justify;
    }

    .home #footer .footer-top .container .row .col-lg-3.col-md-3.col-xs-12.col-sm-3.footer-one ul a il {

      font-size: 14px;
    }

    .de {
      color: #F00;
    }

    .home .wrap center {
      display: none;
    }

    .pr {
      text-align: center;
    }
  </style>




  <style type="text/css">
    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu a::after {
      transform: rotate(-90deg);
      position: absolute;
      right: 6px;

      margin-top: 8px;

    }

    .dropdown-submenu .dropdown-menu {

      bottom: 35px !important;
      left: 100% !important;
      margin-left: .1rem;
      margin-right: .1rem;
    }
  </style>

</head>

<body class="home">
  <div class="wrap">
    <!-- Header Start -->


    <!-- <header id="header">
      <div class="top-bar">
        <div class="slidedown collapse">
          <div class="container">
            <div class="phone-email pull-left">

              <i class="icon-phone"></i>Tel : <a href="Tel:+212615599092"><strong>+212 615 599 092</strong></a>
              <i class="fa-solid fa-envelope" style="color: #f5f9ff;"></i><a
                href="mailto:hvnet.plomberie.maroc@gmail.com"> <strong>hvnet.plomberie.maroc@gmail.com</strong></a>
            </div>
            <div class="pull-right">
              <ul class="social pull-left">
                <li class="facebook"><a href="https://www.facebook.com/deratisation.casablanca"><i
                      class="icon-facebook"></i></a></li>
                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                <li class="dribbble"><a href="#"><i class="icon-dribbble"></i></a></li>
                <li class="linkedin"><a href="#"><i class="icon-linkedin"></i></a></li>
                <li class="rss"><a href="#"><i class="icon-rss"></i></a></li>
              </ul>
              <div id="search-form" class="pull-right">
                <form action="#" method="get">
                  <input type="text" class="search-text-box"> -->
                <!-- </form>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      
    <header id="header">
      <div class="top-bar">
        <div class="slidedown collapse">
          <div class="container">
            <div class="phone-email pull-left">
              <i class="icon-phone"></i>Tel : <a href="Tel:+212 <?php echo $info["Tel"] ?>"><strong>+212 <?php echo $info["Tel"] ?></strong></a>
              <i class="fa-solid fa-envelope" style="color: #f5f9ff;"></i><a href="mailto:<?php echo $info["email"] ?>"> <strong><?php echo $info["email"] ?></strong></a>
            </div>
            <div class="pull-right">
              <ul class="social pull-left">
                <li class="facebook"><a href="<?php echo $info['facebook']; ?>"><i class="icon-facebook"></i></a></li>
                <li class="twitter"><a href="<?php echo $info['twitter']; ?>"><i class="icon-twitter"></i></a></li>
                <li class="linkedin"><a href="<?php echo $info['linkedin']; ?>"><i class="icon-linkedin"></i></a></li>
                <li class="rss"><a href="#"><i class="icon-rss"></i></a></li>
              </ul>
              <div id="search-form" class="pull-right">
                <form action="#" method="get">

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- nav bar start -->
      <div class="main-header">
        <div class="container" id="container-header">

          <!-- toggle collqpse -->
          <div class="topnav navbar-header">
            <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
              <i class="icon-angle-down icon-current"></i>
            </a>
          </div>

          <!-- enstoggle -->
          <div class="logo pull-left" style="margin-top:20px ;"> <a href="index.php"><img id="img-nav"
                alt="Societe de Plomberie HVNET à Casablanca Maroc" src="img/logo plomberie .png" /></a></div>

          <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a id="button-phone" class="navbar-toggle" data-toggle="collapse" href=".navbar-collapse">
              <i class="icon-reorder icon-2x"></i>
            </a>



            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item dropdown">

                  <a class="nav-link" href="a-propos-nous.php">A PROPOS DE NOUS<span
                      class="sr-only">(current)</span></a>

                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"> NOS ACTIVITES
                  </a>
                  <ul class="dropdown-menu activites" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-submenu"><a href="reparation-fuite-eau-casablanca.php">reparation fuite d'eau<span
                          class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a
                        href="remplacement-chauffe-eau-electrique-casablanca.php">Remplacement chauffe-eau
                        éléctrique<span class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="debouchage-wc-casablanca.php">Débouchage WC <span
                          class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="broyeur-casablanca.php">Broyeur<span
                          class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="debouchage-machine-laver-casablanca.php">Débouchage machine à
                        laver<span class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="depannage-plomberie-casablanca.php">Dépannage plomberie<span
                          class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="debouchage-canalisation-casablanca.php">Débouchage
                        canalisation <span class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="remplacement-robinet-casablanca.php">Remplacement
                        Robinet<span class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="ballon-eau-chaude-casablanca.php">Ballon d'eau chaude<span
                          class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="urgence-plombier-casablanca.php">Urgence plombier Casablanca<span class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="installation-chaudiere-casablanca.php">Installation
                        chaudière<span class="fas fa-caret-down" style="color:red ;"></span></a>
                    <li class="dropdown-submenu"><a href="installation-plomberie-casablanca.php">Installation de
                        plomberie<span class="fas fa-caret-down" style="color:red ;"></span></a>
                   

                    </li>
                  </ul>


                <li class="nav-item ">
                  <a class="nav-link" href="blog.php">Blog</a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item btn-menu" id="btn-menu">
                  <a id="btnn" class="nav-link" href="devis.php">DEMANDEZ DEVIS</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!-- nav bar end -->
    </header>
    <div id="main">
      <!-- Slider Start-->
      <div class="fullwidthbanner-container">
        <div class="fullwidthbanner rslider">
          <ul>
          <?php
            foreach ($home_slider as $slider) {
            ?>
            <!-- THE FIRST SLIDE -->
            <li data-delay="6000" data-masterspeed="300" data-transition="fade">
              <div class="slotholder">
                <img id="img-slid" alt="Societe de Plomberie HVNET à Casablanca Maroc" data-fullwidthcentering="on"
                  src="admin/pages/home_page/slider_imgs/<?php echo $slider["img"]; ?>"
                  style="width: 1245.55px; height: 470px; position: absolute; top: 0px; left: 0px;">
              </div>
              <div class="caption large_text sft" data-easing="easeOutExpo" data-speed="300" data-start="800"
                data-x="220" data-y="150" style="padding: 15px; text-transform: none !important;">Besoin d'aide pour une
                urgence plomberie
                <p style="margin-left: 150px;">Nous intervenons sur rendez - vous ou dans l'heure qui suit votre appel :
                </p>
              </div>

              <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530"
                data-y="250" style="margin-left: 180px; margin-top: 30px;">
                <a href="Tel:+212615599092" id="btn-demandez-devis"><strong>+212 615 599 092</strong></a>

                <!-- <a href="contact.php" id="btn-demandez-devis">
                <strong>+212 615 599 092</strong>
              </a> -->

              </div>

              <!-- <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1400" data-x="20" data-y="20"><img alt="dératisation, désinsectisation à casablanca Maroc" src="deratisation-casablanca/deratisation-desinsectisation-casablanca.jpg"/></div> -->
              <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530"
                data-y="250" style="margin-left: -130px; margin-top: 30px;">
                <a href="devis.php" id="btn-demandez-devis">
                  <strong>Devis en ligne</strong>
                </a>
              </div>
            </li>
            <?php
            }
            ?>
            <!-- THE RESPONSIVE SLIDE -->
            <!-- <li data-masterspeed="300" data-slotamount="1" data-transition="fade"><img id="img-slid"
                alt="société de dératisation à casablanca" data-fullwidthcentering="on"
                src="img/img plomberie webp/slider2.webp" />
              <div class="caption large_text sft" data-easing="easeOutExpo" data-speed="300" data-start="800"
                data-x="220" data-y="150" style="padding: 15px; text-transform: none !important;">Besoin d'aide pour une
                urgence plomberie
                <p style="margin-left: 150px;">Nous intervenons sur rendez - vous ou dans l'heure qui suit votre appel :
                </p>
              </div>

              <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530"
                data-y="250" style="margin-left: 180px; margin-top: 30px;">
                <a href="Tel:+212615599092" id="btn-demandez-devis"><strong>+212 615 599 092</strong></a>
                </a>
              </div>


              <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530"
                data-y="250" style="margin-left: -130px; margin-top: 30px;">
                <a href="devis.php" id="btn-demandez-devis">
                  <strong>Devis en ligne</strong>
                </a>
              </div>
            </li> -->
            <!-- THE RESPONSIVE SLIDE -->
            <!-- <li data-masterspeed="300" data-slotamount="1" data-transition="fade"><img id="img-slid"
                alt="société de dératisation à casablanca" data-fullwidthcentering="on"
                src="img/dépannage-plomberie-lyon.jpg" />
              <div class="caption large_text sft" data-easing="easeOutExpo" data-speed="300" data-start="800"
                data-x="220" data-y="150" style="padding: 15px; text-transform: none !important;">Besoin d'aide pour une
                urgence plomberie
                <p style="margin-left: 150px;">Nous intervenons sur rendez - vous ou dans l'heure qui suit votre appel :
                </p>
              </div>

              <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530"
                data-y="250" style="margin-left: 180px; margin-top: 30px;">
                <a href="Tel:+212615599092" id="btn-demandez-devis"><strong>+212 615 599 092</strong></a>
                </a>
              </div> -->

              <!-- <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1400" data-x="20" data-y="20"><img alt="dératisation, désinsectisation à casablanca Maroc" src="deratisation-casablanca/deratisation-desinsectisation-casablanca.jpg"/></div> -->
              <!-- <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530"
                data-y="250" style="margin-left: -130px; margin-top: 30px;">
                <a href="devis.php" id="btn-demandez-devis">
                  <strong>Devis en ligne</strong>
                </a>
              </div>
            </li> -->
            <!-- THE FIRST SLIDE -->
            <!-- <li data-delay="6000" data-masterspeed="300" data-transition="fade">
              <div class="slotholder"><img id="img-slid" alt="Societe de Plomberie HVNET à Casablanca Maroc"
                  data-fullwidthcentering="on" src="img/slide-1.jpg" /></div>
              <div class="caption large_text sft" data-easing="easeOutExpo" data-speed="300" data-start="800"
                data-x="220" data-y="150" style="padding: 15px; text-transform: none !important;">Besoin d'aide pour une
                urgence plomberie
                <p style="margin-left: 150px;">Nous intervenons sur rendez - vous ou dans l'heure qui suit votre appel :
                </p>
              </div>

              <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530"
                data-y="250" style="margin-left: 180px; margin-top: 30px;">
                <a href="Tel:+212615599092" id="btn-demandez-devis"><strong>+212 615 599 092</strong></a>
                </a>
              </div> -->

              <!-- <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1400" data-x="20" data-y="20"><img alt="dératisation, désinsectisation à casablanca Maroc" src="deratisation-casablanca/deratisation-desinsectisation-casablanca.jpg"/></div> -->
              <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530"
                data-y="250" style="margin-left: -130px; margin-top: 30px;">
                <a href="devis.php" id="btn-demandez-devis">
                  <strong>Devis en ligne</strong>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- Slider End-->

      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">

          </div>
        </div>
      </div>


      <!-- block text star -->
      </br></br></br>
      <div class="container">
        <div class="row">

          <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="elementor-text-editor elementor-clearfix">
              <h1 id="paragraphe" class="titre-principal" style="text-align: center ;"><strong>Société de plomberie
                  HVNET à
                  Casablanca Maroc</strong>
              </h1>
              <?php 
                echo $home_page["presentation"];
             ?>

             
              <br>

              <div class="row">
                <div class="col-md-5">
                  <img width="100%" style="width:100% !important; height:334px !important"
                    src="img/cheerful-asian-plumber-sitting-floor-repairing-kitchen-sink.jpg" alt="">
                </div>
                <div class="col-md-7">
                  <h3 style="text-align: center;">Societe de plomberie Casablanca, Maroc</h3>
                  <p><strong> Votre Satisfaction , Notre Engagement !</strong> </p>
                  <p><strong><a href="index.php">HVNET PLOMBERIE</a></strong> est une société experte dans le domaine
                    de la plomberie au Maroc. Nous vous accompagnons dans les travaux de rénovation, le
                    dépannage sanitaire ou encore le
                    remplacement de chaudières à gaz et bien d'autres activités liées à la plomberie aussi bien dans le
                    domaine du chauffage.
                  </p>
                  <p>
                    Un déplacement sur votre lieu d'habitations en moins de 30 minutes. <strong>HVNET PLOMBERIE</strong>
                    a atteint son
                    stade de maturité. Notre société possède la maîtrise des techniques de la plomberie, de la
                    climatisation, de la ventilation et du désenfumage, dans des secteurs variés tels que le tertiaire,
                    l'hospitalier, l'industrie et le logement, et développe aujourd'hui de nouvelles compétences dans
                    les énergies propres et les solutions basse consommation.
                  </p>

                  <p>Nos professionnels sont spécialisés dans la <strong><a href="index.php">plomberie à
                        Casablanca</a></strong>. De plus, ils utilisent des produits très efficaces. <a
                      href="contact.php">contactez-nous</a> ou demandez un <a href="devis.php">devis gratuit</a>
                    maintenant.</p>
                </div>

              </div>

              <div class="row">
                <div class="col-md-7">
                  <h3 style="text-align: center;">Travaux de Plomberie et Maintenance Casablanca</h3>
                  <p>Plus de 02 années d'expérimentation.<br>Experts de l'intervention sur chantier, notre expérience,
                    notre expertise et notre savoir-faire assurent à nos clients une prestation technique de haut
                    niveau, et offre une garantie de durabilité et de performance de nos installations.
                  </p>
                  <p>
                    Nos plombiers sont à votre service dans la région Maroc pour des prestations de :
                  </p>
                  <p>
                    Plomberie générale, Débouchage d'évier, Curage de canalisations, Réparation de fuite en urgence
                    Débouchage de canalisation, Aménagement de sanitaires, Dégorgement de
                    canalisation, Réparation de chauffage, Installation de douche à l'italienne ou de salle de bain
                    complète.
                  </p>
                  <p>Nos plombiers sont chevronnés et prennent en charge toutes les interventions, que ce soit en
                    situation d' <strong><a href="Tel:+212615599092">urgence</a></strong> ou sur <strong><a
                        href="devis.php">rendez-vous.</a></strong>
                </div>
                <div class="col-md-5">
                  <img width="100%" style="width:100% !important; height:334px !important" src="img/plombier2.webp"
                    alt="">
                </div>

              </div>

              <h2 style="text-align: center; font-size: 32px;">Nos services: Plombiers professionnels à Casablanca,
                Maroc </h2>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container" id="te2">
      <div class="row" id="listse">
        <section class="our-blog pt-5 pt-lg-5 mb-5 p-relative bg-color-light">
          <div class="container">

            <div class="row justify-content-center justify-lg-content-between">
            <?php
          foreach($services as $service){
             ?>
             <!-- Cela signifie que sur les écrans de petite taille (en mode "small" ou "sm"), la largeur de la colonne sera de 12 unités sur une grille de 12 unités.  -->
             <!-- col-lg-4 : Cela signifie que sur les écrans de grande taille (en mode "large" ou "lg"), la largeur de la colonne sera de 4 unités sur une grille de 12 unités. Elle occupera un tiers de la largeur de son conteneur, créant une mise en page à trois colonnes.  -->
             <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <article>
                  <div
                    class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"
                    style="animation-delay: 700ms;">
                    <div class="card-body p-4 z-index-1">
                      <a href="">
                        <img class="card-img-top border-radius-0" src="./admin/pages/services/imgs/<?php echo $service['img']; ?>" width="300"; heigh="200";>
                      </a>
                      <br><br>
                      <div class="card-body p-0">
                        <h4 class="card-title mb-3 text-5 font-weight-bold" style="font-size: 13px;"><a class="text-color-secondary"
                         id="servicetitleimg"> <?php echo $service['title']; ?>
                        </a></h4>

                        <p class="card-text mb-3">   
                          <?php echo $service ["presentation"];?>
                        </p>
                        <!-- <a href="societe-electricite-batiment-casablanca.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">EN
                            SAVOIR PLUS
                          </a> -->
                      </div>
                    </div>
                  </div>
                </article>
                <br>
              </div>
              <?php
          }
      ?>
              <!-- <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <article>
                  <div
                    class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"
                    style="animation-delay: 700ms;">
                    <div class="card-body p-4 z-index-1">
                      <a href="">
                        <img class="card-img-top border-radius-0" src="img/debouchage-wc-toilette-2.jpg"
                          alt="Card Image">
                      </a>
                      <br><br>
                      <div class="card-body p-0">
                        <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                            href="debouchage-wc-casablanca.php">DEBOUCHAGE
                            WC </a></h4>
                        <p class="card-text mb-3">Nous proposons nos services pour le débouchage de WC
                          bâtiments de Casablanca...</p> -->
                        <!-- <a href="societe-electricite-batiment-casablanca.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">EN
                            SAVOIR PLUS
                          </a> -->
                      <!-- </div>
                    </div>
                  </div>
                </article>

              </div> -->
              <!-- <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <article>
                  <div
                    class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"
                    style="animation-delay: 700ms;">
                    <div class="card-body p-4 z-index-1">
                      <a href="">
                        <img class="card-img-top border-radius-0" src="img/depannage-plomberie.png" alt="Card Image">
                      </a>
                      <br><br>
                      <div class="card-body p-0">
                        <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                            href="depannage-plomberie-casablanca.php">DEPANNAGE
                            PLOMBERIE </a></h4>
                        <p class="card-text mb-3">Nous effectuons des dépannages en plomberie pour les
                          bâtiments à Casablanca...</p> -->
                        <!-- <a href="societe-electricite-batiment-casablanca.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">EN
                            SAVOIR PLUS
                          </a> -->
                      <!-- </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <br>
          <div class="container"> -->

            <!-- <div class="row justify-content-center justify-lg-content-between">
              <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <article>
                  <div
                    class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"
                    style="animation-delay: 700ms;">
                    <div class="card-body p-4 z-index-1">
                      <a href="">
                        <img class="card-img-top border-radius-0" src="img/déboucher-évier-naturel-740x493.png"
                          alt="Card Image">
                      </a>
                      <br><br>
                      <div class="card-body p-0">
                        <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                            href="remplacement-robinet-casablanca.php">DEBOUCHAGE
                            CANALISATION </a></h4>
                        <p class="card-text mb-3">Nous sommes spécialisés dans le débouchage de canalisations pour les
                          bâtiments à Casablanca...</p> -->
                        <!-- <a href="societe-electricite-batiment-casablanca.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">EN
                            SAVOIR PLUS
                          </a> -->
                      <!-- </div>
                    </div>
                  </div>
                </article>
              </div> -->
              <!-- <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <article>
                  <div
                    class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"
                    style="animation-delay: 700ms;">
                    <div class="card-body p-4 z-index-1">
                      <a href="">
                        <img class="card-img-top border-radius-0" src="img/etapes-changement-robinet-de-lavabo.png"
                          alt="Card Image">
                      </a>
                      <br><br>
                      <div class="card-body p-0">
                        <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                            href="remplacement-robinet-casablanca.php">REMPLACEMENT
                            ROBINET </a></h4>
                        <p class="card-text mb-3">Nous effectuons des remplacements de robinets pour les
                          bâtiments à Casablanca...</p> -->
                        <!-- <a href="societe-electricite-batiment-casablanca.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">EN
                            SAVOIR PLUS
                          </a> -->
                      <!-- </div>
                    </div>
                  </div>
                </article>

              </div> -->
              <!-- <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <article>
                  <div
                    class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"
                    style="animation-delay: 700ms;">
                    <div class="card-body p-4 z-index-1">
                      <a href="">
                        <img class="card-img-top border-radius-0" src="img/urgence-plomberie.png" alt="Card Image">
                      </a>
                      <br><br>
                      <div class="card-body p-0">
                        <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                            href="urgence-plombier-casablanca.php">URGENCE PLOMBIER
                            CASABLANCA </a></h4>
                        <p class="card-text mb-3">Nous sommes disponibles pour les urgences en plomberie pour les
                          bâtiments à Casablanca...</p> -->
                        <!-- <a href="societe-electricite-batiment-casablanca.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">EN
                            SAVOIR PLUS
                          </a> -->
                      <!-- </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div> -->
          <!-- <br>
          <div class="container"> -->

            <!-- <div class="row justify-content-center justify-lg-content-between">
              <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <article>
                  <div
                    class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"
                    style="animation-delay: 700ms;">
                    <div class="card-body p-4 z-index-1">
                      <a href="">
                        <img class="card-img-top border-radius-0" src="img/chauffagiste-bruxelles.png" alt="Card Image">
                      </a>
                      <br><br>
                      <div class="card-body p-0">
                        <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                            href="installation-plomberie-casablanca.php">INSTALLATION
                            CHAUDIERE </a></h4>
                        <p class="card-text mb-3">Nous mettons à disposition les installations de chaudières pour les
                          bâtiments à Casablanca...</p> -->
                        <!-- <a href="societe-electricite-batiment-casablanca.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">EN
                            SAVOIR PLUS
                          </a> -->
                      <!-- </div>
                    </div>
                  </div>
                </article>
              </div> -->
              <!-- <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <article>
                  <div
                    class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"
                    style="animation-delay: 700ms;">
                    <div class="card-body p-4 z-index-1">
                      <a href="">
                        <img class="card-img-top border-radius-0" src="img/lavabo-small.png" alt="Card Image">
                      </a>
                      <br><br>
                      <div class="card-body p-0">
                        <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                            href="installation-plomberie-casablanca.php">INSTALLATION
                            PLOMBERIE </a></h4>
                        <p class="card-text mb-3">Nous effectuons l'installation de systèmes de plomberie pour les
                          bâtiments à Casablanca..</p> -->
                        <!-- <a href="societe-electricite-batiment-casablanca.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">EN
                            SAVOIR PLUS
                          </a> -->
                      <!-- </div>
                    </div>
                  </div>
                </article> -->
<!-- 
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <article>
                  <div
                    class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"
                    style="animation-delay: 700ms;">
                    <div class="card-body p-4 z-index-1">
                      <a href="">
                        <img class="card-img-top border-radius-0" src="img/broyeur a dechet.png" alt="Card Image">
                      </a>
                      <br><br>
                      <div class="card-body p-0">
                        <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary"
                            href="broyeur-casablanca.php">BROYEUR
                          </a></h4>
                        <p class="card-text mb-3">Nous sommes spécialisés dans le broyage de plomberie pour les
                          bâtiments à Casablanca...</p> -->
                        <!-- <a href="societe-electricite-batiment-casablanca.html" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">EN
                            SAVOIR PLUS
                          </a> -->
                      <!-- </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div> -->
          <br>

        </section>
        <!-- <div class="col-md-3"><img id="imgserr"
              alt="Société de dératisation et désinsectisation à Casablanca et partout au Maroc"
              src="img/reparation fuite d eau.png">
            <h4 style ="text-align: center;"id="servicebackimg" class="card-title"><a href="reparation-fuite-eau-casablanca.php"><strong
                  id="servicetitleimg"> Reparatition fuite d'eau </strong></a></h4>
            <hr style="border:solid 1px black" >
            <p id="lefttext" class="card-text mb-3"><strong>Extermination rapide et efficace</strong> grâce à notre
              <strong>traitement anti punaises de lit</strong> sans produit <strong>chimique</strong>.
            </p>
          </div>
          <div class="col-md-3"><img id="imgserr"
              alt="Société de dératisation et désinsectisation à Casablanca et partout au Maroc"
              src="img/debouchage-wc-toilette-2.jpg">
            <h4 style ="text-align: center;"id="servicebackimg" class="card-title"><a href="debouchage-wc-casablanca.php"><strong
                  id="servicetitleimg">Debouchage WC</strong></a></h4>
            <hr style="border:solid 1px black">
            <p id="lefttext" class="card-text mb-3">Un problème de <strong>rats</strong> ? Contactez <strong>HVNET PLOMBERIE</strong>, expert local en <strong>dératisation</strong>.</p>
          </div> -->
        <!-- <div class="col-md-3"><img id="imgserr"
              alt="Société de dératisation et désinsectisation à Casablanca et partout au Maroc"
              src="img/conseils-plombier.jpg">
            <h4 style="text-align: center;"id="servicebackimg" class="card-title"><a
                href="depannage-plomberie-casablanca.php"><strong id="servicetitleimg">Depannage plomberie</strong></a></h4>
            <hr style="border:solid 1px black">
            <p id="lefttext" class="card-text mb-3"><strong>Solutions et traitements professionnels anti
                cafards</strong> pour <span style="text-decoration: underline;">professionnels</span> et <span
                style="text-decoration: underline;">particuliers.</span></p>
          </div>
          <div class="col-md-3"><img id="imgserr"
              alt="Société de dératisation et désinsectisation à Casablanca et partout au Maroc"
              src="img/déboucher-évier-naturel-740x493.jpg">
            <h4 style = "text-align: center;"id="servicebackimg" class="card-title"><a href="debouchage-canalisation-casablanca.php"><strong
                  id="servicetitleimg">Debouchage canalisation</strong></a></h4>
            <hr style="border:solid 1px black">
            <p id="lefttext" class="card-text mb-3"><strong>Extermination rapide et efficace</strong> grâce à notre
              <strong>traitement anti souris</strong> sans produit chimique.
            </p>
          </div>
        </div> -->
        <!-- 
        <div class="row" id="listes">
          <div class="col-md-3"><img id="imgserr"
              alt="Société de dératisation et désinsectisation à Casablanca et partout au Maroc"
              src="img/etapes-changement-robinet-de-lavabo.jpg">
            <h4 style ="text-align: center;"id="servicebackimg" class="card-title"><a href="remplacement-robinet-casablanca.php"><strong
                  id="servicetitleimg">Remplacement robinet</strong></a></h4>
            <hr style="border:solid 1px black">
            <p id="lefttext" class="card-text mb-3">Un problème de <strong>loirs</strong> ? Contactez <strong>HVNET PLOMBERIE</strong>, expert local en <strong>dératisation.</strong></p>
          </div>
          <div class="col-md-3"><img id="imgserr"
              alt="Société de dératisation et désinsectisation à Casablanca et partout au Maroc"
              src="img/contacter-un-plombier-en-urgence.jpg">
            <h4 style="text-align: center;"id="servicebackimg" class="card-title"><a
                href="urgence-plombier-casablanca.php"><strong id="servicetitleimg">Urgence plombier Casablanca</strong></a></h4>
            <hr style="border:solid 1px black">
            <p id="lefttext" class="card-text mb-3"><strong>Solutions et traitements professionnels anti
                piégeons</strong> pour professionnels et particuliers.</p>
          </div> -->
        <!-- <div class="col-md-3"><img id="imgserr"
              alt="Société de dératisation et désinsectisation à Casablanca et partout au Maroc"
              src="img/chauffagiste-bruxelles.jpg">
            <h4 style ="text-align: center;"id="servicebackimg" class="card-title"><a href="installation-chaudiere-casablanca.php"><strong
                  id="servicetitleimg">Installation chaudiere</strong></a></h4>
            <hr style="border:solid 1px black">
            <p id="lefttext" class="card-text mb-3">Un problème de <strong>puces</strong> ? Contactez <strong>HVNET PLOMBERIE</strong>, expert local en <strong>dératisation.</strong></p>
          </div>
          <div class="col-md-3"><img id="imgserr"
              alt="Société de dératisation et désinsectisation à Casablanca et partout au Maroc"
              src="img/lavabo-small.jpg">
            <h4 style="text-align: center;"id="servicebackimg" class="card-title"><a href="installation-plomberie-casablanca.php"><strong
                  id="servicetitleimg">Installation plomberie &nbsp;</strong></a></h4>
            <hr style="border:solid 1px black">
            <p id="lefttext" class="card-text mb-3">Les <strong>mouches</strong> peuvent attirer beaucoup de
              <strong>nuisibles,</strong> protégez votre activité avec <strong></strong>.
            </p>
          </div> -->
      </div>
      <!-- <div class="row">
          <h3 style="text-align: center ; margin-left: 20%; margin-right: 80px;">Les dangers encourus par la présence de
            nuisibles dans votre foyer à Casablanca</h3>
          <p>Il faut souligner à présent que&nbsp;tous les cas <strong>d'infestation,</strong> de
            <strong>rongeur,</strong> de <strong>nuisibles</strong> ou de <strong>parasites</strong> représentent aussi
            un <em>danger pour votre foyer</em>.
          </p>
          <p>En effet, les <a href="societe-traitement-rats-casablanca.html"><strong>rats</strong></a> et les <a
              href="societe-traitement-souris-casablanca.html"><strong>souris</strong></a> se répandent partout car ces
            rongeurs ont la réputation de se reproduire très rapidement. D'une façon générale, un couple de souris est
            la certitude d'un nid de souriceaux logé chez vous.</p>
          <p>Aussi, si nous reprenons l'exemple des <strong>cafards,</strong> c'est une véritable catastrophe sanitaire
            que vous avez sur les bras. Effectivement, ce genre d'insectes rampants aime&nbsp;prendre possession de
            votre cuisine. C'est une véritable catastrophe pour l'hygiène de vos denrées alimentaires. De plus,
            l'utilisation de produits toxiques que nous avons mentionnée auparavant est extrêmement dangereuse. Pourquoi
            ? Parce que s'ils sont toxiques pour les <strong>animaux nuisibles</strong>, ils sont également toxiques
            pour vos animaux de compagnie.</p>
          <p>Dans le cas de la présence d'un <a href="societe-traitement-guepes-abeilles-casablanca.html"><strong>nid de
                guêpe</strong></a>, il est impératif de faire appel rapidement à une <strong>extermination
              professionnelle</strong>. Assurément, vous voulez éviter le pire. Blessures en tentant de vous en
            débarrasser vous-même, entrée des <strong>guêpes</strong> dans votre foyer et surtout, piqûres&nbsp;sont
            autant de danger que vous encourez en tentant de l'anéantir vous-même. D'autant plus que la santé des
            personnes présentant des allergies est dès lors en jeu.</p>
          <p>Finalement, penchons-nous sur notre dernier exemple ne concernant <strong>ni la dératisation</strong>,
            <strong>ni la désinsectisation</strong>, mais bien la <strong>désinfection.</strong> En effet, il est devenu
            indispensable pour vous de maintenir un foyer propre et désinfecté de tous virus. Habiter dans une maison «
            covid-free » est désormais un acte de conscience collective. C'est pourquoi, à votre demande et suivant vos
            besoins, <a href="index.php"><strong>HVNET PLOMBERIE</strong></a> <strong>à Casablanca</strong>
            propose ses services spéciaux et adaptés à la crise sanitaire actuelle. Prenez soin de vous et des gens qui
            vous entourent.
          </p>
        </div> -->




      <div id="ourObjectifCon">

        <h2 id="ourObjectifTitle">Notre objectif est la satisfaction des clients</h2>
        <img id="imdbanner" src="./admin/pages/home_page/imgs/<?php echo $home_page["img"]; ?>" alt="societe de plomberie pour les particulier Casabalanca">
      </div>
   
      <section id="ourClients">
        <h4 id="ourClientsTitle">Nos clients</h4>
        <div id="ourClientsCon" data-aos="fade-up" class="aos-init aos-animate">
          <div class="ourClientHolder">
            <div class="ourClientIconCon">
              <span class="material-icons-outlined"><i class="fa-solid fa-house-chimney-user"></i></span>
            </div>
            <div class="ourClientNameCon">
              <h3>RESIDENCES</h3>
            </div>
          </div>
          <div class="ourClientHolder">
            <div class="ourClientIconCon">
              <span class="material-icons-outlined"><i class="fa-solid fa-xmark fa-xl"></i></span>
            </div>
            <div class="ourClientNameCon">
              <h3>ENTREPRISES</h3>
            </div>
          </div>
          <div class="ourClientHolder">
            <div class="ourClientIconCon">
              <span class="material-icons-outlined"><i class="fa-solid fa-circle-check"></i></span>
            </div>
            <div class="ourClientNameCon">
              <h3>FÉDÉRATIONS &amp; ASSOCIATIONS</h3>
            </div>
          </div>
          <div class="ourClientHolder">
            <div class="ourClientIconCon">
              <span class="material-icons-outlined"><i class="fa-solid fa-user"></i></span>
            </div>
            <div class="ourClientNameCon">
              <h3>SECTEUR PUBLIQUE</h3>
            </div>
          </div>
        </div>

      </section>
      <br>
      <br>

      <!-- <div id="someNumbersCon">
  <h2 id="someNumbersTitle">Quelques chiffres</h2>
  <div id="numbersContainer">
      <div class="numberHolder">
          <span class="fas fa-user" aria-hidden="true"></span>
          <span class="numberToReach" id="firstOne">100</span>
          <span class="target">PROJETS</span>
      </div>
      <div class="numberHolder">
          <span class="fas fa-user" aria-hidden="true"></span>
          <span class="numberToReach" id="secondOne">3500</span>
          <span class="target">CLIENTS</span>
      </div>
      <div class="numberHolder">
          <span class="fas fa-user" aria-hidden="true"></span>
          <span class="numberToReach" id="thirdOne">200</span>
          <span class="target">PARTENAIRES</span>
      </div>
      <div class="numberHolder">
          <span class="fas fa-user" aria-hidden="true"></span>
          <span class="numberToReach" id="fourthOne">10</span>
          <span class="target">VILLES</span>
      </div>
      <div id="lightBlue"></div>
  </div>
</div>
<div id="askForDeviBigVersionCon">
  <div id="askForDevisCon1">
  <h2>Vous voulez <br> en savoir  plus ?</h2>
  <p>N’hésitez pas à prendre contact avec nous.</p>
  <span id="devisPhoneNumber"> (+212) 695-350-654</span>
  <a href="devis.php" id="askForDevisLink">DEMANDER VOTRE DEVIS</a>
  </div>
</div> -->

      <div class="container">
        <div class="row">
          <div class="col">
            <!-- <p class="text-uppercase mb-0 d-block text-center text-uppercase appear-animation animated fadeInUpShorter appear-animation-visible"
        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"
        style="animation-delay: 300ms;">our Specialists</p>
      <h3 class="text-color-quaternary mb-2 d-block text-center font-weight-bold text-capitalize appear-animation animated fadeInUpShorter appear-animation-visible"
        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
        style="animation-delay: 400ms;">Meet Our Doctors</h3>
      <p class="mb-4 d-block text-center appear-animation animated fadeInUpShorter appear-animation-visible"
        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
        style="animation-delay: 500ms;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Sed imperdiet libero id nisi euismod.Lorem ipsum dolor sit amet, consectetur adipiscing
        elit. Sed imperdiet
        libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci
        semper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet
        libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci
        semper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet
        libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci
        semper.</p> -->
          </div>




          <!-- <div class="col">
      <br> <br>
      <div class="owl-carousel owl-theme custom-owl-carousel stage-margin nav-style-1 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}" style="height: auto;">
        <div class="owl-stage-outer">
          <div class="owl-stage" style="transform: translate3d(-382px, 0px, 0px); transition: all 0.25s ease 0s; width: 1608px; padding-left: 40px; padding-right: 40px;">
            <div class="owl-item" style="width: 181px; margin-right: 10px;">
              <div class="text-center">
                <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                  <img alt="Doctor" class="img-fluid rounded" src="img/radiodiffusion.png">
                </a>
              </div>
            </div>

            <div class="owl-item" style="width: 181px; margin-right: 10px;">
              <div class="text-center">
                <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                  <img alt="Doctor" class="img-fluid rounded" src="img/cnss.png">
                </a>
              </div>
            </div>
            <div class="owl-item active" style="width: 181px; margin-right: 10px;">
              <div class="text-center">
                <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                  <img alt="Doctor" class="img-fluid rounded" src="img/telechargement-maroc.png">
                </a>
              </div>
            </div> -->
          <!-- <div class="owl-item active" style="width: 181px; margin-right: 10px;">
              <div class="text-center">
                <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                  <img alt="Doctor" class="img-fluid rounded" src="img-ad/téléchargement (1).png">
                  <strong class="font-weight-bold text-dark d-block text-4 mt-3 mb-0">Janice
                    Smith</strong>
                  <span class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">Dental
                    Care</span>
                </a>
              </div>
            </div> -->
          <br>
          <br>
          <br>
          <div class="container" >
    <div class="row" id="listes">
    <?php 
         foreach($home_partenaire as $partenaire){
          ?>
          <!-- les ecans de taille moyenne, la largeur de la colonne est de 3 unite sur une grille de 12 unites, creant ainsi une mise en page de 4 colonnes -->
          <div class="col-md-3">
          <img id="imgserr" alt="societe de plomberie Casabalanca" src="./admin/pages/home_page/partenaire_imgs/<?php echo $partenaire["img"]; ?>">
        </div>
        <?php
         }
      ?>
   
        </div>
    </div>
  </div>

<!-- 
          <div class="owl-item active" style="width: 181px; margin-right: 10px;">
            <div class="text-center">
              <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                <img alt="Doctor" class="img-fluid rounded" src="img/ram.png">
              </a>
            </div>
          </div>
          <div class="owl-item active" style="width: 181px; margin-right: 10px;">
            <div class="text-center">
              <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                <img alt="Doctor" class="img-fluid rounded" src="img/phama.png">
              </a>
            </div>
          </div>
          <div class="owl-item active" style="width: 181px; margin-right: 10px;">
            <div class="text-center">
              <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                <img alt="Doctor" class="img-fluid rounded" src="img/totalenergie.png">
              </a>
            </div>
          </div>
          <div class="owl-item active" style="width: 181px; margin-right: 10px;">
            <div class="text-center">
              <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                <img alt="Doctor" class="img-fluid rounded" src="img/radiodiffusion.png">
              </a>
            </div>
          </div>
          <div class="owl-item active" style="width: 146px; margin-right: 10px;">
            <div class="text-center" style="margin-top: -80px; margin-left: -100px;">
              <a href="demo-medical-2-our-doctors-detail.html" class="text-decoration-none">
                <img alt="Doctor" class="img-fluid rounded" src="img/cnss.png">
              </a>
            </div>
          </div>


        </div> -->
      </div>

    </div>

  </div>
  </div>


  </div>
  </div>
  </section>
  <div class="electro-mode-switcher">
    <a class="data-block electro-mode-switcher-item dark" href="#dark" data-mode="dark">
      <span class="d-block electro-mode-switcher-item-state">Dark</span>
    </a>
    <a class="d-block electro-mode-switcher-item light" href="#light" data-mode="light">
      <span class="d-block electro-mode-switcher-item-state">Light</span>
    </a>
  </div> 


  </div>

  <br>
  <br>

  <!-- <div class="" id="back">
  <div class="row" id="titl3">
    <div>
      <p id="l5">Société de Travaux de Peinture à Casablanca</p>
    </div>
  </div>
</div> -->

  <!-- Left Section End -->

  <!-- <hr />
<div class="row s">
  <div class="col-sm-4" style="text-align: center">
    <img src="img/intervention-de-dératisation-casablanca.png" alt="intervention casabanca" width="237"
      height="237" /><br />
    <h3 style="
          text-align: center;
          color: rgb(0, 49, 82);
        ">
      Intervention Rapide Sous 24h
    </h3>
    <br />
    <p style="text-align: center">
      Forte d’une équipe professionnelle et active dans le domaine de la
      désinsectisation dératisation et désinfection, Nous intervenons à
      <em>Casablanca</em> et partout au <em>Maroc</em> .
    </p>
  </div>
  <div class="col-sm-4" style="text-align: center">
    <img src="img/désinsectisation-casablanca-qualité.png" alt="désinsectisation casabanca" width="237"
      height="237" /><br />
    <h3 style="
          text-align: center;
          color: rgb(0, 49, 82);
        ">
      Engagement Qualité
    </h3>
    <br />
    <p style="text-align: center">
      Notre
      <a href="societe-peinture-particuliers-casablanca.html" style="color: black">
        société de dératisation au Maroc
      </a>
      a pris l’engagement de respecter les règles professionnelles pour
      apporter à sa clientèle, dans le respect des lois et règlements,
      l’assurance d’un travail bien fait.
    </p>
  </div>
  <div class="col-sm-4" style="text-align: center">
    <img src="img/satisfaction.webp" alt="satisfaction casabanca" width="237" height="237" /><br />
    <h3 style="
          text-align: center;
          color: rgb(0, 49, 82);
        ">
      Garantie Satisfaction
    </h3>
    <br />
    <p style="text-align: center">
      Notre
      <a href="societe-peinture-particuliers-casablanca.html" style="color: black">
        société de dératisation au Maroc
      </a>
      a pris l’engagement de respecter les règles professionnelles pour
      apporter à sa clientèle, dans le respect des lois et règlements,
      l’assurance d’un travail bien fait.
    </p>
  </div>
</div>

 -->

  <hr>
  <div id="newsletter" class="section" >
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <div class="newsletter">
          <p style="margin-left: 600px; font-size: 25px;">S'abonner à la <strong>NEWSLETTER</strong></p>
          <form>
            <input class="input" type="email" name="email" placeholder="Entrer votre adresse email">
            <button class="newsletter-btn" name="ok"><i class="fa fa-envelope"></i> S'abonner</button>
          </form>

        </div>
        </div>
        </div>
        </div>
        </body>

        <!-- Footer Start -->
        <footer id="footer">
          <!-- Footer Top Start -->
          <div class="footer-top">
            <div class="container" id="foorter-container">
              <div class="row">
                <div class="fixed-btn">
                  <a href="mailto:<?php echo $info["email"]; ?>"><i class="fas fa-comment-alt"
                      aria-hidden="true"></i></a>
                </div>
                <div class="fixed-btn1">
                  <a href="tel:+212<?php echo $info["Tel"]; ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </div>
                <div class="fixed-btn2">
                  <a href="https://api.whatsapp.com/send?phone=0627078073"><i class="fa-brands fa-whatsapp"
                      style="color: #FFF;" aria-hidden="true"></i></a>
                </div>

                <!-- insertion de l'élément fixe a gauche -->
                <div class="fixed-left">
                  <a href="#" id="site-scroll-top" class="show"><span class="fa-solid fa-chevron-up"
                      style="color:#FFF;"></span></a>
                </div>


                <!--description-->


                <div class="col-md-4 col" id="description">
                  <div class="col col-social-icons">
                    <a href="index.php"><img
                        style="width: 160px; height:160px; margin-bottom: 30px; margin-left: 145px;"
                        alt="Société de plomberie à Casablanca Maroc" height="86" src="img/logo footer.png"
                        width="120" /></a>
                    <p class="p-footer" id="pf">
                     <?php echo $info ["presentation"];?>
                    </p>
                    <a class="nav-link" href="contact.php"><img class="image-link" alt="Socite de deratisation"
                        src="img/contact/nous contactez.png" style="margin-left: 84px;"></a>

                  </div>
                </div>



                <!--nos services-->
                <div class="col-md-5 col" id="services">
                  <div class="col">
                    <h4 class="h-footer" id="h-service">Nos Services</h4>
                    <br>
                    <ul class="service-ul">
                      <div class="row">

                        <div class="col-md-6 service-left">
                          <li><a href="reparation-fuite-eau-casablanca.php">
                              <il> Reparatition fuite d'eau</il>
                            </a></li> <br>

                          <li><a href="remplacement-chauffe-eau-electrique-casablanca.php">
                              <il> Remplacement chauffe-eau electrique</il>
                            </a></li> <br>

                          <li><a href="debouchage-wc-casablanca.php">
                              <il>Debouchage WC</il>
                            </a></li> <br>

                          <li><a href="broyeur-casablanca.php">
                              <il> Broyeur</il>
                            </a></li> <br>

                          <li><a href="debouchage-machine-laver-casablanca.php">
                              <il> Debouchage machine a laver</il>
                            </a></li> <br>

                          <li><a href="depannage-plomberie-casablanca.php">
                              <il> Depannage plomberie</il>
                            </a></li> <br>

                          <li style="margin-left: 130px; "><a href="debouchage-canalisation-casablanca.php">
                              <il> Debouchage canalisation </il>
                            </a></li> <br>
                        </div>

                        <div class="col-md-6 service-right">
                          <li><a href="remplacement-robinet-casablanca.php">
                              <il> Remplacement robinet </il>
                            </a></li> <br>

                          <li><a href="ballon-eau-chaude-casablanca.php">
                              <il> Ballon d'eau chaude </il>
                            </a></li> <br>

                          <li><a href="urgence-plombier-casablanca.php">
                              <il> Urgence plombier Casablanca </il>
                            </a></li> <br>

                          <li><a href="installation-chaudiere-casablanca.php">
                              <il> Installation chaudière</il>
                            </a></li> <br>

                          <li><a href="installation-plomberie-casablanca.php">
                              <il> Installation de plomberie </il>
                            </a></li> <br>

                          <li><a href="chauffe-eau-casablanca.html">
                              <il> chauffe-eau </il>
                            </a></li> <br>


                        </div>
                      </div>
                    </ul>

                  </div>
                </div>



                <!--contact-->

                <div class="col-md-3 col" id="contact">
                  <div class="col">
                    <h4 class="h-footer">Contact</h4>

                    <ul class="contact-footer">
                      <hr>
                      <li>Adresse :  <?php echo $info["adresse"]; ?></li>
                      <hr>
                      <li> Tel : <a href="Tel:+212 <?php echo $info["Tel"]; ?>"> +212 <?php echo $info["Tel"]; ?></a></li>
                      <hr>
                     

                      <li><i class="fa-solid fa-envelope" style="color: #f5f9ff;"></i><a href="mailto:<?php echo $info["email"]; ?>"> <?php echo $info["email"]; ?></a></li>

                      <hr>
                    </ul>



                    <!--A PROPOS DE NOUS-->


                    <h4 class="h-footer">A PROPOS DE NOUS</h4>

                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d150484.96673729524!2d-7.531170778966888!3d33.546116603459296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1678362338005!5m2!1sfr!2sma"
                      width="265" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <a href="index.php">
                      <p><u>Société de Plomberie Casablanca Maroc</u></p>
                    </a>

                  </div>
                </div>

              </div>

              <!--copyright-->


              <div class="row">

                <div class="col-lg-3 "></div>


                <div class="col-lg-6 ">
                  <div class="row icon">
                    <div class="col item social">
                      <a href="<?php echo $info["facebook"]; ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                      <a href="<?php echo $info["linkedin"]; ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                      <a href="<?php echo $info["twitter"]; ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <div class="row copyright">
                    <div class="copyright"> &copy; Copyright 2022 by &nbsp; <a href="index.php">HVNET PLOMBERIE
                        Casablanca</a>. Tous droits réservés.</div>
                  </div>
                </div>


                <div class="col-lg-3 footer-logo"></div>
              </div>


            </div>
          </div>
          <!-- Footer Bottom End -->
        </footer>


      </div>


      <!-- The Scripts -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/jquery.parallax.js"></script>
      <script src="js/modernizr-2.6.2.min.js"></script>
      <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
      <script src="js/jquery.nivo.slider.pack.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/superfish.js"></script>
      <script src="js/tweetMachine.js"></script>
      <script src="js/tytabs.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/jflickrfeed.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/waypoints.min.js"></script>
      <script src="js/spectrum.js"></script>
      <script src="js/switcher.js"></script>
      <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
      <script src="js/jquery.gmap.min.js"></script>
      <script src="js/custom.js"></script>
    </div>
</body>

</html>