<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Test document</title>
  <script type="text/javascript" src="maps_include.js"></script>
</head>
<body>


<?php 
require 'place_page.php';
include 'submit_a_place.php';

echo $row['db_desription'];
?>
<h1 class="header"><?php echo $siteTitle; ?></h1>
<?php echo $main_links; ?>
<h2 class="place"><?php echo $row['db_name']; ?> </h2>
<h3 class="short_des"><?php echo $row['db_short_description']; ?> </h3>
<p class="description"><?php echo $row['db_desription']; ?> </p>


</body>
</html>