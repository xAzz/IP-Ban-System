<?php
	
	require('http://example.com/banned/banlist.php'); // This is an example. Change "example.com" to your own domain

	if (in_array($_SERVER['REMOTE_ADDR'], $deny)) {
	    exit();
	} else {
		header("Location: http://example.com/"); // Page to redirct non banned users to (users that are not banned)
	}

	// The lines below will echo "Your IP 127.0.0.1 is banned"
	echo "Your IP ";
	echo $_SERVER["REMOTE_ADDR"];
	echo " is banned";

?>