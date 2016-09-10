<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title>DT Tracker</title>
	<meta http-equiv="Content-Language" content="English" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="#" media="screen" />
	<link rel="stylesheet" type="text/css" href="src/style.css"/>

	<style>
		body {
			background: silver;
			font-family: Verdana, Tahoma, sans-serif;
		}
		input, textarea { 
			padding: 9px; 
			border: solid 1px #E5E5E5; 
			outline: 0; 
			font: normal 13px/100% Verdana, Tahoma, sans-serif; 
			width: 200px; 
			background: #FFFFFF; 
		} 
		input:hover, textarea:hover, 
		input:focus, textarea:focus { 
			border-color: #C9C9C9; 
		} 
		input, textarea { 
			box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
			-moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
			-webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
		}
		input, textarea { 
			background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF)); 
			background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px); 
		}
		input:hover, textarea:hover, 
		input:focus, textarea:focus { 
			-webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px; 
		}
		.submit input { 
			-webkit-border-radius: 5px; 
			-moz-border-radius: 5px; 
		}
		.form label { 
			margin-left: 10px; 
			color: #3c3838; 
		}
	</style>
	</head>
	
	<body>

	<div id="content">

		<div class="header">
			<h1>Downtime Hrs Tracker Form</h1>
		</div>
			
		<h2>Line 1</h2>
	  
	  <p>Complete form and submit:</p>
	  <form class="form" method="post" action="chart.php">
		<label for="station_1">Station_1</label>
		<input type="number"step="0.01" name="station_1" min="0" max="16.5" /><br />
		<label for="station_2">Station_2</label>
		<input type="number"step="0.01" name="station_2" min="0" max="16.5" /><br />
		<label for="station_3">Station_3</label>
		<input type="number"step="0.01" name="station_3" min="0" max="16.5" /><br />
		<label for="station_4">Station_4</label>
		<input type="number"step="0.01" name="station_4" min="0" max="16.5" /><br />
		<label for="station_5">Station_5</label>
		<input type="number"step="0.01" name="station_5" min="0" max="16.5" /><br />
		<br />
		<br />
		<label for="user">User</label>
		<input type="text" name="user" /><br />
		<label for="date">Date</label>
		<input input type="text" name="date" value="<?php echo date('F j, Y, G:i');?>" readonly /><br />
		
		<label for="comment"></label>
		<textarea name="comment" placeholder="Enter Comments here..."></textarea><br /><br />
		
		<label for="submit"></label>
		<input style="width:220px;" type="submit" value="submit" name="submit" class="submit" />
	  </form>
	  <p id="demo"></p>

		<script>
		document.getElementById("demo").innerHTML = Date();
		</script>	
			
	</div>

	<div id="footer">
	&copy; <a href="#">Your Company</a>
	</div><br />

	</body>
	
</html>