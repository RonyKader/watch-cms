<?php 
include ('')
extract( $_POST );

if (isset( $_POST["subject_form"])) {
	
	$insert = "INSERT INTO `subject` ( \"menu_name\",\"position\",\"visible\") VALUES ({ $menu_name } , { $position }, { $visible })";
	$query = mysqli_query( $connection, $insert );


}else{
	echo "Fail submit";
}