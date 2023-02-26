<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>
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
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <style>
        .abt {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
        </style>

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
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
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active" ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        <div class="abt">
       <li id="page_about">
    <div class="title-wrapper" style="text-align:centre;">
        <center>
        <h2>About Us</h2>
    </div>
    <h4></h4>
    <p style="text-align:centre;">
    Established in 1986, PetMe Inc. is the biggest strength pet retailer of administrations and answers for the lifetime needs of pets. At PetMe, 
    we cherish pets, and we trust pets improve us as individuals. Consistently with each association, 
    PetMe‘s enthusiastic partners help convey pet guardians closer to their pets so they can live progressively satisfying lives. 
    </p>
    
    <div class="v_space"></div>
    <center>
    <br>
     <h2>Customers First </h2>
     <p style="text-align:centre;">
        Building loyalty and good relationship with our customer is our priority. 
        The company exist to give the best price without compromising the quality and to
         make each transaction experience easy,safe and 
        accessible to online buyers.

 
    </p>
    
    <div class="v_space"></div>
    
    <div class="title-wrapper">
    <br>
    </div><center>
    <div class="two_third" style="width:48%;">
        <h2>Mission</h2>
            <p style="text-align:centre;">
            Our goal is to give our customers the best online shopping experience by giving them the best price and making each transaction  easy,  fast and secured.</p>
    </div>
    <br>
    <div class="one_third_last" style="width:48%;">
        <h2>Vision</h2>
         <p style="text-align:centre;">
            To be the top of the mind trusted online pet shop nationwide.
        </p>
    </div>
    </div>
    </div>
    <br>
     <br>
      <br>
      <center>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.808947237013!2d80.21699731473834!3d12.790909990974582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9521e36cf67e45c1!2zMTLCsDQ3JzI3LjMiTiA4MMKwMTMnMDkuMSJF!5e0!3m2!1sen!2sin!4v1665991416600!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="clear"></div>
</li>
        
<!--*************************************************** FOOTERS **********************************************-->
  
    <?php include('includes/footer.php');?>

<?php include('loginModal.php');?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>