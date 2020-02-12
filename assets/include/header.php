<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
	<meta name="description" content="<?php echo $description ?>">
	<meta name="keyword" content="<?php echo $keywords ?>">
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css">
<link href="css/style.css" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/st.css" rel="stylesheet">
<link href="css/cse.css" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149831758-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149831758-1');
</script>



</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / Header Style Three-->
    <header class="main-header header-style-three">
        <!--Header Top-->
        <div class="header-top-two">
        	<div class="auto-container">
            	<div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                       <ul class="info-links clearfix">
                        	<li><a href="#"><span class="icon fa fa-clock-o"></span> Opening Hours: 24*7</a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right">
                        <ul class="info-links clearfix">
                        	<li><a href="#"><i class="fa fa-location-arrow"></i> T-446, 3rd Floor, Palam Corporate Plaza, Palam Vihar, Gurugram, Haryana</a></li>
                            <li><a href="#" onclick="openForm()" class="theme-btn btn-style-one"><center>Book Now</center></a></li>
                            <div class="form-popup" id="myForm">
                               
  <form method="post" action="mail1.php" class="form-container">
      <center><h2>Book Now</h2></center> 
      <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name..." name="cname" required>
      
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email..." name="email" required>

    <label for="mobuile"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter Mobile No..." name="mobile" required>

    <input type="Submit" class="btn">
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="logo-outer">
                    	<div class="logo"><a href="index.php"><img src="images/logo-3.png" alt="Malik Transport" title="Mailk Transport"></a></div>
                    </div>
                    
                    <div class="upper-right clearfix">
                    	<!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.php">Home</a></li>
                                        <li class="dropdown"><a href="#">Inside Story</a>
                                            <ul>
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="director.php">Director's Desk</a></li>
                                               
                                                                                              
                                            </ul>
                                        </li>
                                        
                                        <li><a href="why-us.php">Why Us?</a></li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="employee.php"> Employee Transportation Services</a></li>
                                                <li><a href="corporate.php">Corporate Car Rental</a></li>
                                                <li><a href="hotel.php">Hotel Travel Desk</a></li>
                                                <li><a href="airport.php">Airport Transfer</a></li>
                                                <li><a href="outstation.php">Spot Rentals/Outstation Rentals</a></li>
                                                <li><a href="temp.php">Tempo Travelers & Luxury Buses</a></li>
                                                                                              
                                            </ul>
                                        </li>
                                       
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                            <!--Contact Info-->
                            <!--<div class="contact-info">
                            	<div class="icon-box"><span class="flaticon-technology"></span></div>
                                <div class="info-title">Call Us Now:</div>
                                <div class="info">8512000073, 9582055637</div>
                            </div>-->
                            
                        </div>
                    </div><!--End Upper Right-->
                    
                </div>
            </div>
        </div>
        
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.php" class="img-responsive"><img src="images/logo-small.png" alt="Valencia" title="Valencia"></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a>
                                	
                                </li>
                              <li class="dropdown"><a href="#">Inside Story</a>
                                            <ul>
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="director.php">Director's Desk</a></li>
                                               
                                                                                              
                                            </ul>
                                        </li>
                                <li><a href="why-us.php">Why Us?</a></li>
                                
                                <li class="dropdown"><a href="#">services</a>
                                    <ul>
                                                <li><a href="employee.php"> Employee Transportation Services</a></li>
                                                <li><a href="corporate.php">Corporate Car Rental</a></li>
                                                <li><a href="hotel.php">Hotel Travel Desk</a></li>
                                                <li><a href="airport.php">Airport Transfer</a></li>
                                                <li><a href="outstation.php">Spot Rentals/Outstation Rentals</a></li>
                                                <li><a href="temp.php">Tempo Travelers & Luxury Buses</a></li>
                                                                                               
                                            </ul>
                                </li>
                               
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div><!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->
    <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>