<?php
include 'librerie.php';
$comuni = getComuni(); // Recupera i comuni

?>





<!DOCTYPE html>
<html lang="en">
<head>

<!-- meta tags -->
<meta charset="utf-8">
<meta name="keywords" content="bootstrap 5, premium, multipurpose, sass, scss, saas, software, startup, technology" />
<meta name="description" content="HTML5 Template" />
<meta name="author" content="www.themeht.com" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Title -->
<title>Gestione clienti</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/pittogramma_classico.png" />

<!-- inject css start -->

<!--== bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--== bootstrap-icons -->
<link href="css/bootstrap-icons.css" rel="stylesheet" type="text/css" />

<!--== animate -->
<link href="css/animate.css" rel="stylesheet" type="text/css" />

<!--== magnific-popup -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />

<!--== owl-carousel -->
<link href="css/owl.carousel.css?v=2" rel="stylesheet" type="text/css" />

<!--== odometer -->
<link href="css/odometer.css" rel="stylesheet" type="text/css" />

<!--== spacing -->
<link href="css/spacing.css" rel="stylesheet" type="text/css" />

<!--== base -->
<link href="css/base.css?v=2" rel="stylesheet" type="text/css" />

<!--== shortcodes -->
<link href="css/shortcodes.css?v=2" rel="stylesheet" type="text/css" />

<!--== default-theme -->
<link href="css/style2.css" rel="stylesheet" type="text/css" />

<!--== modifiche -->
<link href="css/modifiche.css?v=2" rel="stylesheet" type="text/css" />

<!--== responsive -->
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!--== modifiche presonalizzate-->
<link href="css/chi-siamo.css?v=2" data-style="styles" rel="stylesheet">

<!-- inject css end -->
 

<!--== jquery -->
<script src="js/jquery.min.js"></script> 

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <div class="loader-text">Loading</div>
  </div>
</div>

<!-- preloader end -->


<!--header start-->

<header id="site-header" class="header">
  <div id="header-wrap">
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- Navbar -->
                  
          <nav class="navbar navbar-expand-lg">
            <img class="logo-nav" src="images/pittogramma_classico.png" alt="logo">  
            <a class="navbar-brand logo" href="index.html">
              <span> Gestione clienti</span>
            </a>
            <button class="navbar-toggler ht-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <svg width="100" height="100" viewBox="0 0 100 100">
                <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path>
                <path class="line line2" d="M 20,50 H 80"></path>
                <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path>
              </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <!-- Left nav -->
              <ul class="nav navbar-nav mx-auto">
                <!-- Home -->
                <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle" href="#home" data-bs-toggle="dropdown" >Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#piattaforma" data-bs-toggle="dropdown" >Piattaforma</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#prezzi" data-bs-toggle="dropdown">prezzi</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#recensioni" data-bs-toggle="dropdown">Recensioni</a>
                </li>
                <!-- 
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#certificazioni" data-bs-toggle="dropdown">certificazioni</a>
                </li>   -->          
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#contatti" data-bs-toggle="dropdown">contatti</a>
                </li>
              </ul>            
            </div>
            <a class="themeht-btn" id="it"  href="index.html">Accedi</a> <a class="themeht-btn dark-btn"   href="index-en.html">Acquista</a>    
          </nav>          
        </div>
      </div>
    </div>
  </div>
  
</header>

<!--header end-->


<!--page title start-->

<section class="page-title">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-12">
        <h1>
          Registrazione
        </h1>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">
                <i class="bi bi-house-door me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Shop</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Product Checkout</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="wave-shape">
    <svg width="100%" height="150px" fill="none">
      <path fill="#f8fafc">
        <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="10s" values="
          M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z;
          M0 86.3149C316 86.315 444 159.155 884 51.1554C1324 -56.8446 1320.29 34.1214 1538 70.4063C1814 116.407 2156 188.408 2560 86.315V232.317L0 232.316V86.3149Z;
          M0 53.6584C158 11.0001 213 0 363 0C513 0 855.555 115.001 1154 115.001C1440 115.001 1626 -38.0004 2560 53.6585V199.66L0 199.66V53.6584Z;
          M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z"></animate>
      </path>
    </svg>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--checkout start-->

