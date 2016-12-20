<?php

require(dirname($_SERVER['DOCUMENT_ROOT'], 1)."/config/config.php");

$states = explode("\n", file_get_contents("../data/states.txt"));

$max_visits = 25;

if($_SERVER['REQUEST_METHOD'] == "POST") {
	extract($_POST);
	$visits = dbquery("SELECT visits FROM ip_addresses WHERE address = ?", "s", $_SERVER['REMOTE_ADDR'])["visits"];
	if($visits !== false and $visits > $max_visits) {
		render("seasonal/card-signup-failure.php");
	}
	else {
		if($visits == NULL) {
			dbquery("INSERT INTO ip_addresses (address, visits) VALUES(?, ?)", "si", $_SERVER['REMOTE_ADDR'], 1);
		}
		else {
			dbquery("UPDATE ip_addresses SET visits = ? WHERE address = ?", "is", $visits + 1, $_SERVER['REMOTE_ADDR']);
		}
		dbquery("INSERT INTO mailing (firstname, lastname, address1, address2, city, state, zipcode) VALUES(?, ?, ?, ?, ?, ?, ?)", "sssssss", $firstname, $lastname, $address1, $address2, $city, $state, $zipcode);
		$_SESSION['signedup'] = true;
		render("seasonal/card-signup-success.php");
	}
}
else {
	if(isset($_SESSION['signedup'])) {
		message('You are already signed up to recieve a card.');
	}
	else {
		render("seasonal/card-signup-form.php", ["states" => $states]);
	}
}

?>
