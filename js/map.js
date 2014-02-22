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

//google.maps.event.addDomListener(window, "load", getMap);