<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Education</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CUSTOM CSS -->
<link href="css/style.css" rel="stylesheet" media="screen">
<link href="css/color1.css" rel="stylesheet" media="screen">
<link href="css/transitions.css" rel="stylesheet" media="screen">
<!-- BOOTSTRAP -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<!-- BX SLIDER-->
<link href="css/jquery.bxslider.css" rel="stylesheet" media="screen">
<!-- OWL CAROUSEL -->
<link href="css/owl.carousel.css" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
<!-- PARALLAX BACKGROUNDS -->
<link href="css/parallax.css" rel="stylesheet" type="text/css" />


</head>
<body>
<!--WRAPPER START-->

<div class="wrapper">
    <!--HEADER START-->
    <header>
	
		<script src="js/scroll.js"></script>
        <!--NAVIGATION START-->
		<?php require_once('includes/header.php');?>
		<!--NAVIGATION END-->
		
    </header>
    <!--HEADER END-->
		
    <!--BANNER START-->
		
		<?php require_once('slider.php');?>
    
    <!--BANNER END-->
    
			<!--CONTANT START-->
			
			<div class="contant">
			<!--SERVICES SECTION START-->
			
			<?php require_once('services.php');?>
        


			<!--SERVICES SECTION END-->
        
		<!--LATEST COURSES SECTION START-->
		
		<?php require_once('courses.php');?>
        
		<!--LATEST COURSES SECTION END-->
		    	
        <!--STUDENT FORM SECTION START-->
        
		<!--<?php require_once('studentform.php');?>-->
        
		<!--STUDENT FORM SECTION END-->
        
		<!--COURSES TOPIC SECTION START-->
        
		<?php require_once('coursetopic.php');?>
        
		<!--COURSES TOPIC SECTION END-->
   
        <!--PAPULAR POSTS SECTION START-->
        
		<?php require_once('popoularpost.php');?>
        
		<!--PAPULAR POSTS SECTION END-->
        
		<!--GALLERY AND NEXT COURSES SECTION START-->
        
		<?php require_once('gallery.php');?>
        
		<!--GALLERY AND NEXT COURSES SECTION END-->
        
		<!--TESTIMONIALS SECTION START-->
		
        <?php require_once('testimonials.php');?>
        
		<!--TESTIMONIALS SECTION END-->
        
        <!--FOLLOW US SECTION START-->
       
	   <?php require_once('followus.php');?>

	   <!--FOLLOW US SECTION END-->
	 
	 

	   
    </div>
    <!--CONTANT END-->
    
	<!--FOOTER START-->
     <?php require_once('includes/footer.php');?>
    <!--FOOTER END-->
</div>
<!--WRAPPER END-->
<!-- Jquery Lib -->
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/modernizr.js"></script>
<script type="text/javascript" src="js/skrollr.min.js"></script>
<script src="js/functions.js"></script>
</body>
</html>
