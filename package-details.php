
<?php
session_start();
error_reporting(0);
include('conn.php');


if(isset($_POST['submit2']))
{
  if(($_SESSION['login']==null)){
      
header('Location:login.php');
}
else
{

$pid=$_POST['id'];
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];

$comment=$_POST['comment'];
$diff=date_diff($fromdate,$todate);

$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
header('Location:thankyou.php');
}
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
    









<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">




<link rel='stylesheet' type='text/css' href='stylesheet.css'/>
        <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
        



























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
                                 <li style="color: blue"> 
                                 <span class="color">
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
              </span>
          </div>
        </div>
      </div>
    </header>
    <!-- *** LOGIN MODAL ***_________________________________________________________
    -->



  
    
  


       <!-- *** LOGIN MODAL END ***-->
    
    

    <section class="section--padding-bottom-small" style="
    background-color: #f5f5f5;
">
   <center> <h1 style="color: green"> Package Details </h1> </center>


    <div class="selectroom">
  <div class="container"> 

  
      <?php 
      include ("conn.php");
$pid=intval($_GET['pkgid']);

$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

<form name="book" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <div class="selectroom_top">
      <div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
        <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
      </div>
      <div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
        <h2 style="color:green"><?php echo htmlentities($result->PackageName);?></h2>
        <p class="dow">#PKG-<?php 
        $id=htmlentities($result->PackageId);

        echo $id;?></p>
        <input type="hidden" name="id" value=" <?php echo htmlentities($result->PackageId); ?>"
        <p><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></p>
        <p><b>Package Location / Duration:</b> <?php echo htmlentities($result->PackageLocation);?></p>
          <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
          <div class="ban-bottom">
        <div class="bnr-right" >
        <label class="inputLabel" style="color:green">Date of Departure</label>
        <input class="date" id="departing" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
      </div>
      
      </div>
            <div class="clearfix"></div>
        <div class="grand">
          <p>Grand Total</p>
          <h3> $ &nbsp;<?php echo htmlentities($result->PackagePrice);?></h3>
        </div>
      </div>
    <h3>Package Details</h3>
        <p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p> 
        <div class="clearfix"></div>
    </div>
    <div class="selectroom_top">
      <h2>Travels</h2>
      <div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
        <ul>
        
          <li class="spe">
            <label class="inputLabel">Comment</label>
            <input class="special" type="text" name="comment" required="">
          </li>


         
            <li class="spe" align="center">
          <button type="submit" name="submit2" class="btn-primary btn">Book</button>
            </li>
           
              
          <div class="clearfix"></div>
        </ul>
      </div>
      
    </div>
    </form>
<?php }} ?>


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
    <script src="js/datepicker.js"></script>
    <script src="js/front.js"></script>
    <script type='text/javascript' src='script.js'></script>

       <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <!-- substitute:livereload -->
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