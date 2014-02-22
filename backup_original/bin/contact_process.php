<?php
		
	if (isset($_POST)) {
		
		$formOkay = true;
		
		if ($_POST['name'] == "" || $_POST['email'] == "" || $_POST['text'] == "") {
			$_SESSION['error'] = "You must supply all details.";
			header("Location: contact.php");
			exit;
		}
		
		//extra
		$ipAddress = $_SERVER['REMOTE_ADDR'];
		$date = date('D, M j');
		$time = date('h:i A');

		//items
		$name = $_POST['name'];
		$email = $_POST['email'];
		$text = $_POST['text'];
		
		//construct email to send
		//$to = "martin.sherwood@outlook.com";
		$to = "info@lisaskitchen.co.uk";
		$subject = "Contact Form Request";
		
		//send email if all is ok
		if ($formOkay = true) {
			$headers = "From:" . $email . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
			
			$emailBody = "<h1>New Message</h1>
						  <hr>
						  <p style=\"font-size:1.2em;\"><strong>From:  {$name}, {$email} </strong></p>
						  <h2>Message:</h2>
						  <p>{$text}</p>
						  <hr>
						  <p style=\"font-size:0.8em; color: #ccc;\">This message was sent from the IP Address: {$ipAddress} on {$date} at {$time}</p>";
			
			mail($to, $subject, $emailBody, $headers);
			
		}
	}