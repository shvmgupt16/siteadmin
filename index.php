<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Aks Interactive pvt ltd</title>
    	<meta name="description" content="Flex is a mobile website template using HTML5 CSS3 responsive bootstrap layout.">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">

         
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
          <script>
		  

function saveform()
{
 var name=document.getElementById('name').value;  
 var email_id=document.getElementById('email_id').value; 
var subject=document.getElementById('subject').value;  
var comments=document.getElementById('comments').value; 
 //var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;  
 var x = document.forms["contactform"]["email_id"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    
 var cnt=0;
 
 if(name=='')
	 {	 	
		document.getElementById('name').focus();					
		document.getElementById('name_err').innerHTML="This is a required field !";	
		cnt++;
	 }
	 else{document.getElementById('name_err').innerHTML="";
	 }

	if(email_id=='')
	 {	 	
		document.getElementById('email_id').focus();					
		document.getElementById('email_id_error').innerHTML="This is a required field !";	
		cnt++;
	 }
	else if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
          document.getElementById('email_id').focus();
         document.getElementById('email_id_error').innerHTML="Invalid email Address !";	
		 cnt++;
         
    }
			 
	 else{document.getElementById('email_id_error').innerHTML="";
	 }
	 if(subject=='')
	 {	 	
		document.getElementById('subject').focus();					
		document.getElementById('subject_err').innerHTML="This is a required field !";	
		cnt++;
	 }
	 else{document.getElementById('subject_err').innerHTML="";
	 }

	 if(comments=='')
	 {	 	
		document.getElementById('comments').focus();					
		document.getElementById('message_error').innerHTML="This is a required field !";	
		cnt++;
	 }
	 else{document.getElementById('message_error').innerHTML="";
	 }

	/*
else if ($email.val() == '' || !re.test($email.val()))
{
    alert('Please enter a valid email address.');
    //return false;
}
	 */
	 
	  
if(cnt>0)
{
	return false;
}
else
{
	document.getElementById("contactform").submit();
}
		  
		  
}
</script>







 

<script>

