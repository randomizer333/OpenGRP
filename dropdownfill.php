<input name="enota[]"
						list="enote"				
						class="enota" >
            
							<datalist id="enote">
								<?php //preberi obstoječe enote
									$q_enote="SELECT enota FROM cookbook.sestavina GROUP BY enota;";
									$enote_result=mysqli_query($con,$q_enote);
									while($enote = mysqli_fetch_array($enote_result)){
										echo "<option value=$enote[0]>";
									}	
								?>			
							</datalist>
