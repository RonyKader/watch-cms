<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
	<div class="admin-content">
		<h2>Create a new Subject</h2>	
			<form action="subject_do.php" method="post">
				<div class="form-group">
				    <label for="exampleInputPassword1">Subject Name</label>
				    <input type="text" name="menu_name" class="form-control" id="menu_name" placeholder="Subject name">
				</div>

				<div class="form-group">
				<label for="exampleInputPassword1">Position</label>
				    <select class="form-control">
				    <?php 
				    	$count_subpos = find_all_mainnav();
				    	$sub_pos = mysqli_num_rows( $count_subpos );
				    	for ($i=1; $i <= ( $sub_pos +1 ); $i++) { 
				      echo "<option value=\"{$i}\">{$i}</option>";				    		
				    	}
				     ?>
				    </select>
				</div>

				<div class="form-group">
				    <label for="exampleInputPassword1">Visible </label><br />
				    <label class="radio-inline">
				      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="1"> Yes
				    </label>
				    <label class="radio-inline">
				      <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0"> No
				    </label>
				</div>

				<div class="form-group">
				    <input type="submit" class="btn btn-default" name="subject_form" id="subject_form" value="Create a subject">
				</div>
			</form>
			<p><a href="admin.php">Cencel</a></p>
	</div>
</div>