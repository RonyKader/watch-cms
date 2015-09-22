<?php 
	include ( 'core/init.php' );
   	include ( 'template/header.php' );
?>
<section class="condition-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php 
				$errors = array();
					if ( empty($_POST) === false ) {
						 $username = $_POST['username'];
						 $password = $_POST['password'];

						 echo $username;

						 if ( empty( $username ) === true || empty( $password ) === true ) {
						 	$errors[] = "Please Enter your Username and Password";
						 }elseif ( user_exists( $username ) === false ) {						 	
						 	$errors[] = "We can\'t find this Username. Are you registerd member ?";
						 	
						 }elseif ( active ( $username ) === false ) {
						 	
						 	$errors[] = "Your Accout till now isn\'t active";
						 }


					}

						 print_r( $errors );
				 ?>
			</div>
		</div>
	</div>
</section>


<?php
   include ( 'template/footer.php' );
 ?>