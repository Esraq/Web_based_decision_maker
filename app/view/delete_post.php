<?php
require_once(APP_ROOT."/core/post_service.php");

$post=getPostById($searchKey);
//var_dump(getPostById($searchKey));
	if($post==NULL){
		header("location: /SP2");	
		die();				
	}


session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){

	header("location: /SP2");
	die();
}
else if($post['user_id']==$_SESSION['user']['id'] || $_SESSION['user']['type']=="super"){

		deletePost($searchKey);

}
		header("location: ?view_profile");
		die();
?>