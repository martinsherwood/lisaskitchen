<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Template</title>
        <meta name="description" content="Lisa's Kitchen provides healthy, home cooked meals.">
        <meta name="keywords" content="food, drink, meals, dining, healthy, fresh, home, cooked, university, uni, student, students, cheltenham, gloucestershire, about">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0">
        
        <link rel="dns-prefetch" href="//ajax.googleapis.com">
        
        <?php include ("includes/favicons.php"); ?>

        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
    </head>
    <body id="template">
    
    	<?php include_once ("includes/cookies.php"); ?>
    
    	<div class="wrapper">
        	<div role="main" class="content">
            	
                <?php include ("templates/header.php"); ?>
            	
                <div role="contentinfo" class="container clearfix">
                	<h1>Template Page</h1>
                    <p>Some content here</p>
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
