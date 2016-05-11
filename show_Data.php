<!DOCTYPE html >
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	
	<title>Report Disease Outbreak</title>
	
	<link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<link rel='stylesheet' href="custom.css">
  </head>

  <body onload="load()">
	<div class="container">
		<header class="row">
			</header>
			<div class="row"> <!-- navbar -->
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"> </span>
								<span class="icon-bar"> </span>
								<span class="icon-bar"> </span>
							</button>
							<a class="navbar-brand" href="#">Living Suitability Model</a>
						</div>
						
						<div>
						
						<div class="collapse navbar-collapse" id="navbar">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.html">Home</a></li>
								
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Retreival
										<span class="carat"> </span></a>
										<ul class="dropdown-menu">
											<li><a href="show_Data.php">Show Suitability Data</a></li>
											<li><a href="gelocation.html">Mapping</a></li>
											
										</ul>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Maryland
										<span class="carat"> </span></a>
										<ul class="dropdown-menu">
											<li><a href="SlideShow.html">Gallery</a></li>																																	
																				
										</ul>
								</li>								
								<li><a href="contact.html">Contact</a></li>
							</ul>
							</div>
						</div>
					</div><!-- end container-fluid -->
				</nav>	
		</div>
		<div class="jumbotron">		

			<div id ="content">
				<h3 align="center">CITIES WITH ALL FOUR DATA SOURCES</h3>
				
				<div id="showDiv" class="table-responsive">
					<?php
						require_once("db.php");
						
						$sql = "select * from table4 limit 15";
						$result = mysqli_query($con,$sql);
						
						if (!$result) {
							die("Invalid query: " . mysql_error());
						}
					?>
					
					<table class="table table-hover">
						<thead>
							<tr class="active">
								<th>CITY</th>
								<th>COUNTY</th>
								<th>STATE</th>
								<th>POP_2010</th>								
								<th>HOMES SOLD PER SQFT(MEDIAN)</th>
								<th>2 BEDROOM RENT (MEDIAN)</th>
								<th>COHOT DEFAULT RATE</th>
								<th>CRIME RATES</th>
								<th>LATITUDE</th>
								<th>LONGITUDE</th>							
							</tr>
						</thead>
						<tbody>
						<?php
							$rowNum=0;
							
							while($row = mysqli_fetch_array($result)){
								if ($rowNum % 4 == 0){
									$contextClass= "success";
								}else if ($rowNum % 3 == 0){
									$contextClass= "info";
								}else if ($rowNum % 2 == 0){
									$contextClass= "warning";
								}else{
									$contextClass= "danger";
								}
								
								echo"<tr class=" . $contextClass .">";
								echo "<td>" . $row["COL 3"]. "</td>";
								echo "<td>" . $row["COL 4"]. "</td>";
								echo "<td>" . $row["COL 5"]. "</td>";
								echo "<td>" . $row["COL 2"]. "</td>";
								echo "<td>" . $row["COL 6"]. "</td>";
								echo "<td>" . $row["COL 7"]. "</td>";
								echo "<td>" . $row["COL 8"]. "</td>";
								echo "<td>" . $row["COL 9"]. "</td>";	
								echo "<td>" . $row["COL 10"]. "</td>";							
								echo "<td>" . $row["COL 11"]. "</td>";																				
								echo "</tr>";
								
								$rowNum += 1;
							}
						?>
						</tbody>
						
					</table>
			</div> <!--content div-->		

			<div id ="content">
				<h3 align="center">STUDENT DEBT STATISTICS</h3>
				
				<div id="showDiv" class="table-responsive" align="center">
					<?php
						require_once("db.php");
						
						$sql = "select * from table5 limit 105";
						$result = mysqli_query($con,$sql);
						
						if (!$result) {
							die("Invalid query: " . mysql_error());
						}
					?>
					
					<table class="table table-hover">
						<thead>
							<tr class="active">
								<th>INSTITUTION NAME</th>
								<th>CITY</th>
								<th>STATE</th>
								<th>ENTERED REPAYMENT STATUS</th>
								<th># OF FAILED PAYMENT</th>
								<th>COHOR DEFAULT RATE</th>
								<th>TOTAL PRINCIPLE OUTSTANDING</th>						
							</tr>
						</thead>
						<tbody>
						<?php
							$rowNum=0;
							
							while($row = mysqli_fetch_array($result)){
								if ($rowNum % 4 == 0){
									$contextClass= "success";
								}else if ($rowNum % 3 == 0){
									$contextClass= "info";
								}else if ($rowNum % 2 == 0){
									$contextClass= "warning";
								}else{
									$contextClass= "danger";
								}
								
								echo"<tr class=" . $contextClass .">";
								echo "<td>" . $row["COL 3"]. "</td>";
								echo "<td>" . $row["COL 5"]. "</td>";
								echo "<td>" . $row["COL 6"]. "</td>";
								echo "<td>" . $row["COL 8"]. "</td>";
								echo "<td>" . $row["COL 9"]. "</td>";
								echo "<td>" . $row["COL 10"]. "</td>";
								echo "<td>" . $row["COL 12"]. "</td>";
								echo "</tr>";
								
								$rowNum += 1;
							}
						?>
						</tbody>
					</table>
				</div> <!--content div-->	

			<div id ="content">
				<h3 align="center">CRIME RATE STATISTICS</h3>
				
				<div id="showDiv" class="table-responsive">
					<?php
						require_once("db.php");
						
						$sql = "select * from table3 limit 105";
						$result = mysqli_query($con,$sql);
						
						if (!$result) {
							die("Invalid query: " . mysql_error());
						}
					?>
					
					<table class="table table-hover">
						<thead>
							<tr class="active">
								<th>CITY</th>
								<th>STATE</th>
								<th>POPULATION</th>
								<th>VIOLENT CRIMES</th>
								<th>MURDER AND NONELIGENT MANSLAUGHTER</th>
								<th>RAPE</th>
								<th>ROBBERY</th>
								<th>AGGRAVATED ASSAULT</th>						
							</tr>
						</thead>
						<tbody>
						<?php
							$rowNum=0;
							
							while($row = mysqli_fetch_array($result)){
								if ($rowNum % 4 == 0){
									$contextClass= "success";
								}else if ($rowNum % 3 == 0){
									$contextClass= "info";
								}else if ($rowNum % 2 == 0){
									$contextClass= "warning";
								}else{
									$contextClass= "danger";
								}
								
								echo"<tr class=" . $contextClass .">";
								echo "<td>" . $row["COL 1"]. "</td>";
								echo "<td>" . $row["COL 2"]. "</td>";
								echo "<td>" . $row["COL 3"]. "</td>";
								echo "<td>" . $row["COL 4"]. "</td>";
								echo "<td>" . $row["COL 5"]. "</td>";
								echo "<td>" . $row["COL 7"]. "</td>";
								echo "<td>" . $row["COL 8"]. "</td>";
								echo "<td>" . $row["COL 9"]. "</td>";
								echo "</tr>";
								
								$rowNum += 1;
							}
						?>
						</tbody>
					</table>
				</div> <!--content div-->			

			<div id ="content">
				<h3 align="center">TWO BEDROOM RENTAL MEDIAN</h3>
				
				<div id="showDiv" class="table-responsive">
					<?php
						require_once("db.php");
						
						$sql = "select * from table6 limit 105";
						$result = mysqli_query($con,$sql);
						
						if (!$result) {
							die("Invalid query: " . mysql_error());
						}
					?>
					
					<table class="table table-hover">
						<thead>
							<tr class="active">
								<th>CITY</th>
								<th>STATE</th>
								<th>METRO</th>
								<th>COUNTY</th>
								<th>SIZE RANK</th>
								<th>AVERAGE RENTAL 2015 IN DOLLARS</th>						
							</tr>
						</thead>
						<tbody>
						<?php
							$rowNum=0;
							
							while($row = mysqli_fetch_array($result)){
								if ($rowNum % 4 == 0){
									$contextClass= "success";
								}else if ($rowNum % 3 == 0){
									$contextClass= "info";
								}else if ($rowNum % 2 == 0){
									$contextClass= "warning";
								}else{
									$contextClass= "danger";
								}
								
								echo"<tr class=" . $contextClass .">";
								echo "<td>" . $row["COL 1"]. "</td>";
								echo "<td>" . $row["COL 2"]. "</td>";
								echo "<td>" . $row["COL 3"]. "</td>";
								echo "<td>" . $row["COL 4"]. "</td>";
								echo "<td>" . $row["COL 5"]. "</td>";
								echo "<td>" . $row["COL 15"]. "</td>";
								echo "</tr>";
								
								$rowNum += 1;
							}
						?>
						</tbody>
					</table>
				</div> <!--content div-->				

			<div id ="content">
				<h3 align="center">HOME COST PER SQFT MEDIAN</h3>
				
				<div id="showDiv" class="table-responsive">
					<?php
						require_once("db.php");
						
						$sql = "select * from table7 limit 105";
						$result = mysqli_query($con,$sql);
						
						if (!$result) {
							die("Invalid query: " . mysql_error());
						}
					?>
					
					<table class="table table-hover">
						<thead>
							<tr class="active">
								<th>CITY</th>
								<th>STATE</th>
								<th>METRO</th>
								<th>COUNTY</th>
								<th>SIZE RANK</th>
								<th>AVERAGE 2015 COST IN DOLLARS</th>						
							</tr>
						</thead>
						<tbody>
						<?php
							$rowNum=0;
							
							while($row = mysqli_fetch_array($result)){
								if ($rowNum % 4 == 0){
									$contextClass= "success";
								}else if ($rowNum % 3 == 0){
									$contextClass= "info";
								}else if ($rowNum % 2 == 0){
									$contextClass= "warning";
								}else{
									$contextClass= "danger";
								}
								
								echo"<tr class=" . $contextClass .">";
								echo "<td>" . $row["COL 2"]. "</td>";
								echo "<td>" . $row["COL 3"]. "</td>";
								echo "<td>" . $row["COL 4"]. "</td>";
								echo "<td>" . $row["COL 5"]. "</td>";
								echo "<td>" . $row["COL 6"]. "</td>";
								echo "<td>" . $row["COL 19"]. "</td>";
								echo "</tr>";
								
								$rowNum += 1;
							}
						?>
						</tbody>
					</table>
				</div> <!--content div-->	
				
			</div>
			
		</div>
	</div>

		<footer>
			<p class="text-right">All contents &amp; All rights reserved. &copy; Mohammed Kemal</p>
		</footer>
</div>
</body>
	
</html>