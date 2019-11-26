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
          <a class="nav-link js-scroll-trigger" href="#streaming">Streaming</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#dummy">Dummy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#creativity">Creativity</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
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
          <a href="mailto:name@email.com">test@edu.fh-joanneum.at</a>
        </div>
        <p class="lead mb-5">Erklärung</p>
        <div class="social-icons">
          <a href="#">
            <i class="fab fa-baby"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
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
	include("streaming.php");
?>   
   <?php
	include("dummy.php");
?>  
<?php
	include("creativity.php");
?>


    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">Awards &amp; Certifications</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Google Analytics Certified Developer</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Mobile Web Specialist - Google Certification</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            2<sup>nd</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - James Buchanan High School - Hackathon 2006</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            3<sup>rd</sup>
            Place - James Buchanan High School - Hackathon 2005</li>
        </ul>
      </div>
    </section>

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
