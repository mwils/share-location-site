<?php 
require 'config.php';
require 'set_place_variables.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?=$siteTitle?></title>

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
		<form action="upload.php" method="post" enctype="multipart/form-data">
		
  		Please choose a file: <input type="file" id="picture_upload" name="uploadFile"><br>
 		<input type="submit" value="Upload File">
		</form>
		</div>
	</div>
</body>
</html>
	