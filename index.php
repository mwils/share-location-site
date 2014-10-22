<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?=$siteTitle?></title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script type="text/javascript" src="facebook_login.js"></script>
</head>
<?php
require( dirname( __FILE__ ) . '/config.php' );
?>
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
		<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>
		
			<h3>Here you can find and share awsome places to take a break</h3>
			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
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
	