<div class= "container">
	<h2><?= $title?></h2>
	
		<table class="table table-striped">
		 	<thead>
		    	<tr>
			      <th scope="col">Register</th>
			      <th class="table-sortable:alphanumeric" scope="col">Variable name</th>
			      <th scope="col">Value</th>
		    	</tr>
		  	</thead>
		  	<tbody>
		    	<tr>
		    		
			      	<td>001</td>
			      	<td>Flow Rate</td>
			      	<td><?=$rawData[1]?></td>
		    	</tr>
		    	<tr>
			      	<td>002</td>
			      	<td>Flow Rate</td>
			      	<td><?=$rawData[2]?></td>
		    	</tr>
		    	<tr>
			      	<td>003</td>
			      	<td>Energy flow Rate</td>
			      	<td><?=$rawData[3]?></td>
		    	</tr>
		    	<tr>
			      	<td>004</td>
			      	<td>Energy flow Rate</td>
			      	<td><?=$rawData[4]?></td>
		    	</tr>
		    	<tr>
			      	<td>005</td>
			      	<td>Velocity</td>
			      	<td><?=$rawData[5]?></td>
		    	</tr>
		    	<tr>
			      	<td>006</td>
			      	<td>Velocity</td>
			      	<td><?=$rawData[6]?></td>
		    	</tr>
		    	<tr>
			      	<td>007</td>
			      	<td>Fluid sound speed</td>
			      	<td><?=$rawData[7]?></td>
		    	</tr>
		    	<tr>
			      	<td>008</td>
			      	<td>Fluid sound speed</td>
			      	<td><?=$rawData[8]?></td>
		    	</tr>
		    	<tr>
			      	<td>009</td>
			      	<td>Positive accumulator</td>
			      	<td><?=$rawData[9]?></td>
		    	</tr>
		    	<tr>
			      	<td>010</td>
			      	<td>Positive accumulator</td>
			      	<td><?=$rawData[10]?></td>
		    	</tr>
		    	<tr>
			      	<td>011</td>
			      	<td>Positive decimal fraction</td>
			      	<td><?=$rawData[11]?></td>
		    	</tr>
		    	<tr>
			      	<td>012</td>
			      	<td>Positive decimal fraction</td>
			      	<td><?=$rawData[12]?></td>
		    	</tr>
		    	<tr>
			      	<td>013</td>
			      	<td>Negative accumulator</td>
			      	<td><?=$rawData[13]?></td>
		    	</tr>
		    	<tr>
			      	<td>014</td>
			      	<td>Negative accumulator</td>
			      	<td><?=$rawData[14]?></td>
		    	</tr>

			</tbody>
		</table>
		
	</div>
</div>
<?php
//print_r($rawData);
/*foreach ($rawData as $line){
	?><p><?= $line;?></p><?php
}*/


?>