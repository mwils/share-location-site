<?php include 'nav_links.php' ?>
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
			<div class="search_results">
				<h3>Here is a list of places you should like:</h3>
				<ul>
				<?=$nav?>
				</ul>
			</div>
			<div
  			class="fb-like"
  			data-share="true"
  			data-width="450"
  			data-show-faces="true">
			</div>
		</div>
	</div>
</body>
</html>