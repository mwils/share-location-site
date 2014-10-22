<!DOCTYPE html>
<html>

<body>
<script type="text/javascript">
$("#cord_lat").val(45);
$("#cord_lng").val(45);
</script>

<form action="insert_to_db.php" method="post">
<!--recaptcha-->
<?php 	require_once('recaptcha-php-1.11/recaptchalib.php');
	 $publickey = "6Le7_78SAAAAAGacX50OSsmRuD9Rl2LmUTIVZc__";
  	echo recaptcha_get_html($publickey);
?>

name: <input type="text" name="name">
city: <input type="city" name="city">
short description: <input type="text" name="short_description">
description: <input type="text" name="description">
<input type="hidden" name="cord_lat">
<input type="hidden" name="cord_lng">
<input type="submit">
</form>

</body>
</html>