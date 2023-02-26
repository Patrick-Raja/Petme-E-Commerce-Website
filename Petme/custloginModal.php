<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 <!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Petshop Online Website</title>
	
	<!-- core CSS -->
    <link rel="stylesheet" type="text/css" href="css/login.css">    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->
        
<!--****************START OF NAVIGATION BAR*************--> 
<body>
          
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;"> 
                      <img src="logo.png"  width="35%" border-radius= "50%"/></h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                        
                                                            
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
  
		
    
<!--****************START OF Availables*****************-->

<h2>Login Page</h2><br>    
    <div class="login">    
    <form method="POST" action="custlogin_process.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" class="form-control wow fadeInDown" id="username" name="username" placeholder="Enter Username" onKeyPress="return isNotAlphanumeric(event)" required />        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="password" class="form-control wow fadeInDown" id="password" name="password" placeholder="Enter Password" onKeyPress="return isNotAlphanumeric(event)" required>   
        <br><br>    
        <button type="submit" class="btn btn-info wow fadeInDown" action=""> Login</button><br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        Forgot <a href="#">Password</a>    
    </form> 
    </div>    
<!--***************** FOOTERS ****************-->
<br><br>
<footer id="footer" class="midnight-blue wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                &copy; 2022 <a target="_blank" href="#" title="#">Pet Me</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right wow fadeInDown">
                        
                        <li class="wow fadeInDown"><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer--><!----------loginModal----------->
    <?php include('loginModal.php')?>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>