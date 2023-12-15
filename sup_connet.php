<?php
	$conn = new mysqli('localhost', 'root', '', 'main_db') or die(mysqli_error());
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
	