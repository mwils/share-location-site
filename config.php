<?php
$base_url = "/message_board";
$siteTitle = "Sitting Spots";
$slug = "Need a place to sit?";
$link = mysqli_connect('localhost', 'wormse6_messboar', 'se4DR%ft6', 'wormse6_oct2014mb');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$main_links = 	'	<li><a href="index.php">Home</a></li>
			<li><a href="find_place.php">Find a place</a></li>
			<li><a href="submit_a_place.php">Tell us your place</a></li>
		';
?>

<script>
//facebook user authentication when page is moved, url info will need to be changed at facebook dev
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '360442017450805',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

			