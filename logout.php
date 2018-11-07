<script>
var delete_cookie = function(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};
		</script>
<?php
		session_start();
			$_SESSION['logged'] = false;
			$logged = false;
		//setcookie("user_id", $_SESSION['user']['id'], time() - (86400*30), "/");
		
	//echo "<script>delete_cookie('user_id');</script>";
		session_unset();
		session_destroy();
		
		
		header ("location: ../SP2/?product_home");
			die;


?>