$(document).ready(function() {

	// process the form
	
	   
				
	$('#contactform').submit(function(event) {

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)		
		
		var formData = {
			'name' 		: $('input[name=name]').val(),
			'email_id' 	: $('input[name=email_id]').val(),
			'subject' 	: $('input[name=subject]').val(),
			'comments' 	: $('#comments').val(),
			//var message=$('textarea[name=message]');
			//$('#file').attr('files'),
			//$('#radio_button').attr("checked", "checked");
		 
		};
		
        
		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'welcome.php', // the url where we want to POST
			data 		: formData // our data object
					})
					
					
					

			// using the done promise callback
			.done(function(data) {
alert(data); 
				// log data to the console so we can see
				//console.log(data); 

				// here we will handle errors and validation messages
			});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

</script> 
		  
          
       
    </head>
    <body>
    <?php
	include('config.php');
	?>
   
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->


        <div class="site-main" id="sTop">
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="social-icons">
                                <li><a rel="nofollow" href="https://www.facebook.com/aksinteractive" class="fa fa-facebook"></a></li>
                                <li><a href="https://twitter.com/aksinteractive" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                <li><a href="http://www.linkedin.com/company/aks-interactive-solutions-pvt-ltd" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <div class="logo-wrapper col-md-4 col-sm-2 col-xs-8">
                                    <h1>
                                     <a rel="nofollow" href="http://www.templatemo.com/preview/templatemo_406_flex"></a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-8 col-sm-10 col-xs-4 main-menu text-right">
                                    <ul class="menu-first hidden-sm hidden-xs">
                                        <li class="active"><a href="#">Home</a></li>
                                        <li><a href="#services">Services</a></li>
                                        <li><a href="#portfolio">Portfolio</a></li>
                                        <li><a href="#our-team">Team</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                    <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->
                        <div class="menu-responsive hidden-md hidden-lg">
                            <ul>
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#our-team">Team</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
            <div class="site-slider">
                <div class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="overlay"></div>
                                <?php
                            $sql=mysqli_query($con,"select * from home where id=1");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="images/<?php echo $result['image'] ;?>" alt="">
                            
                                <div class="slider-caption visible-md visible-lg">
                                    <?php
								 $sql=mysqli_query($con,"select * from home where id=1");
									   $result = mysqli_fetch_array($sql); 
									  ?>
								 <h2> <?php echo  $result['heading'] ;?></h2> 
                                 <p><?php echo $result['description'];?></p>
                                   
                                 
                                    <a href="#services" class="slider-btn">GO TO SERVICES</a>
                                </div>
                            </li>
                            <li>
                                <div class="overlay"></div>
                                < <?php
                            $sql=mysqli_query($con,"select * from home where id=2");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="images/<?php echo $result['image'] ;?>" alt="">
                            
                                <div class="slider-caption visible-md visible-lg">
                                    <?php
								 $sql=mysqli_query($con,"select * from home where id=2");
									   $result = mysqli_fetch_array($sql); 
									  ?>
								 <h2> <?php echo  $result['heading'] ;?></h2> 
                                 <p><?php echo $result['description'];?></p>
                                   
                                 
                                    <a href="#portfolio" class="slider-btn">GO TO PORTFOLIO</a>
                                </div>
                            </li>
                            <li>
                                <div class="overlay"></div>
                                 <?php
                            $sql=mysqli_query($con,"select * from home where id=3");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="images/<?php echo $result['image'] ;?>" alt="">
                            <div class="portfolio-overlay">
                                <div class="slider-caption visible-md visible-lg">
                                    <?php
								 $sql=mysqli_query($con,"select * from home where id=3");
									   $result = mysqli_fetch_array($sql); 
									  ?>
								 <h2> <?php echo  $result['heading'] ;?></h2> 
                                     <p><?php echo $result['description'];?></p>  
                                 
                                    <a href="#our-team" class="slider-btn">GO TO TEAM</a>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.flexslider -->
                </div> <!-- /.slider -->
            </div> <!-- /.site-slider -->
        </div> <!-- /.site-main -->


        <div class="content-section" id="services">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Our Services</h2>
                        <p>Let us help you to create professional websites</p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item" id="service-1">
                            <div class="service-icon">
                                <i class="fa fa-file-code-o"></i>
                            </div> <!-- /.service-icon -->
                            <div class="service-content">
                                <div class="inner-service">
                                								
									<?php
                                $sql=mysqli_query($con,"select * from services where id=1");
									   $result = mysqli_fetch_array($sql); 
									  ?>
								 <h3> <?php  echo  $result['service'] ;?></h3> 
                                   <p><?php echo $result['description'];?></p>    
                                   
                                 
                                </div>
                            </div> <!-- /.service-content -->
                        </div> <!-- /#service-1 -->
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item" id="service-2">
                            <div class="service-icon">
                                <i class="fa fa-paper-plane-o"></i>
                            </div> <!-- /.service-icon -->
                            <div class="service-content">
                                <div class="inner-service">
                           

								<?php 
								 $sql=mysqli_query($con,"select * from services where id=2");
									   $result = mysqli_fetch_array($sql); 
									  ?>
								 <h3> <?php  echo  $result['service'] ;?></h3> 
                                   <p><?php echo $result['description'];?></p>    
                                   
                          </div>
                            </div> <!-- /.service-content -->
                        </div> <!-- /#service-1 -->
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item" id="service-3">
                            <div class="service-icon">
                                <i class="fa fa-institution"></i>
                            </div> <!-- /.service-icon -->
                            <div class="service-content">
                                <div class="inner-service">
                                  
                                        
								<?php
								 $sql=mysqli_query($con,"select * from services where id=3");
									   $result = mysqli_fetch_array($sql); 
									  ?>
								 <h3> <?php echo  $result['service'] ;?></h3> 
                                   <p><?php echo $result['description'];?></p>  
                                 
                                                     
   
                                </div>
                            </div> <!-- /.service-content -->
                        </div> <!-- /#service-1 -->
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item" id="service-4">
                            <div class="service-icon">
                                <i class="fa fa-flask"></i>
                            </div> <!-- /.service-icon -->
                            <div class="service-content">
                                <div class="inner-service">
                                  
                           <?php  
								 $sql=mysqli_query($con,"select * from services where id=4");
									   $result = mysqli_fetch_array($sql); 
									  ?>
								 <h3> <?php echo  $result['service'] ;?></h3> 
                                   <p><?php echo $result['description'];?></p> 
                                                       
                                                                      
                                </div>
                            </div> <!-- /.service-content -->
                        </div> <!-- /#service-1 -->
                    </div> <!-- /.col-md-3 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#services -->



        <div class="content-section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Our Portfolio</h2>
                        <p>What we have done so far</p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                          
							<?php
                            $sql=mysqli_query($con,"select * from portfolio where id=1");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="admin/images/gallery/<?php echo  $result['image'] ;?>" alt="">
                            <div class="portfolio-overlay">
                                 
							<?php
                            $sql=mysqli_query($con,"select * from portfolio where id=1");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['portfolio'] ;?></h3> 
                              <p><?php echo $result['description'];?></p> 
                              
                          <a href="admin/images/gallery/<?php echo  $result['image'] ;?>" data-rel="lightbox" class="expand">
                                    <i class="fa fa-search"></i>
                                </a>
                                
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                           
                              <?php
                            $sql=mysqli_query($con,"select * from portfolio where id=2");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="admin/images/gallery/<?php echo  $result['image'] ;?>" alt="">
                            <div class="portfolio-overlay">
                                 
						   <?php
                            $sql=mysqli_query($con,"select * from portfolio where id=2");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['portfolio'] ;?></h3> 
                              <p><?php echo $result['description'];?></p> 
                              
                          <a href="admin/images/gallery/<?php echo  $result['image'] ;?>" data-rel="lightbox" class="expand">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <?php
                            $sql=mysqli_query($con,"select * from portfolio where id=3");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="admin/images/gallery/<?php echo  $result['image'] ;?>" alt="">
                            <div class="portfolio-overlay">
                                 
							<?php
                            $sql=mysqli_query($con,"select * from portfolio where id=3");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['portfolio'] ;?></h3> 
                              <p><?php echo $result['description'];?></p> 
                              
                          <a href="admin/images/gallery/<?php echo  $result['image'] ;?>" data-rel="lightbox" class="expand">
                                    <i class="fa fa-search"></i>
                                </a>
                                
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <?php
                            $sql=mysqli_query($con,"select * from portfolio where id=4");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="admin/images/gallery/<?php echo  $result['image'] ;?>" alt="">
                            <div class="portfolio-overlay">
                             <?php    
                            $sql=mysqli_query($con,"select * from portfolio where id=4");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['portfolio'] ;?></h3> 
                              <p><?php echo $result['description'];?></p> 
                              
                          <a href="admin/images/gallery/<?php echo  $result['image'] ;?>" data-rel="lightbox" class="expand">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <?php
                            $sql=mysqli_query($con,"select * from portfolio where id=5");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="admin/images/gallery/<?php echo  $result['image'] ;?>" alt="">
                            <div class="portfolio-overlay">
                                 
							<?php
                            $sql=mysqli_query($con,"select * from portfolio where id=5");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['portfolio'] ;?></h3> 
                              <p><?php echo $result['description'];?></p> 
                              
                          <a href="admin/images/gallery/<?php echo  $result['image'] ;?>" data-rel="lightbox" class="expand">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                           <?php
                            $sql=mysqli_query($con,"select * from portfolio where id=6");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="admin/images/gallery/<?php echo $result['image'] ;?>" alt="">
                            <div class="portfolio-overlay">
                                 
							<?php	
                            $sql=mysqli_query($con,"select * from portfolio where id=6");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['portfolio'] ;?></h3> 
                              <p><?php echo $result['description'];?></p> 
                              
                          <a href="admin/images/gallery/<?php echo  $result['image'] ;?>" data-rel="lightbox" class="expand">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <?php
                            $sql=mysqli_query($con,"select * from portfolio where id=7");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="admin/images/gallery/<?php echo  $result['image'] ;?>" alt="">
                            <div class="portfolio-overlay">
                                 
							<?php
                            $sql=mysqli_query($con,"select * from portfolio where id=7");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['portfolio'] ;?></h3> 
                              <p><?php echo $result['description'];?></p> 
                              
                          <a href="admin/images/gallery/<?php echo  $result['image'] ;?>" data-rel="lightbox" class="expand">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                           <?php
                            $sql=mysqli_query($con,"select * from portfolio where id=8");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="admin/images/gallery/<?php echo  $result['image'] ;?>" alt="">
                            <div class="portfolio-overlay">
                                 
							<?php
                            $sql=mysqli_query($con,"select * from portfolio where id=8");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['portfolio'] ;?></h3> 
                              <p><?php echo $result['description'];?></p> 
                              
                          <a href="admin/images/gallery/<?php echo  $result['image'] ;?>" data-rel="lightbox" class="expand">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#portfolio -->




        <div class="content-section" id="our-team">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Our Team</h2>
                        <p>Meet our people and about our company</p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="team-member col-md-3 col-sm-6">
                        <div class="member-thumb">
                        
                           <?php
                            $sql=mysqli_query($con,"select * from team where id=1");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="images/<?php echo  $result['image'] ;?>" alt="">
                            <div class="team-overlay">
                            <?php
                            $sql=mysqli_query($con,"select * from team where id=1");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['name'] ;?></h3> 
                              <span><?php echo $result['designation'];?></span> 
                            
                            
                            
                                <ul class="social">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div> <!-- /.team-overlay -->
                        </div> <!-- /.member-thumb -->
                    </div> <!-- /.team-member -->
                    <div class="team-member col-md-3 col-sm-6">
                        <div class="member-thumb">
                            <?php
                            $sql=mysqli_query($con,"select * from team where id=2");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="images/<?php echo  $result['image'] ;?>" alt="">
                            <div class="team-overlay">
                            <?php
                            $sql=mysqli_query($con,"select * from team where id=2");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['name'] ;?></h3> 
                              <span><?php echo $result['designation'];?></span> 
                                <ul class="social">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div> <!-- /.team-overlay -->
                        </div> <!-- /.member-thumb -->
                    </div> <!-- /.team-member -->
                    <div class="team-member col-md-3 col-sm-6">
                        <div class="member-thumb">
                            
                            <?php
                            $sql=mysqli_query($con,"select * from team where id=3");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="images/<?php echo  $result['image'] ;?>" alt="">
                            <div class="team-overlay">
                            <?php
                            $sql=mysqli_query($con,"select * from team where id=3");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['name'] ;?></h3> 
                              <span><?php echo $result['designation'];?></span> 
                                <ul class="social">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div> <!-- /.team-overlay -->
                        </div> <!-- /.member-thumb -->
                    </div> <!-- /.team-member -->
                    <div class="team-member col-md-3 col-sm-6">
                        <div class="member-thumb">
                            <?php
                            $sql=mysqli_query($con,"select * from team where id=4");
							$result = mysqli_fetch_array($sql); 
							 ?>
                            <img src="images/<?php echo  $result['image'] ;?>" alt="">
							
                            <div class="team-overlay">
                            <?php
                            $sql=mysqli_query($con,"select * from team where id=4");
							$result = mysqli_fetch_array($sql); 
							 ?>
							 <h3> <?php echo  $result['name'] ;?></h3> 
                              <span><?php echo $result['designation'];?></span>  
                                <ul class="social">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div> <!-- /.team-overlay -->
                        </div> <!-- /.member-thumb -->
                    </div> <!-- /.team-member -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="skills-heading">
                            <h3 class="skills-title">Our skills on web design</h3>
                            <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-8 col-sm-6">
                       <p>Aliquam faucibus in dolor sed vestibulum. Sed adipiscing malesuada luctus. Morbi tincidunt, tellus scelerisque scelerisque scelerisque, sapien dui pretium augue, at consectetur sapien tellus vitae nunc. Ut vitae metus quis nulla cursus adipiscing pretium vel dolor. Fusce lacinia accumsan arcu, quis porttitor nisi tincidunt ut. <br><br>
						Etiam tincidunt, magna eu elementum tristique, sapien nisl venenatis lacus, nec sagittis lectus dui eget lorem. Donec in tempus mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin laoreet ac quam et volutpat. Aenean egestas interdum dolor, et mollis lectus consequat a.<br><br>
						Nunc malesuada nunc eget nunc sollicitudin posuere. Maecenas vitae tortor quis odio hendrerit sagittis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris ullamcorper, felis sit amet gravida malesuada, nisi sem rhoncus massa, non tempor est erat sit amet diam.<!-- spacing for mobile viewing --><br><br>
						</p>
                    </div> <!-- /.col-md-8 -->
                    <div class="col-md-4 col-sm-6">
                        <ul class="progess-bars">
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">Photoshop 90%</div>
                                </div>
                            </li>
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">HTML 75%</div>
                                </div>
                            </li>
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">WordPress 68%</div>
                                </div>
                            </li>
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">Marketing 95%</div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#our-team -->




        <div class="content-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Contact Us</h2>
                        <p>Feel free to send a message</p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                       <div class="googlemap-wrapper">
                            <div id="map_canvas" class="map-canvas"></div>
                        </div> <!-- /.googlemap-wrapper -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <p>hello
                    	</p>
                        <ul class="contact-info">
                            <li>Phone No: +91 11 41021254</li>
                            <li>Email: <a href="mailto:">rajeev@aksinteractive.com</a></li>
                            <li>Address: B-134, 2nd Floor, DDA Shed,Okhla Industrial Area, Phase - 1,New Delhi -110020, India</li>
                        </ul>
                        <!-- spacing for mobile viewing --><br><br>
                    </div> <!-- /.col-md-7 -->
                    <div id='message'></div>  
                    <div class="col-md-5 col-sm-6">
                        <div class="contact-form">
                        
  
 
						
                   
                            <form method="post" name="contactform" id="contactform">
                            
                                <p>
                                    <input name="name" type="text" id="name" placeholder="Your Name">
                                    <div id=" name_err"</div> 
                                    
                                </p>
                                <p>
                                    <input name="email_id" type="text" id="email" placeholder="Your Email">
                                    <div id=" email_id_err"</div> 
                                    
                                    
                                   
                                </p>
                                <p>
                                    <input name="subject" type="text" id="subject" placeholder="Subject">
                                    <div id=" subject_err"</div> 
                                </p>
                                <p>
                                    <textarea name="comments" id="comments" placeholder="Message"></textarea> 
                                    <div id=" message_err"</div> 
                                      
                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="Send Message">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div> <!-- /.col-md-5 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#contact -->
            
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 text-left">
                       Copyright &copy; 2013 AKS Interactive Solutions Pvt. Ltd. All rights reserved</a> by <a rel="nofollow" href="http://www.aksinteractive.com/">AKS Interactive Solutions</a>
                    </div> <!-- /.text-center -->
                    <div class="col-md-4 hidden-xs text-right">
                        <a href="#top" id="go-top">Back to top</a>
                    </div> <!-- /.text-center -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#footer -->
        

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>


        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('#map_canvas').gmap3({
                    marker:{
                        address: '28.528187,77.275836' 
                    },
                        map:{
                        options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            });
        </script>
        
    </body>
</html>