<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
	<div class="admin-nav">
	<h2><a href="admin.php">Admin Menu</a></h2>
		<nav>
			<ul class="list-unstyled">
				<?php 
				if ( isset( $_GET[ 'subject' ] )) {
					
					$get_subject_id = $_GET[ 'subject' ];
					$get_page_id = NULL;
				}
				elseif ( isset( $_GET[ 'page' ] )) {
					$get_page_id = $_GET[ 'page' ];
					$get_subject_id = NULL;
				}
				else{
					$get_subject_id = NULL;
					$get_page_id = NULL;

				}
					$view_result = find_all_mainnav();
					while ( $row = mysqli_fetch_assoc( $view_result ) ) {
				?>
						<li>
						<a href="admin.php?subject=<?php echo urlencode( $row[ 'id' ] ); ?>"><?php echo $row[ 'menu_name' ]; ?></a>
							

							<?php 
							$result_page = find_pagefor_mainnav( $row[ 'id' ] );
							?>	
							<ul class="list-unstyled">
							<?php
							while ( $page_row = mysqli_fetch_assoc( $result_page )) {
							?>
								<li class="<?php if( $get_page_id == $page_row[ 'id' ] ) { echo "page-selected";} ?>">
									<span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>
									<a href="admin.php?page=<?php echo urlencode( $page_row[ 'id' ] ); ?>"><?php echo $page_row[ 'menu_name' ]; ?></a>
								</li>

								<?php
								
							}
							mysqli_free_result( $result_page );

							 ?>
								
							</ul>
						</li>
						<?php

					}
						mysqli_free_result( $view_result );
					
				 ?>
						<li><a href="create-subject.php">Create New Subject</a></li>
				<!-- <li><a href="#">MANAGE CONTENT</a>
					<ul class="list-unstyled">
						<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> <a href="#">Navigation</a></li>
						<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> <a href="#">Subject CRUD</a></li>
						<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> <a href="#">Page CRUD</a></li>
					</ul>
				</li>
				<li><a href="#">MANAGE ADMIN</a>
					<ul class="list-unstyled">
						<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> <a href="#">Admin CRUD</a></li>
					</ul>
				</li>
				<li><a href="logout.php">LOGOUT</a></li> -->
			</ul>
		</nav>
	</div>
</div>