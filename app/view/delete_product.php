<?php
require_once(APP_ROOT."/core/product_service.php");
session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){

header("location: /SP2");
	die();
}
else{

		deleteProduct($searchKey);
		header("location: ?view_profile");die();

}

?>