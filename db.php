<?php

	$hostname = "129.2.24.54";
	$username = "mkemal1";
	$passwd = "mpsmk";
	$dbname = "mkemal1";
	
	$con = mysqli_connect($hostname, $username, $passwd,$dbname);
	if(!$con)
			die("Database connection error" . mysql_error());
	
	$db = mysqli_select_db($con, $dbname);
	if(!$db)
			die("Database selection failed" . mysql_error());

?>