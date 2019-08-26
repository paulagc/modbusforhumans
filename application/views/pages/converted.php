<div id="convertedContent"class= "container mt-3">
	<div  class= "row">
		<div class="col-md-3 ">
			<div class=" card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">001-002</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Flow Rate</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[0].' m<sup>3</sup>/h'?></p>
			  	</div>
		  	</div>
		</div>
		<div class="col-md-3">
			<div class=" card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">003-004</div>
				  	<div class="card-body">
				    	<h5 class="card-title">Energy Flow Rate</h5>
				    	<hr class="my-4">
				    	<p class="card-text"><?= $convertedData[1].' GJ/h'?></p>
			  		</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class=" card text-info border-info mb-2  float-left" >
			  	<div class="col card-header bg-info text-white">005-006</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Velocity</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[2].' m/s'?></p>
			  	</div>
		  	</div>
		</div>
		<div class="col-md-3">
			<div class=" card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">007-008</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Fluid Sound Speed</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[3].' m/s'?></p>
			    </div>
			</div>
		</div>
	
	</div>
	<div class= "row">
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">009-010</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Positive accumulator</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[4]?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">011-012</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Positive decimal fraction</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[5]?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left">
			  	<div class="card-header bg-info text-white">013-014</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Negative accumulator</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[6]?></p>
			  	</div>
		  	</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">015-016</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Negative decimal fraction</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[7]?></p>
			  	</div>
			</div>
		</div>

	</div>

	<div class= "row">
		<div class="col-md-3">
			<div class="card text-info border-info mb-2 float-left" >
			  	<div class="card-header bg-info text-white">017-018</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Positive energy accumulator</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[8]?></p>
			  	</div>
		  	</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">019-020</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Positive energy decimal fraction</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[9]?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">021-022</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Negative energy accumulator</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[10]?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2 float-left" >
			  	<div class="card-header bg-info text-white">023-024</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Negative energy decimal fraction</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[11]?></p>
			  	</div>
			</div>
		</div>

	</div>
	<div class= "row">
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">025-026</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Net accumulator</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[12]?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">027-028</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Net decimal fraction</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[13]?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">029-030</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Net energy accumulator</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[14]?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2 float-left" >
			  	<div class="card-header bg-info text-white">031-032</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Net energy decimal fraction</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[15]?></p>
			  	</div>
			</div>
		</div>
	</div>

	<div class= "row ">
		<div class="col-md-3">
			<div class="card text-info border-info mb-2 float-left" >
			  	<div class="card-header bg-info text-white">033-034</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Temperature #1/inlet</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[16].' C'?></p>
			  	</div>
		  	</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2 float-left" >
			  	<div class="card-header bg-info text-white">035-036</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Temperature #2/outlet</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[17].' C'?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">037-038</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Analog input AI3</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[18]?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">039-040</div>
			  	<div class="card-body">
			    	<h5 class="card-title ">Analog input AI4</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[19]?></p>
			  	</div>
			</div>
		</div>

	</div>
	
	<div class= "row">
		<div class="col-md-3">
			<div class="card text-info border-info mb-2 float-left" >
			  	<div class="card-header bg-info text-white">041-042</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Analog input AI5</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[20]?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">043-044</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Current input at AI3</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[21].' mA'?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">045-046</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Current input at AI3</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[22].' mA'?></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-info border-info mb-2 float-left" >
			  	<div class="card-header bg-info text-white">047-048</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Current input at AI3</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[23].' mA'?></p>
			  	</div>
			</div>
		</div>
	</div>
	<div class= "row">
		<div id="lastCol" class="col-md-12">
			<div id="lastRow" class="card text-info border-info mb-2  float-left" >
			  	<div class="card-header bg-info text-white">092</div>
			  	<div class="card-body">
			    	<h5 class="card-title">Signal quality</h5>
			    	<hr class="my-4">
			    	<p class="card-text"><?= $convertedData[24]?></p>
				</div>
			</div>
		</div>

	</div>
	

</div>