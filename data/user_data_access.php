<?php require_once(APP_ROOT."/lib/data_access_helper.php");

	function addUserDb($user){
		$query = "INSERT INTO user (firstname, lastname, email, type, password) 
		VALUES('$user[firstname]', '$user[lastname]', '$user[email]', 'admin', '$user[password]')";
		return executeQuery($query);
	}	
	function editUserDb($id){
		$query = "UPDATE user SET type='super' WHERE id=$id";
		return executeQuery($query);
	}
	function updatePassDb($id, $pass){
		$query = "UPDATE user SET password='$pass' WHERE id=$id";
		return executeQuery($query);
	}
	function removeUserDb($id){
		$query = "DELETE FROM user WHERE id=$id";
		return executeQuery($query);
	}

	function getUserByIdDb($id){
		$query = "SELECT id, firstname, lastname, email, type, password FROM user WHERE id=$id";  
		$result = executeQuery($query);	
		$person = null;
		if($result){
			$person = mysqli_fetch_assoc($result);
		}
		return $person;
	}
	function getNameByIdDb($id){
		$query = "SELECT firstname FROM user WHERE id=$id";  
		$result = executeQuery($query);	
		$person = null;
		if($result){
			$person = mysqli_fetch_assoc($result);
		}
		return $person['firstname'];
	}
	function checkLoginDb($user){
		$query = "SELECT id, firstname, lastname, email, password, type FROM user WHERE username='$user[username]' AND password='$user[password]'";  
		$result = executeQuery($query);	
		if($result){
			$person = mysqli_fetch_assoc($result);
		}
			//var_dump($result);

		return $person;
	}
	function getAllUserDb(){
		$query = "SELECT id, firstname, lastname, email FROM user WHERE type='admin'";  
		$result = executeQuery($query);	
		$personList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$personList[$i] = $row;				
			}
		}
		return $personList;
	}
	function getAllUDb(){
		$query = "SELECT id, email, password FROM user";  
		$result = executeQuery($query);	
		$personList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$personList[$i] = $row;				
			}
		}
		return $personList;
	}
	function getAllUserNameDb(){
		$query = "SELECT firstname, lastname email FROM user";  
		$result = executeQuery($query);	
		$personList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$personList[$i] = $row;				
			}
		}
		return $personList;
	}
?>
