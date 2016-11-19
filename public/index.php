<?php

require("../config/config.php");

$json = file_get_contents("data/images.json"); //read links to images
$rows = json_decode($json, true); //decode JSON to array

render("home.php", ["title" => "French King Photography", "rows" => $rows["images"]]);

?>
