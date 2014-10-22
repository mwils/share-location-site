<?php include 'config.php'?>  
<html>
<head>
<script type="text/javascript" src="facebook_login.js" async></script>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>



<link rel="stylesheet" type="text/css" href="stylesheet.css">
<title><?=$siteTitle?></title>
</head>
<body>

<div class="container">
	<div class="header">
		<h1><?php echo $siteTitle; ?></h1>
		<h2><?=$slug?></h2>
	</div>
	<div class="nav"><ul><?=$main_links?></ul></div>
	<div class="main">
	<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>
	
	
  		<form class="place_form" id="place_form" action="insert_to_db.php" method="post">
  			Name of place:<br> <input type="text" placeholder="Name" id='name' name="name"><br>
  			City:<br> <input type="city" id="city" name="city"><br>
  			Nearest address:<br><input type="address" id="address" name="address"><br>
  			Your favorite feature:<br> <input type="text" placeholder="Best feature" name="short_description"><br>
  			
  			<textarea rows="4" cols="50" name="description" form="place_form">Tell us all the details about this awesome place.</textarea>
  			
  			
  			<select name="type">
  				<option value="indoors">Indoors</option>
 				<option value="sheltered">Outdoor shelter</option>
 				<option value="park">Park</option>
  				<option value="picnic">Picnic</option>
			</select>
			<p>Latitude and Longitude</p>
  			<input type="text" id="cord_lat" name="cord_lat" value="1234">
  			<input type="text" id="cord_lng" name="cord_lng" value="1234"><br>
  				
  			<input type="submit">
  			<!--recaptcha-->
			<?php 	require_once('recaptcha-php-1.11/recaptchalib.php');
	 		$publickey = "6Le7_78SAAAAAGacX50OSsmRuD9Rl2LmUTIVZc__";
  			echo recaptcha_get_html($publickey);
			?>
			
			
			
  		</form>
  		
  	
			
  		<div
  		class="fb-like"
  		data-share="true"
  		data-width="450"
  		data-show-faces="true">
		</div>
		
		
  		<div id="mapCanvas"></div>
  		<div id="infoPanel">
    			<div id="markerStatus"></div>
    			<b>Current position:</b>
    			<div id="info"></div>
    			<b></b>
    			<div id="address"></div>
  		</div>
  	</div>
  	<script type="text/javascript" src="map_functions.js"></script>
</body>
</html>