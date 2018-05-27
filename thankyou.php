<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lumbini Peace Travels and Tours</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome & Pixeden Icon Stroke icon font-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <!-- Google fonts - Roboto Condensed & Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400">
    <!-- lightbox-->
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <style type="text/css">
          .error{
            color:red;
          }
        </style>
  </head>
  <body class="home">
    <!-- navbar-->
    <header class="header" style="background-color: cadetblue;" >
      <div role="navigation" class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header"><a href="index.php" class="navbar-brand">Lumbini Peace Travels and Tours</a>
            <div class="navbar-buttons">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
            </div>
          </div>
           <div id="navigation" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="package-list.php">Tour Packages</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Account <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li> 
                  <?php 
                    session_start();
                    if(isset($_SESSION['login'])){
                      $login=$_SESSION['login'];
                      echo "<a href='profile.php'>$login</a>";
                    }
                    
                    
                

                    
                    else{
                      
                      echo "<a href='login.php'>Log In </a>"; 
                    }

                    ?>
                      
                    </a></li>
                  <li>
                  <?php
                    if(isset($_SESSION['login'])){
                     echo "<a href='signout.php'>Sign Out </a>";
                    }
                    else{
                      echo "<a href='signup.php'>Sign Up </a>";
                    }

?>



                  </a></li>
                  <li> <a href="admin.php"> Admin </a></li>
                  
                </ul>
              </li>
          </div>
        </div>
      </div>
    </header>

<br>
<br>
<br>
<br>
 
  <center>  <p style="color: green; font-size: 25px; "> You have successfulyy booked your choosen Package. <b> Thank You  ! </b> </p></center>
  <br>
   <center> <p style="color: green; font-size: 25px; "> Back to <a href="package-list.php"> Tour Packages </a> </p> </center>





































<!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/front.js"></script><!-- substitute:livereload -->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>