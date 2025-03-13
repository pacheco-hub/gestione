<?php
session_start();
include 'librerie.php';
$comuni = getComuni(); // Recupera i comuni

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordinazioni</title>
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
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />

  <!--== odometer -->
  <link href="css/odometer.css" rel="stylesheet" type="text/css" />

  <!--== spacing -->
  <link href="css/spacing.css" rel="stylesheet" type="text/css" />

  <!--== base -->
  <link href="css/funziona.css?v=3" rel="stylesheet" type="text/css" />


  <!--== shortcodes -->
  <link href="css/shortcodes.css?=2" rel="stylesheet" type="text/css" />

  <!--== default-theme -->
  <link href="css/style2.css" rel="stylesheet" type="text/css" />

  <!--== responsive -->
  <link href="css/responsive.css" rel="stylesheet" type="text/css" />

  <!--== modifiche -->
  <link href="css/modifiche.css" data-style="styles" rel="stylesheet">

  <!--== modifiche presonalizzate-->
  <link href="css/chi-siamo.css" data-style="styles" rel="stylesheet">
  <link href="css/ordinazione.css?=2" data-style="styles" rel="stylesheet">
  




  <!-- inject css end -->
    
  <!-- Aggiungi il CSS di Select2 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" rel="stylesheet">
   
  <!--capthca 3  -->

<script src="https://www.google.com/recaptcha/api.js?render=6Lf0HfMqAAAAANou-wuqhN_X4NJpQfH7BtaoWnIf"></script>


    
</head>
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
            <button class="navbar-toggler ht-toggler" type="button"  data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item dropdown" >
                  <a class="ordina" href="index.html" target="_blank">home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="ordina" href="index.html#piattaforma" target="_blank" >Piattaforma</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="ordina" href="index.html#prezzi" target="_blank" >prezzi</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="ordina" href="index.html#recensioni" target="_blank">Recensioni</a>
                </li>
                
                <!-- 
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#certificazioni" data-bs-toggle="dropdown">certificazioni</a>
                </li>   -->          
                
                
              </ul>            
            </div>
            <a class="themeht-btn" id="it"  href="https://www.diego.gestioneclienti.cloud/sw/piattaforma/index.php" target="_blank">Accedi</a> <a class="themeht-btn dark-btn"   href="index.html">Home</a>    
          </nav>          
        </div>
      </div>
    </div>
  </div>
  
</header>

<!--header end-->
    

<body>

<!--page title start-->

