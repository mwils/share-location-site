var x = document.getElementById("demo");
var geocoder = new google.maps.Geocoder();
var marker_lat = "";
var marker_lng = "";
var current_lat = "";
var current_lng = "";
var city = "";

window.onload = function(){
	navigator.geolocation.getCurrentPosition(setPosition);
    }
function setPosition(pos){
	current_lat = pos.coords.latitude;
	current_lng = pos.coords.longitude;
	initialize();
}


// set and display marker position

//set fields with map info
function geocodePosition(pos) {
	geocoder.geocode({
    	latLng: pos
  	}, 
  	
  	function getGeoCodes(responses) {
  		for(i=0; i<responses[0].address_components.length; i++) {
  			for(n=0; n<responses[0].address_components[i].types.length; n++) {
 				if (responses[0].address_components[i].types[n] == "locality") {
 					updateCityField(responses[0].address_components[i].long_name);
 					updateCityAddressField(responses[0].formatted_address);
 					}
 			}
 		}
 		}
  	
  	);
}
function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updatePlaceField(place) {
  document.getElementById('name').value = place;
  }
function updateCityField(city) {
  document.getElementById('city').value = city;
  console.log("city");
}
function updateCityAddressField(address) {
  document.getElementById('address').value = address;
}
  
  

function updateMarkerPosition(latLng) {
  document.getElementById('info').innerHTML = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');
  marker_lat = latLng.lat();
  marker_lng = latLng.lng();
  document.getElementById('cord_lat').value = marker_lat;
  document.getElementById('cord_lng').value = marker_lng;
  
}

function initialize() {
  var latLng = new google.maps.LatLng(current_lat, current_lng);
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


//
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
//google.maps.event.addDomListener(window, 'load', initialize);