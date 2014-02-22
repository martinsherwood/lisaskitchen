<?php
		
	function generateOrderID() {
    	$ID = md5(uniqid(microtime(), true)); //generate id
    	$_SESSION = $ID;
    	return $ID;
    }
		
	if (isset($_POST)) {
		
		$formOkay = true;
		$newID = generateOrderID();
		
		if ($_POST['date'] == "" || $_POST['location'] == "" || $_POST['name'] == "" || $_POST['snumber'] == "") {
			$_SESSION['error'] = "You must supply all details.";
			header("Location: order.php");
			exit;
		}
		
		//extra
		$ipAddress = $_SERVER['REMOTE_ADDR'];
		$date = date('D, M j');
		$time = date('h:i A');

		//items
		$cottagePie = $_POST['cottagepie'];
		$chickenTikka = $_POST['chickentikka'];
		$meatBalls = $_POST['meatballs'];
		$pastaBol = $_POST['pastabol'];
		$lasagne = $_POST['lasagne'];
		$pastaBake = $_POST['pastabake'];
		
		//personal and delivery
		$ID = $newID;
		$delDate = $_POST['date'];
		$location = $_POST['location'];
		$name = $_POST['name'];
		$studentNumber = $_POST['snumber'];
		
		//make email, uses student - change later
		$emailAddress = $studentNumber . "@connect.glos.ac.uk";
		
		//construct email to send
		//$to = "martin.sherwood@outlook.com";
		$to = "orders@lisaskitchen.co.uk";
		$subject = "New Order";
		
		//send email if all is ok
		if ($formOkay = true) {
			$headers = "From:" . $emailAddress . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
			
			$emailBody = "<h1>New Order</h1>
						  <hr>
						  <h2>Details:</h2>
						  <p><strong>Name: </strong> {$name} </p>
						  <p><strong>Student Number: </strong> {$studentNumber} </p>
						  <p><strong>Email: </strong> {$emailAddress} </p>
						  <p><strong>Delivery Date: </strong> {$delDate} </p>
						  <p><strong>Pickup Location: </strong> {$location} </p>
						  <hr>
						  <h2>Items Requested:</h2>
						  <p><strong>Cottage Pie: </strong> <span style=\"font-size:1.2em;\">{$cottagePie}</span> </p>
						  <p><strong>Chicken Tikka Masala: </strong> <span style=\"font-size:1.2em;\">{$chickenTikka}</span> </p>
						  <p><strong>Meatballs & Pasta: </strong> <span style=\"font-size:1.2em;\">{$meatBalls}</span> </p>
						  <p><strong>Pasta Bolognese: </strong> <span style=\"font-size:1.2em;\">{$pastaBol}</span> </p>
						  <p><strong>Vegetable Lasagne: </strong> <span style=\"font-size:1.2em;\">{$lasagne}</span> </p>
						  <p><strong>Pasta Bake: </strong> <span style=\"font-size:1.2em;\">{$pastaBake}</span> </p>
						  <hr>
						  <p style=\"font-size:0.8em; color: #ccc;\">Order ID: {$ID}. This message was sent from the IP Address: {$ipAddress} on {$date} at {$time}</p>";
			
			mail($to, $subject, $emailBody, $headers);
			
		}
	}
	
	