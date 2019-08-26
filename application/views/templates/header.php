<html>
	<head>

		<title>Modbusforhumans</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/styles.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="<?= base_url() ?>js/bootstrap.js"></script>
		
		
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow">
		   	<div class="container">
		        <div class="navbar-header">
		        	<a class="navbar-brand" href="<?php echo base_url(); ?>">ModbusForHumans</a>
		        </div>
		        <div id="navbar">
		        	<ul class="nav navbar-nav mr-auto ">
		            	<li  <?php if(strcmp($title, "raw" )  == 0){ 
		            				echo 'class = "active nav-item"';
			            		}else{
			            			echo 'class = "nav-item"';
			            		}?>>
		            		<a class="nav-link" href="<?php echo base_url(); ?>raw">Raw Data</a>
		            	</li>
		            	<li <?php if(strcmp($title, "converted" )  == 0){ 
		            				echo 'class = "active nav-item"';
			            		}else{
			            			echo 'class = "nav-item"';
			            		}?>>
		            		<a class="nav-link" href="<?php echo base_url(); ?>converted">Converted Data</a>
		            	</li>
		          	</ul>
		          	
		        </div>
		   	</div>
		</nav>
	
