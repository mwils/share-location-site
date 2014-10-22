<?php 
require 'config.php'; 
require 'set_place_variables.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?=$siteTitle?></title>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjzRQaGaRxQxPfI1fZegrCtMRvkZ8E3cw">
</script>
<script type="text/javascript">
var latlng = new google.maps.LatLng(<?=$cord_lat?>, <?=$cord_lng?>);

function initialize() {
        var mapOptions = {
          center: latlng,
          zoom: 14
        };
        var map = new google.maps.Map(document.getElementById('mapCanvas'),
            mapOptions);
	var marker = new google.maps.Marker({
    position: latlng,
    title: 'Here it is!',
    map: map,
    draggable: false
  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1><?php echo $siteTitle; ?></h1>
			<h2><?=$slug?></h2>
		</div>
		<div class="nav">
			<ul><?=$main_links?></ul>
		</div>
		<div class="main">
			<h3><?php echo $name; ?> </h3>
			<h4><?php echo $short; ?> </h4>
			<h5><?php echo $address; ?></h5>
			<p class="description"><?php echo $long; ?> </p>
			<div class="images">
			<?=$images?>
			</div>
			<div class="upload_img">
				<form action="upload_img.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="page_num" value="<?=$page?>">
				Please choose a file: <input type="file" id="picture_upload" name="uploadFile"><br>
 				<input type="submit" value="Upload File">
 			</div>
			<div id="mapCanvas"></div>
</body>
</html>