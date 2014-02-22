//Cookie consent banner
//****************************************************************************
$(document).ready(function(cookieConsent) {
	$('.cookie-accept').click(function () {
		days = 365; //number of days to keep the cookie
		myDate = new Date();
		myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
		document.cookie = "LkCnShown = true; expires = " + myDate.toGMTString(); //create
		$("#cookies").slideUp("slow");
	});
});


//Slideshow on the index page
//****************************************************************************
$(function(indexSlides) {
	$(".slides").responsiveSlides( {
		auto: true,             // Boolean: Animate automatically, true or false
		speed: 1000,            // Integer: Speed of the transition, in milliseconds
		timeout: 8000,          // Integer: Time between slide transitions, in milliseconds
		pager: true,            // Boolean: Show pager, true or false
		nav: false,             // Boolean: Show navigation, true or false
		random: false,          // Boolean: Randomize the order of the slides, true or false
		pause: false,           // Boolean: Pause on hover, true or false
		pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		prevText: "<",   		// String: Text for the "previous" button
		nextText: ">",       	// String: Text for the "next" button
		maxwidth: "1100",       // Integer: Max-width of the slideshow, in pixels
		navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		manualControls: "",     // Selector: Declare custom pager navigation
		namespace: "slides",    // String: Change the default namespace used
		before: function(){},   // Function: Before callback
		after: function(){}     // Function: After callback
	});
});


//Form fields
//****************************************************************************
$("input, textarea").placeholder();

$(function(datePicker) {
	$(".date-picker").datepicker({dateFormat:"dd/mm/yy"});
});

//Quantity selector buttons
//****************************************************************************
$(function(quantitySelect) {
	$(".quantity").append("<i class=\"fa fa-plus fa-2x plus button no-select\"> </i><i class=\"fa fa-minus fa-2x minus button no-select\"></i>");
	$(".button").on("click", function() {
		
	$(".all-zero").slideUp("slow"); //hide error if present
	
	//declare maximum quantity you want to allow
	var maxVal = 5;
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == " ") { //blank space is important
  		var newVal = parseFloat(oldValue) + 1;
  	} else {
		//don't allow below zero
		if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
		} else {
			newVal = 0;
    	}
	}
	//check if quantity has hit the max
	if (newVal > maxVal) {
		newVal = 5 //change this match var maxVal
	}
	  
    $button.parent().find("input").val(newVal);
	
	});
	
    $(".quantity input").keypress(function (e) {
        var a = [];
        var k = e.which;
        for (i = 48; i < 58; i++)
        	a.push(i);
        if (!($.inArray(k, a) >= 0)) e.preventDefault();
    });
});


//Contine button to carry on with the order
//****************************************************************************
$(function(orderCheck) {
	$(".all-zero").hide();
	$(".blank-date").hide();
	$(".continue").click(function() {
		var cottagePie   = $("#cottagepie").val();
		var chickenTikka = $("#chickentikka").val();
		var meatBalls    = $("#meatballs").val();
		var pastaBol     = $("#pastabol").val();
		var lasagne      = $("#lasagne").val();
		var pastaBake    = $("#pastabake").val();
		var date         = $("#date").val();
		
		if (cottagePie == "0" && chickenTikka == "0" && meatBalls == "0" && pastaBol == "0" && lasagne == "0" && pastaBake == "0") {
			$(".all-zero").slideDown("slow");
			return false;
		} else if (date == "") {
			$(".blank-date").slideDown("slow");
			$("#date").focus();
			return false;
		} else {
			$(".blank-date").slideUp("slow");
			$(".personal, .confirm").slideDown("slow");
			$(".delivery").addClass("continued");
		}
	});
});


