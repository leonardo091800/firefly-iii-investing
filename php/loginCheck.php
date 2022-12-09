<?php

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
    echo "Welcome to the member's area!";
} else {
	echo "Please log in first to see this page.";
	require_once($rootDir."/public/loginForm.php");
	exit;
}


?>
