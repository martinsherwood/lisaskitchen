<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Lisa's Kitchen</title>
        <meta name="description" content="Lisa's Kitchen provides healthy, home cooked meals.">
        <meta name="keywords" content="food, drink, meals, dining, healthy, fresh, home, cooked, kitchen, university, uni, student, students, cheltenham, gloucestershire, foodcycle, park, campus">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0">
        
        <link rel="dns-prefetch" href="//ajax.googleapis.com">
        
        <?php include ("includes/favicons.php"); ?>

        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        <link type="text/plain" rel="author" href="humans.txt">

    </head>
    <body id="home">
    
    	<?php include_once ("includes/cookies.php"); ?>
    
    	<div class="wrapper">
        	<div role="main" class="content">
            	
                <?php include ("templates/header.php"); ?>
                
                <div class="slider container clearfix">
                    <ul class="slides">
                        <li>
                            <figure>
                            	<img src="img/slides/slide_1.png" alt="Introducing our first selection of meals on Lisa's Kitchen."/>
                            	<figcaption class="first"><i class="fa fa-external-link"></i><a href="food">Check them out!</a></figcaption>
                            </figure>
                        </li>
                        
                        <li>
                        	<figure>
                            	<img src="img/slides/slide_2.png" alt="Check us out on Facebook!"/>
                                <figcaption class="third"><i class="fa fa-external-link"></i><a href="https://www.facebook.com/lisashomekitchen" target="_blank" rel="nofollow">To Facebook!</a></figcaption>
                            </figure>
                        </li>
                        
                        <li>
                        	<figure>
                        		<img src="img/slides/slide_3.png" alt="We give 5% of our profits to Foodcycle, they aim to reduce food waste and poverty."/>
                            	<figcaption class="fourth"><i class="fa fa-external-link"></i><a href="http://foodcycle.org.uk/" target="_blank" rel="nofollow">Learn more</a></figcaption>
                            </figure>
                        </li>   
                    </ul>
                </div>
            	
                <div role="complementary" class="information container clearfix">
                    <div class="block float-left thanks">
                    	<h2>Thank you</h2>
                        <p>Thanks for visiting Lisa's Kitchen, we aim to provide students with an alternative choice: Healthy, homemade food that is quick and easy to cook.</p>
                    </div>
                    
                    <div class="block float-left order">
                    	<h2>Order here</h2>
                        <p>Our ordering process is simple and painless.</p>
                        <a role="button" class="order-button centre" href="order" title="Start an order"><i class="fa fa-cutlery fa-square fa-lg"></i>Start</a>
                        <!--<img class="csoon" src="img/coming_soon@2x.png" alt="Our online ordering system will online soon!" title="Our online ordering system will online soon!" />-->
                    </div>
                    
                    <div class="block float-left placeholder">
                    	<h2>Placeholder</h2>
                        <!--whatever you want-->
                    </div>
                </div>
				
        	</div><!--/content-->
    	</div><!--/wrapper-->
        
        <?php include ("templates/footer.php"); ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        <?php include ("includes/analytics.php"); ?>
    </body>
</html>
