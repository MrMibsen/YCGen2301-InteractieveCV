<?php

$naam = $wachtwoord = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $naam = test_input($_POST["naam"]);
  $wachtwoord = test_input($_POST["wachtwoord"]);

}else{
	header("Location: http://www.vossawilwerk.nl");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(!empty($naam)&& !empty($wachtwoord)){
	inlogcheck($naam, $wachtwoord); 
}else {
	header("Location: http://www.vossawilwerk.nl");
}

function inlogcheck($naam, $wachtwoord) {
	$user="gast";
	$password="shajuu6h";
	if($password==$wachtwoord && $user==$naam){
		login($naam);
	}else{
		header("Location: http://www.vossawilwerk.nl");
	}
}

function login($naam){
	session_start();
	$_SESSION['login'] = TRUE;	
	$_SESSION['user'] = $naam;
	header("Location: ../cv/");
}


?>