<section class="page-title">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-12">
        <h1>
          ATTIVA LA TUA PROVA
        </h1>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html" target="_blank">
                <i class="bi bi-house-door me-1 "></i>Home</a>
            </li>
            
            <li class="breadcrumb-item active" aria-current="page">Ordine</li>
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



    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 theme-title prova">
          
          <h4 class="mt-5 ">Inizia la tua prova gratuita di 14 giorni</h4>
          <p>Al fine di attivare il software e offrirti il miglior supporto, raccoglieremo i tuoi dati personali. Ti contatteremo per guidarti nel processo di attivazione.</p>
          
          

          <p>Offriamo formazione senza limiti per aiutarti a sfruttare al massimo il nostro software. Ti guideremo passo dopo passo, con sessioni di supporto sempre disponibili per rispondere a ogni tua esigenza.</p>
          
        </div>
      </div>
    </div>

    <a id="preventivo" class="themeht-btn dark-btn" href="#">Richiedi la prova</a>

    <?php


  // Visualizza il messaggio di successo (se presente)
  if (isset($_SESSION['successMessage'])): ?>
      <div id="successMessage" class="alert alert-success mt-3 text-center" role="alert">
          <?php echo $_SESSION['successMessage']; ?>
      </div>
      <script>
          window.onload = function() {
              var successMessage = document.getElementById("successMessage");
              if (successMessage) {
                  // Mostra il messaggio di successo
                  successMessage.style.display = "block";

                  // Nascondi il messaggio dopo 2 secondi
                  setTimeout(function() {
                      successMessage.style.display = "none";
                  }, 2000);
              }
          };
      </script>
      <?php unset($_SESSION['successMessage']); // Rimuove il messaggio dalla sessione dopo che è stato mostrato ?>
  <?php endif; ?>

  <div id="successMessage" style="display:none;" class="alert alert-success">Modulo inviato correttamente!</div>

  <div id="formPreventivo" class="container mt-5 form-container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <section>
          <div class="checkout-form">
              <h2 class="mb-4 text-center">Inserimento Dati</h2>
              <!-- Mostra il messaggio di successo o errore -->
              
              <form class="row container-fluid" action="inserisci_dati.php" method="post" >
                  
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
                    <input type="text" class="form-control" id="codiceFiscale" name="codiceFiscale" placeholder="Inserire codice fiscale" minlength="16" maxlength="16" required>
                    
                  </div>
                  <div class="col-md-6">
                      <div class="form-group mb-3">
                          <label for="indirizzo" class="form-label">Indirizzo</label>
                          <input type="text" class="form-control" id="indirizzo" name="indirizzo" placeholder="Inserisci il tuo indirizzo" required>
                          
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="stato" class="form-label">città</label>
                        <input type="text" class="form-control" id="stato" name="stato" placeholder="Inserisci la città" required>   
                    </div>
                    <div id="avvisoNascita" class="alert alert-info" style="display:none;">
                        Se sei nato all'estero, scrivi "Estero" e non selezionare un comune di nascita.
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="comuneNascita" class="form-label">Comune di Nascita</label>
                        <select class="form-select" id="comuneNascita" name="comuneNascita">
                            <option value=""></option>
                            <?php
                              
                                foreach ($comuni as $codice => $dati) { 
                                    // $dati[0] contiene il nome del comune
                                    echo '<option value="'.htmlspecialchars($dati[0]).'">'.htmlspecialchars($dati[0]).'</option>';
                                }
                              ?>
                            
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
                                      echo '<option value="'.htmlspecialchars($dati[0]).'">'.htmlspecialchars($dati[0]).'</option>';
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


  <div class="container assistenza">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          
          
          
          <h4 class="mt-5 text-theme">Assistenza sempre al tuo fianco</h4>
          <p class="mt-5">Il nostro team di assistenza è sempre a tua disposizione per qualsiasi domanda o necessità. Ti accompagneremo in ogni fase, dall’attivazione del software all’uso quotidiano, per garantirti un’esperienza senza problemi.</p>
          
          <ul class="list-unstyled list-icon">
            <li class="mb-3"> <i class="bi bi-arrow-right"></i> Assistenza telefonica dalle 08:30 alle 12:30.&nbsp;<a href="tel:+390858293115"> +39-085-8293115</a></li>
             
            <li class="mb-3"> <i class="bi bi-arrow-right"></i> Supporto via email con risposta entro 24 ore&nbsp; <a href="mailto:andilab@pec.it">andilab@pec.it</a></li>
            
            
          </ul>

          <p>Offriamo formazione senza limiti per aiutarti a sfruttare al massimo il nostro software. Ti guideremo passo dopo passo, con sessioni di supporto sempre disponibili per rispondere a ogni tua esigenza.</p>
          
        </div>
      </div>
    </div>

<!--footer start-->

