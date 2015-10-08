<?php
// Header Location
function redirect_to( $location ){
	header( "Location:".$location );
	exit;
}
// Check Query 
function confirm_query( $set_result ){
	if ( !$set_result ) {
		die( "Database Query Failed" );
	}
}

// Find All Subject nav
function find_all_mainnav() {
	global $connection;
	$nav_view 		= "SELECT * FROM `subject`";
	$view_result 	= mysqli_query( $connection, $nav_view );
	confirm_query( $view_result );

	return $view_result;
}


// Find All page for Subject nav
function find_pagefor_mainnav( $row_id ) {
	global $connection;
	$page_view = "SELECT * FROM `page` WHERE subject_id = {$row_id} ";	
	$result_page = mysqli_query( $connection, $page_view );														
	confirm_query( $result_page );

	return $result_page;
}

// SELECT SUBJECT BY ID
function select_subject_byid( $subject_id ) {
	global $connection;
	$escape_string = mysqli_real_escape_string( $connection, $subject_id );
	$view_subject = "SELECT * FROM `subject` WHERE id = {$escape_string}";
	$result = mysqli_query( $connection, $view_subject );
	confirm_query( $result );

	$subject_result = mysqli_fetch_assoc( $result );
	if ( $subject_result ) {
		return $subject_result;
	}else{
		return NULL;
	}
} 

// SELECT PAGE BY ID
function select_page_byid( $page_id ){
	global $connection;
	$escape_string = mysqli_real_escape_string( $connection, $page_id );
	$page_view = "SELECT * FROM `page` WHERE id = {$escape_string}";
	$page_query = mysqli_query( $connection, $page_view );
	confirm_query( $page_query );
	$result = mysqli_fetch_assoc( $page_query );

	if ( $result ) {
		return $result;
	}else{
		return NULL;
	}
}



