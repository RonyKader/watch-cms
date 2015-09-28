<?php 
include ( 'core/init.php' );
extract( $_POST );
echo $hashed_password;
$insert_query = "INSERT INTO `admins` ( username, email, hashed_password ) VALUES ( '$username', '$email','$hashed_password' )";

$result = mysqli_query( $connection, $insert_query );

if ( $result ) {
	echo "sucess";
}else{
	die( "Data insert failed." . mysqli_error( $connection ) );
}

 ?>