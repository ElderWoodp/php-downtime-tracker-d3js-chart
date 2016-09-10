<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
	<title>DT Trackers</title>
	
	<meta http-equiv="Content-Language" content="English" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<style>
		body {
			background: silver;
			font-family: Verdana, Tahoma, sans-serif;
		}
		a {
			color: #FF0000;
		}
		a:hover {
			text-decoration: underline;
		}
		.link {
			font-size: 200%;
		}
	</style>
	
	</head>
	
	<body>

		<div id="content">

			<div class="header">
			<h1>Downtime Tracker</h1>
			<h2>Line 1</h2>
			<h3>Downtime Hrs are stored in Database</h3>
			</div>			

			  <p class="link"><a href="index.html">Link to generate chart</a></p>

			<?php
			  $station_1 = $_POST['station_1'];
			  $station_2 = $_POST['station_2'];
			  $station_3 = $_POST['station_3'];
			  $station_4 = $_POST['station_4'];
			  $station_5 = $_POST['station_5'];
			 
			  $user = $_POST['user'];
			  $date = $_POST['date'];
			  $comment = $_POST['comment'];
			  
				$dbc = mysqli_connect('localhost', 'root', '', 'dt_form')
				or die('Error connecting to MySQL server.');
				// First query to enter form data.
				$query = "INSERT INTO downtime (station_1, station_2, station_3, station_4, " .
					"station_5, user, date, comment) " .
					"VALUES ('$station_1', '$station_2', '$station_3', '$station_4', '$station_5', " .
					"'$user', '$date', '$comment')";

				$result = mysqli_query($dbc, $query)
				or die('Error querying database.');
				
				// Second query to populate chart
				$sql2 = "SELECT station_1, station_2, station_3, station_4, station_5
				FROM downtime ORDER BY id DESC LIMIT 1";
				$result2 = mysqli_query($dbc, $sql2);				
				
				//Create an array
				$json_response = array();
				
				while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
				$temp = array();
				foreach($row as $key => $value) {
				   $temp[] = array('key' => $key, 'value' => $value); 
				   
					}
					
					$json_response = $temp;  
				}
					
					$json_data = json_encode($json_response, JSON_PRETTY_PRINT);
					file_put_contents('data.json', $json_data); 
				
				mysqli_close($dbc); 
			?>
			<br /><br />

		</div>

	<div id="footer">
	&copy; <a href="#">Your Company</a>
	</div>

	</body>
	
</html>