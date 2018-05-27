<?php
session_start();
?>
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
              <li class=""><a href="index.php">Home</a></li>
              <li><a href="package-list.php">Tour Packages</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Account <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li> 
                  <?php 
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
                  <li> <a href="admin/index.php"> Admin </a></li>
                  
                </ul>
              </li>
          </div>
        </div>
      </div>
    </header>
































<section class="section--padding-bottom-small"  style="
    background-color: #f5f5f5;
">

   
<div class="rooms">
  <div class="container">
    
    <div class="room-bottom">
       <center> <h1 style="color: green"> Package List </h1> </center>
          
<?php 
include ("conn.php");
$sql = "SELECT * from tbltourpackages";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
      <div class="rom-btm"  style="border-style: solid;margin-top: 10px;border-color: cadetblue;">
        <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
           <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
        </div>
        <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
          <h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
          <h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
          <p><b>Package Location / Duration :</b> <?php echo htmlentities($result->PackageLocation);?></p>
          <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
        </div>
        <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
          <h5 style="color:green">$ <?php echo htmlentities($result->PackagePrice);?></h5>
           <button  class="btn-danger "  style="border-radius: 7px"> <a style="color:white" href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>">Details</a></button>
        </div>
        <div class="clearfix"></div>
      </div>

<?php }} ?>
      
    
    
    </div>
  </div>
</div>


    </section>
    <footer class="footer">
      <div class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 
              <?php
              echo Date('Y');
              ?>

               Lumbini Peace Travels and Tours</p>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </div>
    </footer>
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