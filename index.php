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

<script src="js/jquery-1.9.1.min.js"></script>
    
</head>
<body>
<!--WRAPPER START-->

<div class="wrapper">
    <!--HEADER START-->
    <header>
	
		
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
        
		<?php require_once('blog.php');?>
        
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
<script type="text/javascript">
    

    $(document).ready(function(){
      $('a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
          var $target = $(this.hash);
          $target = $target.length && $target
          || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {
            var targetOffset = $target.offset().top;
            $('html,body')
            .animate({scrollTop: targetOffset}, 1500);
           return false;
          }
        }
      });
    });






</script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/modernizr.js"></script>
<script type="text/javascript" src="js/skrollr.min.js"></script>
<script src="js/functions.js"></script>
<script>
    

        
    $(document).ready(function(){
        
        /** 
         * This part does the "fixed navigation after scroll" functionality
         * We use the jQuery function scroll() to recalculate our variables as the 
         * page is scrolled/
         */
        $(window).scroll(function(){
            var window_top = $(window).scrollTop() + 12; // the "12" should equal the margin-top value for nav.stick
            var div_top = $('#nav-anchor').offset().top;
                if (window_top > div_top) {
                    $('nav').addClass('stick');
                } else {
                    $('nav').removeClass('stick');
                }
        });
        
        
        /**
         * This part causes smooth scrolling using scrollto.js
         * We target all a tags inside the nav, and apply the scrollto.js to it.
         */
        $("nav a").click(function(evn){
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash); 
        });
        
        
        
        /**
         * This part handles the highlighting functionality.
         * We use the scroll functionality again, some array creation and 
         * manipulation, class adding and class removing, and conditional testing
         */
        var aChildren = $("nav li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i=0; i < aChildren.length; i++) {    
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        } // this for loop fills the aArray with attribute href values
        
        $(window).scroll(function(){
            var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
            var windowHeight = $(window).height(); // get the height of the window
            var docHeight = $(document).height();
            
            for (var i=0; i < aArray.length; i++) {
                var theID = aArray[i];
                var divPos = $(theID).offset().top; // get the offset of the div from the top of page
                var divHeight = $(theID).height(); // get the height of the div in question
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    $("a[href='" + theID + "']").addClass("nav-active");
                } else {
                    $("a[href='" + theID + "']").removeClass("nav-active");
                }
            }
            
            if(windowPos + windowHeight == docHeight) {
                if (!$("nav li:last-child a").hasClass("nav-active")) {
                    var navActiveCurrent = $(".nav-active").attr("href");
                    $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                    $("nav li:last-child a").addClass("nav-active");
                }
            }
        });
    });

</script>
</body>
</html>
