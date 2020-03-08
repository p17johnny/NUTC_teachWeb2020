<?php
	function filterTable($query)
	{
		$dbType   = 'MySQL';
		$host     = 'localhost';
		$dbName   = 'smart';
		$userName = 'user';
		$pwd      = 'abc123';
		
		$dbh = mysqli_connect($host, $userName, $pwd, $dbName) or die("Error " . mysqli_error($dbh));
		//$dbh = mysqli_connect($host, $userName, $pwd, $dbName);
	    mysqli_query($dbh, "SET NAMES 'utf8'");
	    $filter_Result = mysqli_query($dbh, $query);
	    return $filter_Result;
	}
	
?>