<?php
session_start();
error_reporting(0);
include('conn.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email']; 
$mobile=$_POST['mobileno'];
$subject=$_POST['subject']; 
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Your query has been sent');</script>";
}
else 
{
echo "<script>alert('Something went wrong, Please try again !');</script>";
}

}

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
    <!-- *** LOGIN MODAL ***_________________________________________________________
   
    <!-- *** LOGIN MODAL END ***-->
    <section class="background-gray-lightest">
      <div class="container">
        <div class="breadcrumbs">
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ul>
        </div>
        <h1>Contact Us</h1>
        <p class="lead">You can contact us, get in touch with us and can send your enquiries through the following mediums.<br>
        Your queries are always welcome and will be responded as soon as poosible.  </p>
      </div>
    </section>
    <section>  
      <div id="contact" class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-map-2"></i></div>
              <div class="content">
                <h4>Address</h4>
                <p>Opposite Pipalbot, Tourism Bank Building<br> New Road, Kathmandu, <strong> Nepal</strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-phone"></i></div>
              <div class="content">
                <h4>Call center</h4>
                <p class="text-muted">This number if you want to get any information about us through phone calls.</p>
                <p><strong>Tel. No. : +977 01 4215681 <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: +977 01 4258736 <br>
Mobile No.: +977 9841765227 <br>
Fax No. : +977 01 4215681 </strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-mail-open"></i></div>
              <div class="content">
                <h4>Electronic support</h4>
                <p class="text-muted">Please feel free to write an email to us .</p>
                <ul>
                  <li><strong><a href="mailto:"> info@lumbinitravels.com.np </a></strong></li>
                  <li><strong><a href="#">
                          lumbinipeace1@gmail.com</a></strong></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-pen"></i></div>
              <div class="content">
                <h4>Contact form</h4>
                <p class="text-muted">Send us your queries and feedbacks</p>
                <form name="form1" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="firstname">Full Name</label>
                        <input id="firstname" type="text" name="fname" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="lastname">Mobile No.</label>
                        <input id="lastname" type="number" name="mobileno" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input id="subject" type="text" name="subject" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" name="description"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <button type="submit" name="submit1" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
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