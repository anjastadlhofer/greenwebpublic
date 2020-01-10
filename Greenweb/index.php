<?php
	include("open.inc.php");
?>
<!DOCTYPE html>

<html lang="en">
    
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GreenWeb</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">
    <link href="css/move.css" rel="stylesheet" type="text/css" />


    <!-- Plotly.js -->
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    
</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Green Web</span>
      
        <img class="img-fluid img-profile rounded-circle mt-0 mb-2" src="img/logo.png" alt="">
      
    </a>
      <br>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#move">Move</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#grow">Grow</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#explore">Explore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#consume">Consume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#quiz">Quiz</a>
        </li>
          <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#impressum">Impressum</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">Green
          <span class="text-primary">Web</span>
        </h1>
        <div class="subheading mb-5">FH Joanneum
          <a href="mailto:name@email.com">info@fh-joanneum.at</a>
        </div>
        <p class="lead mb-5">Diese Website dient zur Veranschaulichung des <b>Energieverbrauches</b> bezogen auf <b>Webanwendungen</b> wie z.B. Streaming, Blogs, Webshops etc. Folgend befinden sich verschiedene interaktive Visualisierungen basierend auf eigenen Messungen. Diese Website inkl. der relevanten Messungen entstanden im Zuge der bereichsübergreifenden Projektarbeit von IMA17. 
            <br>
                        
        <div class="social-icons">
     
          <a href="https://www.instagram.com/fh_joanneum/?hl=de">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/fhjoanneum/">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

<?php
	include("move.php");
?>
   <?php
	include("grow.php");
?>   
   <?php
	include("explore.php");
?>  
<?php
	include("consume.php");
?>
<?php
	include("quiz.php");
?>
<?php
	include("impressum.php");
?>


   
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>
