<?php

	session_start();

if (isset($_SESSION['login'])) { 
	session_unset($_SESSION['login']);
	session_destroy();
	header("Location: http://www.vossawilwerk.nl/"); 
} else{
	header("Location: http://www.vossawilwerk.nl/"); 
}

?>