<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-lg-10">
          <section>
              <div class="checkout-form">
                  <h2 class="mb-4 text-center">Inserimento Dati</h2>
                  <form class="row" action="inserisci_dati.php" method="post">
                      
                      <!-- 🔹 SEZIONE 1 - Titolo + 3 Campi -->
                      <div class="col-12">
                          <h4>Informazioni Aziendali<h4>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="ragioneSociale" class="form-label">Ragione Sociale</label>
                            <input type="text" class="form-control" id="ragioneSociale" name="ragioneSociale" placeholder="Inserire Ragione Sociale" required >
                            
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="partitaIva" class="form-label">Partita Iva</label>
                            <input type="text" class="form-control" id="partitaIva" name="partitaIva" minlength="11" maxlength="11" placeholder="Inserire Partita Iva" required>
                            >
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="codiceSdi" class="form-label">Codice SDI</label>
                            <input type="text" class="form-control" id="codiceSdi" name="codiceSdi" minlength="7" maxlength="7" placeholder="Inserire Codice SDI" required>
                            
                          </div>
                      </div>

                      <!-- 🔹 SEZIONE 2 - Titolo + 10 Campi -->
                      <div class="col-12 mt-4">
                          <h4>Responsabile - titolare dell'azienda<h4>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Inserire Nome" required >
                            
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="cognome" class="form-label">Cognome</label>
                            <input type="text" class="form-control" id="cognome" name="cognome" placeholder="Inserire Cognome" required >
                            
                          </div>
                      </div>
                      <div class="col-md-6">
                        <label for="codiceFiscale" class="form-label">Codice Fiscale</label>
                        <input type="text" class="form-control" id="codiceFiscale" name="codiceFiscale" minlength="16" maxlength="16" required>
                        
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                              <label for="indirizzo" class="form-label">Indirizzo</label>
                              <input type="text" class="form-control" id="indirizzo" name="indirizzo" placeholder="Inserisci il tuo indirizzo" required>
                             
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="citta" class="form-label">Città</label>
                            <input type="text" class="form-control" id="citta" name="citta" placeholder="Inserisci la città" required>
                            
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="comuneNascita" class="form-label">Comune di Nascita</label>
                            <select class="form-select" id="comuneNascita" name="comuneNascita">
                                <option value="" disabled selected>Seleziona un comune</option>
                                
                            </select>
                            
                          </div>
                      </div>
                      
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Numero di telefono">
                            
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Inserire email">
                            
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="pec" class="form-label">PEC</label>
                            <input type="pec" class="form-control" id="pec" name="pec" placeholder="Inserire PEC">
                            
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mb-3">
                          <label for="sitoInternet" class="form-label">Sito internet</label>
                          <input type="text" class="form-control" id="sitoInternet" name="sitoInternet" placeholder="Sito Internet" required>
                          
                        </div>
                    </div>

                      <!-- 🔹 SEZIONE 3 - Titolo + 5 Campi -->
                      <div class="col-12 mt-4">
                          <h4>Dati del Negozio<h4>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="nomeNegozio" class="form-label">Nome Negozio</label>
                            <input type="text" class="form-control" id="nomeNegozio" name="nomeNegozio" placeholder="Nome Negozio" required >
                            
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="telefonoNegozio" class="form-label" >Telefono</label>
                            <input type="tel" class="form-control" id="telefonoNegozio" name="telefonoNegozio" placeholder="Numero di telefono">
                            
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="emailNegozio" class="form-label">Email Negozio</label>
                            <input type="email" class="form-control" id="emailNegozio" name="emailNegozio" placeholder="Inserire email del negozio">
                            
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label for="indirizzoNegozio" class="form-label">Indirizzo</label>
                            <input type="text" class="form-control" id="indirizzoNegozio" name="indirizzoNegozio" placeholder="Idirizzo Negozio" required>
                            
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="cittaNegozio" class="form-label">Città</label>
                            <input type="text" class="form-control" id="cittaNegozio" name="cittaNegozio" placeholder="Inserisci la città" required>
                            
                        </div>
                      </div>
                      <div class="col-md-6">
                           <div class="form-group mb-3">
                              <label for="comuneNegozio" class="form-label">Comune</label>
                              <select class="form-select" id="comuneNegozio" name="comuneNegozio" autocomplete="off">
                                <option value=""></option>
                                  <?php
                                  
                                    foreach ($comuni as $codice => $dati) { 
                                        // $dati[0] contiene il nome del comune
                                        echo '<option value="'.htmlspecialchars($codice).'">'.htmlspecialchars($dati[0]).'</option>';
                                    }
                                  ?>
                              </select>
                            </div>
                        
                      </div>

                      <!-- Pulsante di Invio -->
                      <div class="col-12 text-center mt-4">
                          <button type="submit" class="themeht-btn">Conferma Ordine</button>
                      </div>

                  </form>
              </div>
          </section>
      </div>
  </div>
