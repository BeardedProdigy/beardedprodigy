<?php
session_start();
if($_SESSION['username']){

	echo "Welcome :"$_SESSION['username'];
}
else{
	echo "Unknown Username";
}
?>
