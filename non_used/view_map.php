 <html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
}
//
var geocoder = new google.maps.Geocoder();
var current_lat = "";
var current_lng = "";

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}

function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

  
  

function updateMarkerPosition(latLng) {
  document.getElementById('info').innerHTML = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');
  current_lat = latLng.lat();
  current_lng = latLng.lng();
  document.getElementById('cord_lat').value = current_lat;
  document.getElementById('cord_lng').value = current_lng;
}

function updateMarkerAddress(str) {
  document.getElementById('address').innerHTML = str;
}

function initialize() {
  var latLng = new google.maps.LatLng(-34.397, 150.644);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 8,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });

  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);

  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });

  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });

  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
    
  });

  
}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);


</script>

</head>
<body onload="getLocation()">

<style>
  #mapCanvas {
    width: 500px;
    height: 400px;
    float: left;
  }
  #infoPanel {
    float: left;
    margin-left: 10px;
  }
  #infoPanel div {
    margin-bottom: 5px;
  }
  </style>
  
  <form action="insert_to_db.php" method="post">
	<!--recaptcha-->
	<?php 	require_once('recaptcha-php-1.11/recaptchalib.php');
	 $publickey = "6Le7_78SAAAAAGacX50OSsmRuD9Rl2LmUTIVZc__";
  	echo recaptcha_get_html($publickey);
	?>

  name: <input type="text" name="name">
  city: <input type="city" name="city">
  short description: <input type="text" name="short_description">
  description: <input type="text" name="description">
  <input type="text" id="cord_lat" name="cord_lat" value="1234">
  <input type="text" id="cord_lng" name="cord_lng" value="1234">
  <input type="submit">
  </form>
  <div id="mapCanvas"></div>
  <div id="infoPanel">
    <b>Marker status:</b>
    <div id="markerStatus"><i>Click and drag the marker.</i></div>
    <b>Current position:</b>
    <div id="info"></div>
    <b>Closest matching address:</b>
    <div id="address"></div>
    <p id="demo">Click the button to get your coordinates:</p>
    <script>
    
    </script>
  </div>
</body>
</html>