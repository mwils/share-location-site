<script>
var current_lat = "";
var current_lng = "";

window.onload=function(){
    if(navigator.geolocation)
	{
	navigator.geolocation.getCurrentPosition(showPosition);
	}
	else
	{
	alert("Geolocation is not supported by this browser.");
	}
    }
function showPosition(pos){
	current_lat = pos.coords.latitude;
	current_lng = pos.coords.longitude;
	alert(current_lat);
}
</script>