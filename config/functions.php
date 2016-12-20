<?php
//gets root of project
function root()
{
	return dirname($_SERVER['DOCUMENT_ROOT'], 1);
}

function database_connect() {
	$credentials = json_decode(file_get_contents(root()."/config/passwords.json"));

	$servername = "localhost";
	$username = $credentials->mysql->username;
	$password = $credentials->mysql->password;

	// Create connection
	$conn = new mysqli($servername, $username, $password, "frenchking");

	if($mysqli->connect_errno) {
		echo "Sorry, this website is experiencing problems.";
		exit;
	}

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
}

function dbquery($sql, $types, ...$vars) {
	$conn = database_connect();

	$stmt = $conn->prepare($sql);
	$stmt->bind_param($types, ...$vars);
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close;
	$conn->close;
	if($result !== false){
		$result = $result->fetch_array(MYSQLI_ASSOC);
		if(empty($result)) {
			return false;
		}
		return $result;
	}
	return false;
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

function message($text)
{
	require(root()."/views/templates/message.php");
}
?>
