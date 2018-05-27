<?php

include ("conn.php");
session_start();




if(isset($_POST['signin']))
{
$email=$_POST['email'];
$password=md5(($_POST['password']));
$sql ="SELECT EmailId,Password FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";



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
                      echo $_SESSION['login'];
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
                  
                </ul>
              </li>
          </div>
        </div>
      </div>
    </header>
    <!-- *** LOGIN MODAL ***_________________________________________________________
    -->
   *-->
   
    

    <section class="section--padding-bottom-small">

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" style="
    border-color: cadetblue;
" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" role="form" >
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="Email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Password"> 
                                    </div>
                                    
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                    <input type="submit" name="signin"  value="Login" size='20'>
                                    <span style="font-size: 16px">  &nbsp;&nbsp;&nbsp;&nbsp; Don't have an Account? <a href="signup.php" > Register </a></span>
                                    </div>
                                </div>

                            </form>     



                        </div>                     
                    </div>  
        </div>
                         </div>
                    </div>
         </div> 
    </div>
    


</section>




  







  
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