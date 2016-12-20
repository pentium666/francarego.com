<?php

	if(!isset($_SESSION['exists'])) {
		session_start();
		$_SESSION['exists'] == true;
	}

	ini_set("display_errors", true);
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	require("functions.php");

?>
