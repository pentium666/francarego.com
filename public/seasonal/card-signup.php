<?php

	require(dirname($_SERVER['DOCUMENT_ROOT'], 1)."/config/config.php");

	$states = explode("\n", file_get_contents("../data/states.txt"));
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		render("seasonal/card-signup-success.php");
	}
	else {
		render("seasonal/card-signup-form.php", ["states" => $states]);
	}

 ?>
