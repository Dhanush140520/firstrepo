<?php
	

	$dbhost = 'localhost';
	$dbname ='mindfin'; 
	$dbuser ='root'; 
	$dbpass ='mindfin@098';

	// $dbhost = 'localhost';
	// $dbname ='mindfin'; 
	// $dbuser ='root'; 
	// $dbpass ='';

$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die(mysqli_connect_error());
	mysqli_select_db($con,$dbname) or die(mysqli_connect_error());
?>