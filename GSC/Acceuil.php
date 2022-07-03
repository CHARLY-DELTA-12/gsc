<?php

$host="localhost";
$user="root";
$password="";
$db="etude";



$data= mysqli_connect($host,$user,$password, $db);

if($data===false){

  die("connect error"); 
}

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{

    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql= "select * from administration  where email='".$email."' AND password='".$password."'";
    
    $result= mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if($row["type"]=="administration"){
      header("location:admin.php");
    }
    
    
}

?>















<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GROUPE SUPdeCO &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.html">GROUPE SUPdeCO</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li class="cta"><a href="#home-section" class="nav-link"><span>Acceuil</span></a></li>
                <li class="cta"><a href="#courses-section" class="nav-link"><span>Filiéres & Classes</span></a></li>
                <li class="cta"><a href="#programs-section" class="nav-link"><span>Connexion</span></a></li>
                <li class="cta"><a href="emplois.php" class="nav-link"><span>Etudiants</span></a></li>
    
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Nous Contacter</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('images/sdc1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Gestion des Salles de Classes</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Bienvenue dans le site de gestion des salles de classes de l'école supérieur de commmerce (SUPdeCO). 
                  Elle a pour objectif de voir en  fonction de la disponibilité des salles de classes et s'il y a moyen de faire cours.</p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="#programs-section" class="btn btn-primary py-3 px-5 btn-pill">S'identifier </a></p>

                </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section courses-title" id="courses-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Filiéres & Classes</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/esitec.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">3 salles classes + 1 salle informatique</span>
                <div class="meta"><span class="icon-clock-o"></span></div>
                <h3><a href="#">Ecole SIentifique et TEChnologique (ESITEC)</a></h3>
                <p>Des cours sont plannifiés tout les jours du Lundi au Samedi. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>70 Etudiants</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 1</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/ist.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">3 salles de classes</span>
                <div class="meta"><span class="icon-clock-o"></span></div>
                <h3><a href="#">Institut Superieur des Transports (IST)</a></h3>
                <p>Des cours plannifier tout les jours du Lundi au Samedi.
                  Il y a aussi des cours du soir et les week-end pour les Master.</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 130 Etudiants</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/mercure.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">3 salles de classes</span>
                <div class="meta"><span class="icon-clock-o"></span></div>
                <h3><a href="#">GESTION DES ENTREPRISES</a></h3>
                <p>Des cours plannifier tout les jours du Lundi au Samedi.
                  Il y a aussi des cours du soir et les week-end pour les Master. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 200 Etudiants</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 3</div>
              </div>
            </div>



            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/epita.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">1 salle de classe</span>
                <div class="meta"><span class="icon-clock-o"></span></div>
                <h3><a href="#">L'École Informatique et les Techniques Avancées (EPITA) </a></h3>
                <p>Des cours plannifier tout les jours du Lundi au Samedi.
                  Il y a aussi des cours du soir et les week-end pour les Master.</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>50 Etudiants</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 4</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/droit.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">2 salles de classes</span>
                <div class="meta"><span class="icon-clock-o"></span></div>
                <h3><a href="#">L'ECOLE DE DROIT </a></h3>
                <p>Des cours plannifier tout les jours du Lundi au Samedi.
                  Il y a aussi des cours du soir et les week-end pour les Master.</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 100 Etudiants</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 5</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/langue.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">1 salle de classe </span>
                <div class="meta"><span class="icon-clock-o"></span></div>
                <h3><a href="#">L'Institut de Langue</a></h3>
                <p>Des cours plannifier tout les jours du Lundi au Samedi.
                  Il y a aussi des cours du soir .</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 20 Etudiants </div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 6</div>
              </div>
            </div>

          </div>

         

        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Précédent</button>
            <button class="customNextBtn btn btn-primary m-1">Suivant</button>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Connexion</h2>
          </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-2"></div>
        <div class="col-lg-8 text-center " data-aos="fade-up" data-aos-delay="500">
                  
          <form action="code.php" method="post" class="form-box justify-content-center align-item-center">
            
    
            <h2 class="h4 text-black mb-4" style="text-align:center; margin-top: 24px">S'identifier </h2>
            <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="email">
            </div>
            <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Mot de Passe">
            </div>
            <div class="form-group">
            <input type="submit" name="connect" class="btn btn-primary btn-pill" value="Soumettre">
            </div>
           
          </form>
    
        </div>           
        <div class="col-2"></div> 
        </div>
        <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>A propos </h3>
            <p>Première Business School du Sénégal, le Groupe Supdeco Dakar forme des managers de haut niveau dans tous les métiers du management et des TIC depuis 1993.
</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Liens</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Acceuil</a></li>
              <li><a href="#">Filiéres & Classes</a></li>
              <li><a href="#">Connexion</a></li>
              <li><a href="#">Etudiants</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Souscrire</h3>
            <p>Entrer votre email pour plus d'informations </p>
            <form action="#" class="footer-subscribe">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script>  Tous les droits sont réservés | ce template est produit<i class="icon-heart" aria-hidden="true"></i> par <a href="https://colorlib.com" target="_blank" >les etudiants de SUPdeCO</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
   

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>