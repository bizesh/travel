<?php
session_start();
include("conn.php");

if($_SESSION['login']==null){
	header('Location:login.php');

}
else{

if(isset($_REQUEST['bkid']))
	{
		$bid=intval($_GET['bkid']);
$email=$_SESSION['login'];
	$sql ="SELECT FromDate FROM tblbooking WHERE UserEmail=:email and BookingId=:bid";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':bid', $bid, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{
	 $fdate=$result->FromDate;

	$a=explode("/",$fdate);
	$val=array_reverse($a);
	 $mydate =implode("/",$val);
	$cdate=date('Y/m/d');
	$date1=date_create("$cdate");
	$date2=date_create("$fdate");
 $diff=date_diff($date1,$date2);
 $df=$diff->format("%a");
if($df>1)
{
$status=2;
$cancelby='u';
$sql = "UPDATE tblbooking SET status=:status,CancelledBy=:cancelby WHERE UserEmail=:email and BookingId=:bid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query -> bindParam(':cancelby',$cancelby , PDO::PARAM_STR);
$query-> bindParam(':email',$email, PDO::PARAM_STR);
$query-> bindParam(':bid',$bid, PDO::PARAM_STR);
$query -> execute();

$msg="Booking Cancelled successfully";
}
else
{
echo "<script>alert('Booking cannot be cancelled before 24 http_get_request_body_stream(oid)');</script>";}
}
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
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->























  </head>
  <body class="home">
    <!-- navbar-->
    <header class="header">
      <div role="navigation" class="navbar navbar-default" style="background-color: cadetblue">
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
    

        <section id="portfolio" class="section--no-padding-bottom">






<div class="privacy">
	<div class="container">
		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">My Tour History</h3>
		<form name="chngpwd" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		 
	<p>
	<table border="1" width="100%">
<tr align="center">
<th>#</th>
<th>Booking Id</th>
<th>Package Name</th>	
<th>Departure</th>
<th>Comment</th>
<th>Status</th>
<th>Booking Date</th>
<th>Action</th>
</tr>
<?php 


$uemail=$_SESSION['login'];
$sql = "SELECT tblbooking.BookingId as bookid,tblbooking.PackageId as pkgid,tbltourpackages.PackageName as packagename,tblbooking.FromDate as fromdate,tblbooking.Comment as comment,tblbooking.status as status,tblbooking.RegDate as regdate,tblbooking.CancelledBy as cancelby from tblbooking join tbltourpackages on tbltourpackages.PackageId=tblbooking.PackageId where UserEmail=:uemail";
$query = $dbh->prepare($sql);
$query -> bindParam(':uemail', $uemail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
<tr align="center">
<td><?php echo htmlentities($cnt);?></td>
<td>#BK<?php echo htmlentities($result->bookid);?></td>
<td><?php echo htmlentities($result->packagename);?></td>
<td><?php echo htmlentities($result->fromdate);?></td>

<td><?php echo htmlentities($result->comment);?></td>
<td><?php if($result->status==0)
{
echo "Pending";
}
if($result->status==1)
{
echo "Confirmed";
}
if($result->status==2 and  $result->cancelby=='u')
{
echo "Cancelled by User" ;
} 
if($result->status==2 and $result->cancelby=='a')
{
echo "Cancelled by Admin ";

}
?></td>
<td><?php echo htmlentities($result->regdate);?></td>
<?php if($result->status==2)
{
	?><td>Cancelled</td>
<?php } else {?>
<td><a href="profile.php?bkid=<?php echo htmlentities($result->bookid);?>" onclick="return confirm('Do you really want to cancel booking')" >Cancel</a></td>
<?php }?>
</tr>
<?php $cnt=$cnt+1; }} ?>
	</table>
		
			</p>
			</form>

		
	</div>
</div>
























        </section>


































          <br>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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