</div>


<!--checkout end-->


</div>



<!--body content end--> 


<!--footer start-->

<footer class="footer" data-bg-img="images/bg/02.png">
  <div class="container">
    <div class="primary-footer">
      <div class="row">
        <div class="col-lg-5 col-md-12">
          <h5>Get In Touch</h5>
          <ul class="media-icon list-unstyled mb-8">
            <li>
              <p class="mb-0">5th Street, 21st Floor, New York, USA </p>
            </li>
            <li>
              <a href="mailto:themeht23@gmail.com">themeht23@gmail.com</a>
            </li>
            <li>
              <a href="tel:+912345678900">+91-234-567-8900</a>
            </li>
          </ul>
          <h5>Follow Us</h5>
          <ul class="list-inline ps-0 ms-0 footer-social">
            <li class="list-inline-item">
              <a href="#">
                <i class="bi bi-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="bi bi-dribbble"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="bi bi-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="bi bi-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="bi bi-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-7 col-md-12 mt-6 mt-lg-0">
          <h5>Information</h5>
          <div class="row">
            <div class="col-lg-4 col-md-4 mt-5 mt-md-0 footer-menu">
              <ul class="list-unstyled w-100">
                <li>
                  <a href="about-us.html">About Us</a>
                </li>
                <li>
                  <a href="services.html">Service</a>
                </li>
                <li>
                  <a href="team.html">Team</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 mt-5 mt-md-0 footer-menu">
              <ul class="list-unstyled w-100">
                <li>
                  <a href="blog-right-sidebar.html">Blog</a>
                </li>
                <li>
                  <a href="error-404.html">Error 404</a>
                </li>
                <li>
                  <a href="contact.html">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 mt-5 mt-md-0 footer-menu">
              <ul class="list-unstyled">
                <li>
                  <a href="faq.html">Faq</a>
                </li>
                <li>
                  <a href="privacy-policy.html">Privacy Policy</a>
                </li>
                <li>
                  <a href="terms-and-conditions.html">Terms</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row mt-8">
            <div class="col-md-10">
              <h5>Subscribe Our Newsletter</h5>
              <div class="subscribe-form">
                <form id="mc-form" class="mc-form">
                  <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                  <input class="subscribe-btn" type="submit" name="subscribe" value="Subscribe Now">
                </form>
                <small class="d-block mt-3">Get started for 1 Month free trial No Purchace required.</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer">
    <div class="container">
      <div class="copyright">
        <div class="row text-center">
          <div class="col">Copyright 2023 Soften Theme by <u>
              <a href="#">ThemeHt</a>
            </u> | All Rights Reserved </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->
<script>

      $('#comuneNegozio').select2({
        minimumInputLength: 3,
        placeholder: "Seleziona un comune",
        allowClear: true,
        dropdownParent: $('.checkout-form'),
        theme : bootstrap4
        
      });

      
  
</script>
</div>

<!-- page wrapper end -->


<!--back-to-top start-->

<div class="scroll-top">
  <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>

<!--back-to-top end-->

 
<!-- inject js start -->




<!--== bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>

<!--== jquery-appear -->
<script src="js/jquery-appear.js"></script> 

<!--== owl-carousel -->
<script src="js/owl.carousel.min.js"></script> 

<!--== magnific-popup --> 
<script src="js/jquery.magnific-popup.min.js"></script>

<!--== counter -->
<script src="js/odometer.min.js"></script>

<!--== countdown -->
<script src="js/jquery.countdown.min.js"></script> 

<!--== wow -->
<script src="js/wow.min.js"></script>

<!--== theme-script -->
<script src="js/theme-script.js"></script>

<!-- inject js end -->




</body>

</html>
