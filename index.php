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

include("pages/" . $page . ".php");
?>