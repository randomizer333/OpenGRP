<input name="input[]" list="options" class="in.field" >      
	<datalist id="field">
	<?php 			//get existing values from table
		function ddfill ( $column, $table ){
		$querry = "SELECT $column FROM $table GROUP BY $column ;";
		$querry_result = mysqli_query ( $connection, $querry );
		while ( $field = mysqli_fetch_array ( $querry_result )){
			echo "<option value=$field[0]>";
			}	
	?>			
	</datalist>
