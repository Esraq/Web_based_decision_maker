<?php
require_once(APP_ROOT."/core/user_service.php");
session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){

header("location: /SP2");
	die();
}
else{

		editUser($searchKey);
		header("location: ?view_profile");
die();
}

?>