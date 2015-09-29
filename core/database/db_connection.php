<?php 
// Create a Database Connection 
	$dbhost 	= "localhost";
	$dbuser		= "root";
	$dbpassword	= "";
	$dbname		= "watch";

	$connection = mysqli_connect( $dbhost, $dbuser, $dbpassword, $dbname );

	if ( mysqli_connect_errno() ) {
		die( "Database could't connect and error is : " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" );
	}
	// else{
	// 	echo "Sucess";
	// }
//Query Perform


// Return Data
//Release return Data
//Close Database Connection


 ?>