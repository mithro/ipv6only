<?php 
// Please don't cache
header("Cache-Control: no-cache"); 
header("Expires: -1"); 

// Actual output
$ip = getenv("REMOTE_ADDR");
if (@$_GET['format'] == 'json' ) {
	// This is a text file
	header("Content-Type: application/json");
	if ($_GET['jsonp']) {
		echo $_GET['jsonp'] . "(";
	}
	echo json_encode ( $ip );
	if ($_GET['jsonp']) {
		echo ");";
	}
} else {
	// This is a text file
	header("Content-Type: text/plain");
	echo $ip;
}
echo "\n";
