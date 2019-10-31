<?php
	// $dbhost = 'localhost';
	// $dbname ='id10851388_mindfin'; 
	// $dbuser ='id10851388_root'; 
	// $dbpass ='mindfin@098';

	$dbhost = 'localhost';
	$dbname ='mindfin'; 
	$dbuser ='root'; 
	$dbpass ='mindfin@098';

	// $dbhost = 'localhost';
	// $dbname ='mindfin'; 
	// $dbuser ='root'; 
	// $dbpass ='';
	
// 	$dbhost = 'us-cdbr-iron-east-02.cleardb.net';
// 	$dbname ='heroku_dee86d52ee4c552'; 
// 	$dbuser ='b695022819b8b0'; 
// 	$dbpass ='c1f816d0';

	// mysqli_connect($dbhost, $dbuser, $dbpass) or die(mysqli_error());
	// $con=mysqli_connect($dbhost, $dbuser, $dbpass);
	// mysqli_select_db($dbname) or die(mysqli_error());
// 	$con=mysqli_connect("localhost","root","","mindfin");
// // Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }

// // ...some PHP code for database "my_db"...

// // Change database to "test"
// mysqli_select_db($con,"test");

// // ...some PHP code for database "test"...

// mysqli_close($con);
$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die(mysqli_connect_error());
	mysqli_select_db($con,$dbname) or die(mysqli_connect_error());
?>