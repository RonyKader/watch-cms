<?php 
	function user_exists ( $username ){
		$username = sanatize( $username ); 
		$query = mysql_query( "SELECT * FROM `users` WHERE `username` = '$username'" ); 

		return ( mysql_result( $query, 0 ) == 1 ) ? true : false;
	}

	function active ( $username ){
		$username = sanatize( $username );
		$query = mysql_query( "SELECT * FROM `users` WHERE `status` = 1" );

		return ( mysql_result( $query, 0 ) == 1 ) ? true : false;
	}
 ?>