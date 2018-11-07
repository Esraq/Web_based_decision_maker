<?php
require_once(APP_ROOT."/data/user_data_access.php");

	function addUser($user){
		return addUserDb($user);
	}
	
	function editUser($id){	
		return editUserDb($id);
	}
	
	function removeUser($id){
		return removeUserDb($id);
	}
	
	function checkLogin($user){	
		return checkLoginDb($user);
	}

	function getUserById($id){
		return getUserByIdDb($id);
	}
	function updatePass($id, $pass){
		return updatePassDb($id, $pass);
	}
	
	
	
	function getAllUser(){
		return getAllUserDb();
	}
	function getAllU(){
		return getAllUDb();
	}
	function getAllUserName(){
		return getAllUserNameDb();
	}

?>
