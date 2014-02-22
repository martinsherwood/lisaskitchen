<?php
	session_start();
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ordering</title>
        <meta name="description" content="Lisa's Kitchen provides healthy, home cooked meals.">
        <meta name="keywords" content="food, drink, meals, dining, healthy, fresh, home, cooked, university, uni, order, delivery, student, students, cheltenham, gloucestershire">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0">
        
        <link rel="dns-prefetch" href="//ajax.googleapis.com">
        
        <?php include ("includes/favicons.php"); ?>

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/order.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        <link type="text/plain" rel="author" href="humans.txt">
        
    </head>
    <body id="order">
    
    	<?php include_once ("includes/cookies.php"); ?>
    
    	<div class="wrapper">
        	<div role="main" class="content">
            	
                <?php include ("templates/header.php"); ?>
                
                <div class="order-welcome container clearfix">
                	<h1>Create an order</h1>
                    <p>Welcome to our new ordering page, we've tried to make the process as simple and painless as possible. If you do have any questions or problems with or about an order, feel free to contact us and we'll get back to you as soon as we can. Thank you.</p>
                    <p>All of our meals cost <span>&pound;2.79</span>, and currently we only offer a maximum quantity of <span>5</span> for each meal per order.</p>
                </div>
                
                <?php
					if (isset($_SESSION['error'])) {
						echo "<span class=\"error\">" . $_SESSION['error'] . "</span>";
						unset($_SESSION['error']);
					}
				?>
                
                <form class="order-form container clearfix" method="post" action="#">
                    <div class="selection container clearfix">
                        <h2>Select items</h2>
                        <div class="choice">
                            <h3>Cottage Pie</h3>
                            <img src="img/meals/cottage_pie.jpg" alt="Cottage Pie" title="Cottage Pie" />
                            <div class="quantity"><input class="no-select" type="text" id="cottagepie" name="cottagepie" value="0" title="Quantity" readonly/></div>
                        </div>
                        
                        <div class="choice">
                            <h3>Chicken Tikka</h3>
                            <img src="img/meals/chicken_tikka.jpg" alt="Chicken Tikka Masala" title="Chicken Tikka Masala" />
                            <div class="quantity"><input class="no-select" type="text" id="chickentikka" name="chickentikka" value="0" title="Quantity" readonly/></div>
                        </div>
                        
                        <div class="choice">
                            <h3>Meatballs <span class="plus-pasta">&amp; Pasta</span></h3>
                            <img src="img/meals/meatballs.jpg" alt="Meatballs &amp; Pasta" title="Meatballs &amp; Pasta" />
                            <div class="quantity"><input class="no-select" type="text" id="meatballs" name="meatballs" value="0" title="Quantity" readonly/></div>
                        </div>
                        
                        <div class="choice">
                            <h3>Pasta Bolognese</h3>
                            <img src="img/meals/pasta_bolognese.jpg" alt="Pasta Bolognese" title="Pasta Bolognese" />
                            <div class="quantity"><input class="no-select" type="text" id="pastabol" name="pastabol" value="0" title="Quantity" readonly/></div>
                        </div>
                        
                        <div class="choice">
                            <h3>Vegetable Lasagne</h3>
                            <span class="vegetarian"></span>
                            <img src="img/meals/vege_lasagne.jpg" alt="Vegetable Lasagne" title="Vegetable Lasagne" />
                            <div class="quantity"><input class="no-select" type="text" id="lasagne" name="lasagne" value="0" title="Quantity" readonly/></div>
                        </div>
                        
                        <div class="choice">
                            <h3>Pasta Bake</h3>
                            <span class="vegetarian"></span>
                            <img src="img/meals/vege_pastabake.jpg" alt="Vegetable Pasta Bake" title="Vegetable Pasta Bake" />
                            <div class="quantity"><input class="no-select" type="text" id="pastabake" name="pastabake" value="0" title="Quantity" readonly/></div>
                        </div>
                        <p class="all-zero error">Whoops, you haven't selected any meals!</p>
                    </div>
                    
                    <div class="delivery container clearfix">
                        <div class="date float-left"><label for="date">On:</label><input type="text" id="date" class="date-picker" name="date" placeholder="Select a date" value="<?php echo date("d/m/Y"); ?>" required/></div>
                        <div class="location float-left"><label for="location">At:</label><select id="location" name="location"><option value="Park SU">Park SU</option><option value="FCH SU" disabled>FCH SU</option><option value="Oxtalls SU" disabled>Oxtalls SU</option></select></div>
                        <div role="button" class="continue float-right" title="Continue">Continue</div>
                        <p class="blank-date error">We'll be needing a date!</p>
                    </div>
                    
                    <div class="personal container clearfix">
                    	<div class="name float-left"><label for="name">Name:</label><input type="text" id="name" name="name" placeholder="Name to reserve under" maxlength="52" pattern=".{3,}" title="Please enter at least 3 characters for the reservation name." required/></div>
                        <div class="snumber float-left"><label for="snumber">Student Number:</label><input type="text" id="snumber" name="snumber" maxlength="8" placeholder="Full student number" pattern="[sS][0123456789][0123456789][0123456789][0123456789][0123456789][0123456789][0123456789]" title="Please enter your full student number, e.g. S1122334." required/></div>
                        <p class="no-name error">Oops, you missed your name!</p>
                        <p class="no-snumber error">We need your student so we can contact you if we need to!</p>
                    </div>
                    
                    <div class="confirm container clearfix">
                    	<p>By placing this order, you are not committed in any way but the products will be available for collection at the location and date you specified.</p>
                    	<input role="button" type="submit" name="submit" class="submit centre" value="Order Now"/>
                    </div>
				</form>
                
        	</div><!--/content-->
    	</div><!--/wrapper-->
        
        <?php include ("templates/footer.php"); ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        <?php include ("includes/analytics.php"); ?>
    </body>
</html>

