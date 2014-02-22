<?php $apiKey = "AIzaSyC6n-3I8KfH6ReeERae16W5M8B1QtzjPGc" ?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Contact</title>
        <meta name="description" content="Lisa's Kitchen provides healthy, home cooked meals.">
        <meta name="keywords" content="food, drink, meals, dining, healthy, fresh, home, cooked, university, uni, student, students, cheltenham, gloucestershire, contact, hello">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0">
        
        <link rel="dns-prefetch" href="//ajax.googleapis.com">
        <link rel="dns-prefetch" href="//maps.googleapis.com">
        
        <?php include ("includes/favicons.php"); ?>

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/contact.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        <link type="text/plain" rel="author" href="humans.txt">
        
    </head>
    <body id="contact">
    
    	<?php include_once ("includes/cookies.php"); ?>
    
    	<div class="wrapper">
        	<div role="main" class="content">
            	
                <?php include ("templates/header.php"); ?>
                
                <div class="container clearfix">
                	<h1>Where we are</h1>
                </div>
                
                <div itemscope itemtype="http://schema.org/LocalBusiness" class="location container clearfix">
                	<div class="where float-left">
                    	<p>We are located in <span itemprop="addressLocality">Cheltenham</span>, <span itemprop="addressRegion">Gloucestershire</span> in the <span itemprop="addressCountry">United Kingdom</span>. Based at the University, on the Park Campus.</p>
                        
                        <img id="mobile-map" src="img/map.png" alt="Map of where we are Cheltenham"/>
                        
                        <div class="email">
                            <span>General inquiries</span>
                            <p><a itemprop="email" href="mailto:info@lisaskitchen.co.uk?subject=Hello">info@lisaskitchen.co.uk</a></p>
                            <span>Order inquiries</span>
                            <p><a itemprop="email" href="mailto:orders@lisaskitchen.co.uk?subject=Order">orders@lisaskitchen.co.uk</a></p>
                        </div>
                        
                        <p>Whether it's about suggestions on what you'd like to see, or even if you just want to say hello, feel free to send us a message. Good or bad, we want to hear.</p>
                        
                    </div>
                	<div role="complementary" id="map-canvas" class="float-left"></div>
                </div>
                
                <div class="networks container">
                    <h1>Our social side</h1>
                	<a href="https://www.facebook.com/lisashomekitchen" target="_blank" title="Join us on Facebook">Facebook</a>
                	<a href="https://twitter.com/Lisas_Kitchen" target="_blank" title="Follow us on Twitter">Twitter</a>
                    <a href="http://pinterest.com/lisasskitchen" target="_blank" title="Follow us on Pinterest">Pinterest</a>
                    <a href="http://www.linkedin.com/company/lisa's-kitchen" target="_blank" title="Connect with us on Linkedin">Linkedin</a>
                    <p>Or if you'd you prefer just send us a message using the form below and we'll get back to you as soon as possible.</p>
                </div>
                
                <div class="send-message container">
                	<h1>Get in touch</h1>
                	<form class="contact-form" method="post" action="#">
                        <div class="details clearfix">
                            <input type="text" id="name" name="name" placeholder="Your Name" required />
                            <input type="email" id="email" name="email" placeholder="Your Email" required />
                            <p class="no-name error">Oops, you missed your name!</p>
                            <p class="no-email error">We'll need your email address.</p>
                        </div>
                        
                        <textarea id="text" name="text" class="text" placeholder="Type your message in here." required></textarea>
                        <p class="no-text error">Whoops, you've missed your message!</p>
                        
                        <input role="button" type="submit" name="submit" class="submit" value="Send Your Message"/>
                    </form>
                </div>
                
        	</div><!--/content-->
    	</div><!--/wrapper-->
        
        <?php include ("templates/footer.php"); ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyC6n-3I8KfH6ReeERae16W5M8B1QtzjPGc&amp;sensor=false"></script>
        
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        <?php include ("includes/analytics.php"); ?>
    </body>
</html>

