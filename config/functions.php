<?php
//gets root of project
function root()
{
	return dirname($_SERVER['DOCUMENT_ROOT'], 1);
}

function database_connect() {
	
	$mysqli = new mysqli("127.0.0.1,)
}

function render($page, $variables = ["title" => "French King Photography"])
{
	if(file_exists(root()."/views/{$page}")) {
		extract($variables);
		require(root()."/views/templates/main.php");
	}
	else {
		echo("File {$page} does not exist.");
	}
}
?>
