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























  </head>
  <body class="home">
    <!-- navbar-->
    <header class="header">
      <div role="navigation" class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header"><a href="index.php" class="navbar-brand"> Lumbini Peace Travels and Tours</a>
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
       <!-- *** LOGIN MODAL END ***-->
    <div id="carousel-home" data-ride="carousel" class="carousel slide carousel-fullscreen carousel-fade">
      <!-- Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-home" data-slide-to="1"></li>
        <li data-target="#carousel-home" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner">
        <div style="background-image: url('img/mustang.jpg');" class="item active">
          <div class="overlay"></div>
          <div class="carousel-caption">
           <h1 class="super-heading">Mustang</h1>
            <p class="super-paragraph">Gateway to heaven</p>
            
          </div>
        </div>
        <div style="background-image: url('img/pokhara.jpg');" class="item">
          <div class="overlay"></div>
          <div class="carousel-caption">
           <h1 class="super-heading">Fewa lake</h1>
            <p class="super-paragraph">Pokhara</p>
          </div>
        </div>
        <div style="background-image: url('img/lukla.jpg');" class="item">
          <div class="overlay"></div>
          <div class="carousel-caption">
            <h1 class="super-heading">Lukla</h1>
            <p>One of the most adventurous place in the world</p>
          </div>
        </div>
      </div>
    </div>
    

    

    <section class="section--padding-bottom-small"  style="
    background-color: #f5f5f5;
">
     <div class="container">
  <div class="holiday">
  



  
  <center><h2   style="
    color: #34ad00;
">Package List</h2> </center>

          
<?php 
include ("conn.php");
$sql = "SELECT * from tbltourpackages order by rand() limit 4";
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
          <h4 style="color: #34ad00;">Package Name: <?php echo htmlentities($result->PackageName);?></h4>
          <h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
          <p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
          <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
        </div>
        <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
          <h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
         <button  class="btn-danger "  style="border-radius: 7px"> <a style="color:white" href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>">Details</a></button>
        </div>
        <div class="clearfix"></div>
      </div>

<?php }} ?>
      <br>
    
<div> <center> <button class="btn-info" style="border-radius: 7px"> <a href="package-list.php" class="view"> <h4>View More Packages </h4></a></div></center> </button>
</div>
      <div class="clearfix"></div>
  </div>

    </section>
    <!--   *** SERVICES END ***-->






    <!-- portfolio-->
    <section id="portfolio" class="section--no-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Gallery</h1>
            <p class="lead margin-bottom--big">Image Gallery/ Travel Diaries</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-space">
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-1.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 1"><img src="img/portfolio-1.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-2.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 2"><img src="img/portfolio-2.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-3.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 3"><img src="img/portfolio-3.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-4.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 4"><img src="img/portfolio-4.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-5.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 5"><img src="img/portfolio-5.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-6.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 6"><img src="img/portfolio-6.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-7.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 7"><img src="img/portfolio-7.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="img/portfolio-8.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 8"><img src="img/portfolio-8.jpg" alt="" class="img-responsive"></a></div>
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