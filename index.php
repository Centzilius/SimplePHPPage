<?php
// Checks if config.php exists
if (file_exists("config.php")) {
	include("config.php");
} else {
	echo "Fatal Error - config.php doesn't exist";
	exit;
}

// Include libs (Nothing to include at the moment)

// Sets the variable $page for further use
if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "index";
}

// Check for malicious input data (like directory traversal)
if (!preg_match("~^[a-z0-9]+$~", $page)) $page="error";

$filename = "pages/" . $page . ".php";

// redirect to 404 page
if (!file_exists($filename)) $filename = "pages/error.php";

include($filename);
?>
