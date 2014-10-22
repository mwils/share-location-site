<?php

require 'config.php';

$page = $_GET["page"];

//loads the correct row from database
$result= mysqli_query($link, "SELECT * FROM Places WHERE db_page_id = $page");
$row = mysqli_fetch_array($result);
$name = $row['db_name'];
$city = $row['db_city'];
$address = $row['db_address'];
$short = $row['db_short_description'];
$long = $row['db_description'];
$type = $row['db_type'];
$cord_lat = $row['db_cord_lat'];
$cord_lng = $row['db_cord_lng'];

$result_image = mysqli_query($link, "SELECT * FROM images WHERE db_page_id = $page");


while ($row = mysqli_fetch_assoc($result_image)) {
	$image_url = $row['url'];
	$images .= "<img src=\"$image_url\">";
	}


?>