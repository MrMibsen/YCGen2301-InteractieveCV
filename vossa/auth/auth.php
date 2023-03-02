<?php
if(!isset($_SESSION)){
	session_start();
}
if (isset($_SESSION['login'])) { 
	if($_SESSION['login'] != TRUE){
		header("Location: http://www.vossawilwerk.nl");
	}
}else{	
	header("Location: http://www.vossawilwerk.nl");
}
?>