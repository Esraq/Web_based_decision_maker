<?php	
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "sp2";
	
	function executeQuery($query){
		global $serverName, $userName, $password, $dbName;
		$result = false;
		$connection = mysqli_connect($serverName, $userName, $password, $dbName);		
		if($connection){
			$result = mysqli_query($connection, $query);
			mysqli_close($connection);
		}
		return $result;
	}
	
?>