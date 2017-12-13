<?php
	if(!isset($_COOKIE['loggedin'])){
		$message = "Sigin Success";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location:../index.php");
	}
	
?>