<footer class="footer"  data-bg-img="images/bg/05.jpg" style="background-image: url(images/bg/05.jpg);" id="contatti" >
  <div class="container">
    <div class="primary-footer">
      <div class="row">
        <div class="col-lg-5 col-md-12">
          <h5>andilab</h5>
          <ul class="media-icon list-unstyled mb-8">
            <li>
              <a href="https://www.google.it/maps/place/Via+dei+Normanni,+17,+65014+Loreto+Aprutino+PE" target="_blank">
                <i class="bi bi-pin-map"></i> Via dei Normanni 17, Pescara
              </a>
            </li>
            <li>
              <a href="mailto:info@andilab.it">
                <i class="bi bi-envelope"></i> info@andilab.it
              </a>
            </li>
            <li>
              <a href="mailto:andilab@pec.it">
                <i class="bi bi-envelope-check"></i> andilab@pec.it
              </a>
            </li>
            <li>
              <a href="tel:+390858293115">
                <i class="bi bi-telephone"></i> +39-085-8293115
              </a>
            </li>
          </ul>
          <h5>PROGETTI</h5>
          <ul class="list-inline ps-0 ms-0 footer-social">
            <li class="list-inline-item">
              <a href="https://andilab.it/progetto-autoscuole-friuli.php" target="_blank">
                  <img class="piattaforme" src="images/gestioneclienti-logo.png" alt="">
                  <div class="text"> <p>Gestione Clienti</p></div>
              </a>
          </li>
          
            <li class="list-inline-item">
              <a href="https://andilab.it/progetto-istruzione-salute.php" target="_blank">
                <img class="piattaforme" src="images/piattaforma_is.png" alt="">
                <div class="textto"><p>Istruzione Salute</p></div>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://andilab.it/progetto-piattaforma-istruzione.php" target="_blank">
                <img class="piattaforme" src="images/piattaforma_pi.png" alt="">
                <div class="textto"><p>Piattaforma Istruzione</p></div>
              </a>
            </li>
            
            
          </ul>
          <!--<h5>SEGUICI</h5>
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
          </ul>-->
        </div>
        <div class="col-lg-7 col-md-12 mt-6 mt-lg-0">
          <h5>INFORMAZIONI</h5>
          <div class="row">
            <div class="col-lg-4 col-md-4 mt-5 mt-md-0 footer-menu">
              <ul class="list-unstyled w-100">
                <li>
                  <a href="https://andilab.it/richiedi-preventivo.php" target="_blank">Richiedi un preventivo</a>
                </li>
                <li>
                  <a href="https://andilab.it/" target="_blank">Andilab</a>
                </li>
                <!--<li>
                  <a href="https://andilab.it/project.php" target="_blank">Servizi</a>
                </li>-->
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 mt-5 mt-md-0 footer-menu">
              <ul class="list-unstyled w-100">
                <li>
                  <a href="https://andilab.it/tecnologia-aziendale.php" target="_blank">Tecnologia</a>
                </li>
                <li>
                  <a href="https://andilab.it/contact.php" target="_blank">Contattaci</a>
                </li>
                <!--<li>
                  <a href="https://andilab.it/contact.php" target="_blank">Contattaci</a>
                </li>-->
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 mt-5 mt-md-0 footer-menu">
              <ul class="list-unstyled">
                <li>
                  <a href="https://andilab.it/project.php" target="_blank">Servizi</a>
                </li>
                <li>
                  <a href="https://andilab.it/politica-aziendale.php" target="_blank">Politica aziendale</a>
                </li>
                <!--<li>
                  <a href="terms-and-conditions.html" target="_blank">Terms</a>
                </li>-->
              </ul>
            </div>
          </div>
          <div class="row mt-8">
            <div class="col-md-10">
              <h5 style="display: inline; margin-right: 10px;">Vuoi saperne di più? Lascia la tua email</h5> 
              <div class="subscribe-form">
                <form id="mc-form" class="mc-form">
                  <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Inserisci Email" required="">
                  <div class="g-recaptcha" data-sitekey="6Lfwq9kqAAAAAPPRKedPhFiAMpX6sYanmEfQAR5G"></div>
                  <input class="subscribe-btn" type="submit" name="subscribe" value="Invia">
                </form>

                <!--<small class="d-block mt-3">Get started for 1 Month free trial No Purchace required.</small>-->
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
          <div class="col"> © Andilab S.r.l. | Registro Imprese di Pescara Chieti - REA 417993 | P.IVA / Cod. Fisc.: 02326560683 <br>  
            <a href="https://andilab.it/privacy&cookie.php" target="_blank">Privacy & Cookies</a>
           </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->

<!--mappa start-->

<section class="overflow-hidden p-0 mappa" >
  <div class="container-fluid p-0">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="map iframe-h">
          <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDhMBjIubJ9WVoAWYZ7JZcraymqGPlw1cI&q=Andilab,45.41909407833114,10.96393879900965" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!--mappa end-->

<!--back-to-top start-->

<div class="scroll-top">
  <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>

