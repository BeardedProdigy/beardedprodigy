<?php
session_start();
if($_SESSION['username']){

	echo "Welcome :"$_SESSION['username'];
	header( "Refresh:0; url=homepage.html");
}
else{
	echo "Unknown Username";
	header( "Refresh:2; url=index.html");
}
?>