//Order submit function
//****************************************************************************
$(function(submitOrder) {
	$(".no-name").hide();
	$(".no-snumber").hide();
	
	$(".order-form").submit(function(event) { 
		event.preventDefault();
		
		var cottagePie   = $("#cottagepie").val();
		var chickenTikka = $("#chickentikka").val();
		var meatBalls    = $("#meatballs").val();
		var pastaBol     = $("#pastabol").val();
		var lasagne      = $("#lasagne").val();
		var pastaBake    = $("#pastabake").val();
		
		var date         = $("#date").val();
		var location     = $("#location").val();
		var name         = $("#name").val();
		var snumber      = $("#snumber").val();
		
		//check for zero values
		if (cottagePie == "0" && chickenTikka == "0" && meatBalls == "0" && pastaBol == "0" && lasagne == "0" && pastaBake == "0") {
			$(".all-zero").slideDown("slow");
			return false;
		}
		
		//check for blank inputs
		if (name == "") {
			$(".no-name").slideDown("slow");
			$("#name").focus();
			return false;
		}
		
		if (snumber == "") {
			$(".no-snumber").slideDown("slow");
			$("#snumber").focus();
			return false;
		}
		
		var dataString = 'date=' + date + '&location=' + location + '&name=' + name + '&snumber=' + snumber + '&cottagepie=' + cottagePie + '&chickentikka=' + chickenTikka + '&meatballs=' + meatBalls + '&pastabol=' + pastaBol + '&lasagne=' + lasagne + '&pastabake=' + pastaBake;
		//alert (dataString); return false;
		
		$.ajax({
			type: "POST",			
			url: "bin/order_process.php",
			data: dataString,
			beforeSend: function() {
							//shows loading animation
							$(".order-form").html("<div class=\"loading\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>");
                		},
			success: function() {
						$(".order-welcome").slideUp("slow");
						$(".order-form").html("<div class=\"message\"></div>");
						$(".message").html("<h1>Order Submitted</h1>").append("<i class=\"icon-ok-sign icon-4x\"></i><p>Thank you, your order has been sent.</p><p>We will make sure that the products that you ordered will be available for you to pick up from your chosen location. Please note, that you have not committed yourself to buying any products you have ordered.</p><p>Thanks again, we hope to see you soon!</p>");
					}
		   		}
			);
		return false;
	});
});


//Map on contact page
//****************************************************************************
function getMap() {
	var latLng = new google.maps.LatLng(51.887496, -2.088788); //51.887496,-2.088788 | GL50 2RH, Cheltenham, United Kingdom
	var mapOptions = {
		zoom: 16,
		center: latLng,
		
		/*mapTypeControlOptions: {
      		mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.HYBRID]
    	},*/
		
		disableDefaultUI: true,
		mapTypeControl: false,
		scaleControl: false,
		panControl: false,
		streetViewControl: false,
		
		zoomControl: true,
		zoomControlOptions: {
      		style: google.maps.ZoomControlStyle.SMALL
    	},
		
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
  
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	var image = "img/map_marker.png";
	var latLng = new google.maps.LatLng(51.887496, -2.088788);
	var locationMarker = new google.maps.Marker({
		position: latLng,
		map: map,
		icon: image
	});
};

google.maps.event.addDomListener(window, "load", getMap);


//Contact send message function
//****************************************************************************
$(".no-name").hide();
$(".no-email").hide();
$(".no-text").hide();

$(".contact-form").submit(function(event) {
	event.preventDefault();
	
	var name  = $("#name").val();
	var email = $("#email").val();
	var text  = $("#text").val();
	
	//check for blank inputs
	if (name == "") {
		$(".no-email").hide();
		$(".no-text").hide();
		$(".no-name").slideDown("slow");
		$("#name").focus();
		return false;
	}
	
	if (email == "") {
		$(".no-name").hide();
		$(".no-text").hide();
		$(".no-email").slideDown("slow");
		$("#email").focus();
		return false;
	}
	
	if (text == "") {
		$(".no-name").hide();
		$(".no-email").hide();
		$(".text").css({marginBottom:"0"});
		$(".no-text").slideDown("slow");
		$("#text").focus();
		return false;
	}
	
	var dataString = 'name=' + name + '&email=' + email + '&text=' + text;
	//alert (dataString); return false;
	
	$.ajax({
		type: "POST",			
		url: "bin/contact_process.php",
		data: dataString,
		beforeSend: function() {
						//shows loading animation
						$(".contact-form").html("<div class=\"loading\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>");
					},
		success: function() {
					//$(".send-message").slideUp("slow");
					//$(".contact-form").html("<div class=\"message\"></div>");
					$(".contact-form").html("<p>Thanks, we've got your message and we'll reply shortly!</p>");
				}
			}
		);
	return false;
});
