<?php 
	$test = array(

		'FOOD' => array( 'Apple','orange','potato' ),
		'INSTRUMENT' => array( 'table','chair','book' )
		
		);

	foreach ($test as $element => $items ) {
		echo "<b>" . $element . "<b/>" . "<br />";

		foreach ($items as $value1 ) {
			echo "<i>" . $value1 . "</i>" . "<br />";
		}
	}

echo "<br/>";


$itemOne = array(
			'web' => array( 'facebook','google','w3zones' ),
			'marketplace' => array( 'upwork','outsouce','elance')
	);

$ad = array_keys( $itemOne );
print_r( $ad );
echo "<br />";

foreach ($itemOne as $key => $value) {
	if ( array_key_exists( 'we', $itemOne ) ) {
		echo $key . " Lol HI ";
	}else{
		echo "shit !!!!!!!!";
	}

	echo "<h2>" . $key . "</h2>";
	foreach ($value as $key => $value2 ) {
		echo $value2 . "<br />";
	}
}
echo "<br/>";

$check = count( $itemOne, COUNT_RECURSIVE );

echo $check;


echo "<br/>";

$ext_array = array( 'web' => 'Facebook', 'php' => 'Tarik', 'js' => 'Tanvir', 'CI' => 'Robin', 'DB' => 'Azad' ); 

$new = extract( $ext_array );

echo $web . "<br />";
echo $php . "<br />";
echo $js . "<br />";
echo $DB . "<br />";
echo $CI . "<br />";

echo "<br/>";


echo "<br/>";




