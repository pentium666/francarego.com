<?php

require("../config/config.php");

$christmas = 0;

$json = file_get_contents("data/images.json"); //read links to images
$rows = json_decode($json, true); //decode JSON to array

if(rand(1, 420) == 420) {
	require ("dank.php");
}
else {
	render("home.php", ["title" => "French King Photography", "rows" => $rows["images"], "christmas" => $christmas]);
}

?>
