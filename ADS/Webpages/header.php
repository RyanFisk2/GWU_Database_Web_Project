<!DOCTYPE html>
<html lang="en">

<style>
  .stick-wrapper {
    position: fixed;
  }
</style>

<head>
  <link rel="icon" href="images/icon.svg">

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
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <!--<link rel="stylesheet" type="text/css" href="style.css" />-->
  <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="mx-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                <div class="site-logo">
                  <a href="superindex.php" class="d-block">
                  <img src="images/logotry3.png" alt="Image" class="img-fluid" height="100" width="115">
                  </a>
                </div>
                </li>
                <li>
                  <a href="superindex.php" class="nav-link text-left">Home</a>
                </li>
  <?php
          session_start();
          if (isset($_SESSION['acc_type'])) {
          echo '
            <li>
              <a href="index.php" class="nav-link text-left">Advising Home</a>
            </li>
            <li>
              <a href="reset.php" class="nav-link text-left">Reset Database</a>
            </li>
          ';
          }
          if (!isset($_SESSION['acc_type'])) {
            echo'<li>
            <a href="login.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-unlock-alt"></span> Log In </a>
            </li>';
          } 
          else {
            echo'<li>
            <a href="logout.php" style="Color: #FFFFFF;" class="small btn btn-primary rounded-2 px-4 py-2">Logout</a>
            </li>';
          }
  ?>
        </nav>

      </div>
    </div>
  </div>

</header>
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

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
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
