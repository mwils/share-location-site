<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Test document</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<?php
require( dirname( __FILE__ ) . '/config.php' );
?>
<body>

	<div class="container">
		<div class="header">
		<h1><?php echo $siteTitle; ?></h1>
		</div>
		<div class="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="find_place.php">Find a place</a></li>
			<li><a href="submit_a_place.php">Tell us your place</a></li>
		</ul>
		</div>
		<div class="main">
		<h2>Need a place to rest?</h2>
		<h3>Thank you for posting!</p>
		</div>
	</div>
</body>
</html>
	