<!--back-to-top end-->



    <!-- Bootstrap JS + Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Caricamento di jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Aggiungi il JS di Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>
   
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
    <script src="js/theme-script.js?v=2"></script>

    <!-- inject js end -->

    <!-- captcha end -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>                                


    <script>
        $(document).ready(function() {
            $('#comuneNascita').select2({
                width: '100%',
                minimumInputLength: 3,
                placeholder: "Seleziona un comune",
                allowClear: true,
                dropdownAutoWidth: true,  // Aggiungi questa linea per fare in modo che la lista venga visualizzata correttamente
                language: {
                    noResults: function() {
                        return "Nessun risultato trovato";  // Modifica il testo "No results found"
                    },
                    inputTooShort: function() {
                        return "Inserisci almeno 3 caratteri";  // Modifica il testo "Please enter 3 or more characters"
                    }
                }
                
                
            });
            $('#comuneNegozio').select2({
                width: '100%',
                minimumInputLength: 3,
                placeholder: "Seleziona un comune",
                allowClear: true,
                dropdownAutoWidth: true,  // Aggiungi questa linea per fare in modo che la lista venga visualizzata correttamente
                language: {
                    noResults: function() {
                        return "Nessun risultato trovato";  // Modifica il testo "No results found"
                    },
                    inputTooShort: function() {
                        return "Inserisci almeno 3 caratteri";  // Modifica il testo "Please enter 3 or more characters"
                    }
                }
                
            });
               
        
        });
        // Ottieni gli elementi del bottone e del form
        const preventivoButton = document.getElementById('preventivo');
        const formPreventivo = document.getElementById('formPreventivo');

        // Aggiungi l'evento di click sul bottone
          preventivoButton.addEventListener('click', function(event) {
            event.preventDefault(); // Impedisce il comportamento di default del link
            
            // Aggiungi o rimuovi la classe per mostrare il form
            if (formPreventivo.style.display === 'none' || formPreventivo.style.display === '') {
                formPreventivo.style.display = 'block';
                // Dopo che il display è cambiato, inizia la transizione
                setTimeout(function() {
                    formPreventivo.style.maxHeight = formPreventivo.scrollHeight + 'px'; // Imposta l'altezza al contenuto
                }, 10);
            } else {
                // Per nascondere il form, torna all'altezza zero
                formPreventivo.style.maxHeight = '0';
                setTimeout(function() {
                    formPreventivo.style.display = 'none'; // Nascondi il form dopo la transizione
                }, 500); // Questo deve essere lo stesso tempo della transizione
            }
          });

        
        // Seleziona il bottone della navbar e il div che contiene la navbar
          const navbarToggler = document.querySelector('.navbar-toggler');
          const navbarCollapse = document.getElementById('navbarNav');

          // Aggiungi un evento di click sul bottone per alternare la classe 'show'
          navbarToggler.addEventListener('click', function() {
              // Verifica se l'elemento della navbar ha la classe 'show'
              if (navbarCollapse.classList.contains('show')) {
                  // Se ha la classe 'show', rimuovila (chiudi la navbar)
                  navbarCollapse.classList.remove('show');
                  navbarToggler.setAttribute('aria-expanded', 'false'); // Imposta l'aria-expanded su 'false'
              } else {
                  // Se non ha la classe 'show', aggiungila (apri la navbar)
                  navbarCollapse.classList.add('show');
                  navbarToggler.setAttribute('aria-expanded', 'true'); // Imposta l'aria-expanded su 'true'
              }
          });

          // Quando l'utente clicca sul campo "Città"
          document.getElementById("stato").addEventListener("focus", function() {
              document.getElementById("avvisoNascita").style.display = "block"; // Mostra l'avviso
          });

          // Quando l'utente esce dal campo "Città"
          document.getElementById("stato").addEventListener("blur", function() {
              document.getElementById("avvisoNascita").style.display = "none"; // Nascondi l'avviso
          });

          grecaptcha.ready(function() {
              grecaptcha.execute('6Lf0HfMqAAAAANou-wuqhN_X4NJpQfH7BtaoWnIf', {action: 'homepage'}).then(function(token) {
                  // Invia il token al server per la verifica
                  fetch('verifica.php', {
                      method: 'POST',
                      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                      body: 'recaptcha_response=' + token
                  })
                  .then(response => response.text())
                  .then(data => console.log('Risposta reCAPTCHA:', data));
              });
          });


           
           
          


    



    </script>
    

    



    
    
</body>
</html>



