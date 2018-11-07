<script>     
	 function setCookie(key, value) {
            var expires = new Date();
            expires.setTime(expires.getTime() + (365 * 24 * 60 * 60 * 1000));
            document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
        }

        function getCookie(key) {
            var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
            return keyValue ? keyValue[2] : null;
        }
</script>

<?php

$errmsg='';
include_once("navigation.php");





if(isset($_SESSION['logged']) && $_SESSION['logged']==true)
{
			$logged = true;
            $URL=ROOT;
			echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
			echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	
	
}

if(isset($_POST['email']) && isset($_POST['password']))
{
	$email = $_POST['email'];
	$pass = sha1($_POST['password']);
	$data = getAllU();
	foreach($data as $u)
	{
		if(($email == $u['email']) && ($pass == $u['password']))
		{
			$_SESSION['user'] = getUserById($u['id']);
			$_SESSION['logged'] = true;
			$logged = true;
			//var_dump($_REQUEST);
			
			if(isset($_REQUEST['remember'])){
			//var_dump($_SESSION['user']['id']);
				//setcookie("user_id", (int)$_SESSION['user']['id'], time() + (86400*30), "/");
				echo "<script>setCookie('user_id', '".$_SESSION['user']['id']."');</script>";
			}
				$URL=ROOT."/?view_profile";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	die();
		}
	}
	if(!$logged){
		$errmsg = "Login Unsuccesful";
	}
	
}
/*
$active=null;
  if(isset($_SESSION['logged'])){
    header("Location: ?product_home");
    die();
  }

$error="";
$user['name']="";
if(isset($_POST['username']) && isset($_POST['password'])){
	$user['username']=$_POST['username'];
	$user['password']=$_POST['password'];
	//echo $user['password'];
	$active=checkLogin($user);
	if($active){

		$__SESSION['logged']=true;
		$__SESSION['user']['id']=$active['id'];
		$__SESSION['user']['name']=$active['name'];
		$__SESSION['user']['username']=$active['username'];
		$__SESSION['user']['email']=$active['email'];
		$__SESSION['user']['type']=$active['type'];
$URL="http://localhost/SP2/";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	
}
	else{$error="Invalid user name or password";}
	//var_dump($active);

//var_dump($GLOBALS);
}

*/
?>		<!-- second post -->
<title>Login</title>
                <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
							<?=$errmsg?>
                        </div>
                        <div class="panel-body">
                            <form role="form" name="login" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="user@example.com" name="email" type="email" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                    </div>
						
								<!--	<div class="checkbox">
										<label>
											<input name="remember" type="checkbox" value="Remember Me">Remember Me
										</label>
									</div>	-->
                                    <input type="submit" name="log_submit" class="btn btn-lg btn-success btn-block" value="LOGIN">
                                </fieldset>
                            </form>
                             </div>
                        </div>
                    </div>
                 </div>
				
<?php
	include_once("right_panel.php");
	include_once("footer.php");
?>	
				
			