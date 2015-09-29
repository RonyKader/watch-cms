<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
	<div class="admin-content">
		<h2>ADMIN CONTENT AREA</h2>	


		<?php 

		if ( $get_subject_id ) {
			$show_subject = select_subject_byid( $get_subject_id );
			echo "<h3>" . $show_subject[ 'menu_name' ] . "</h3>";

		}elseif ( $get_page_id ) {
			$show_page = select_page_byid( $get_page_id );
			?>
			<h3><?php echo  $show_page[ 'menu_name' ]; ?></h3>
			<p><?php echo $show_page[ 'content' ]; ?></p>
			<?php
		}else{
			echo "Please Select a Page or Subject";
		}

		 ?>
	</div>
</div>