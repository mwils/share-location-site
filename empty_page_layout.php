<?php require 'config.php'; ?>
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
		</div>
	</div>
</body>
</html>
	