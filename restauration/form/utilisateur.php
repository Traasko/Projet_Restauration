<!doctype html>
<html lang="en">
  <head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticons/font/flaticon.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

<!-- Style -->

<body>

  <header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">GAV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="recettes.php">Recettes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="apropos.php">A propos</a>
            </li>

          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item cta-btn">
              <a class="nav-link" href="inscription_restauration.php">Inscription</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item cta-btn">
              <a class="nav-link" href="connexion_restauration.php">Connexion</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>

    <!-- header -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('img/hero_1.jpg');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Utilisateur</h1>
              <p class="mb-5">Vous voilà connecté</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- slider -->

    <section class="section element-animate">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Réservation</h2><br><br>
              <form action="../traitement/traitement_reservation.php" method="POST">
          			<input type="text" placeholder="Nom" class="txtb" name="nom">
          			<input type="text" placeholder="Prénom" class="txtb" name="prenom">
                <input type="text" placeholder="Téléphone" class="txtb" name="phone">
          			<input type="text" placeholder="Date" class="txtb" name="date">
                <input type="text" placeholder="Heur" class="txtb" name="heur">
          			<input type="submit" value="Réserver" class="connex-btn">
            </div>
          </div>
        </div>
      </div>

      <?php
            $bdd= new PDO('mysql:host=localhost;dbname=project;charset=utf8','root','');
            $rep=$bdd->query('SELECT * from ins_rest');
            $donne=$rep->fetchall();
            foreach ($donne as $value) {
            echo "id = ".$value['id']." "."nom = ".$value['nom']." "."prenom = ".$value['prenom']." "."mail = ".$value['mail']."mdp = ".$value['mdp']." "."<br><br>";
        }
      ?>

    <section class="section bg-light element-animate">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Localisation</h2>
              <div class="clearfix mb-5 pb-5">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12 text-center heading-wrap"><br></br>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.651299379656!2d2.2896304000000005!3d48.86485940000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fe4d7e385a1%3A0x19ed44cc28553775!2s33%20Rue%20de%20Longchamp%2C%2075116%20Paris!5e0!3m2!1sfr!2sfr!4v1582530863446!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- .section -->

    <section class="section element-animate">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Un problème ?</h2>
              <span class="back-text"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Nom</label>
                  <input type="text" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Téléphone</label>
                  <input type="text" id="phone" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">

                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Mail</label>
                  <input type="email" id="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Message</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary">
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
              <h4 class="mb-5">Nos informations</h4>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>33 Rue de Longchamp, 75116 Paris</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>01-23-45-67-89</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>info@way.com</span>
                </p>
              </div>

          </div>
        </div>
      </div>

    </section>


    <!-- .section -->

    <section class="py-5 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="row">
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- footer -->

        <footer class="site-footer" role="contentinfo">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-4 mb-5">
                <h3>Nous concernant</h3>
                <p class="mb-5">Nous sommes un restaurant qui a ouvert ses portes en juillet 2019, nos chefs sont expérimentés</p>

              </div>
              <div class="col-md-5 mb-5">
                <div class="mb-5">
                  <h3>Heures d'ouvertures</h3>
                  <p><strong class="d-block">Lundi-Lundi</strong> 17h - 22h</p>
                </div>
              </div>
              <div class="col-md-3 mb-5">
    						<h3>Nos informations</h3>
    						<ul class="list-unstyled footer-link">
    							<li class="d-block">
    								<span class="d-block">Adresse:</span>
    								<span class="text-white">33 Rue de Longchamp, 75116 Paris</span></li>
    							<li class="d-block"><span class="d-block">Téléphone:</span><span class="text-white">01 23 45 67 89</span></li>
    							<li class="d-block"><span class="d-block">Email:</span><span class="text-white">info@way.com</span></li>
    						</ul>
              </div>
              <div class="col-md-3">

              </div>
            </div>
            <div class="row">
              <div class="col-12 text-md-center text-left">
                <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made by Thomas Yalap</a>
            </p>
              </div>
            </div>
          </div>
        </footer>
        <!--  footer -->

        <!-- loader -->
        <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>

        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>

        <script src="js/main.js"></script>
      </body>
    </html>
</html>
