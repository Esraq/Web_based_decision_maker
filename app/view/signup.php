<?php
function generateRandomString() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 6; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}







include_once("navigation.php");
	//var_dump($_SESSION);

if(!isset($_SESSION['logged']) || $_SESSION['logged']==false)
{
				$URL=ROOT."/?user_login";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	
		
	
}
if(!isset($_SESSION['user']) || $_SESSION['user']['type']=="admin"){
					$URL=ROOT/?view_profile;
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	

}

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])){
	$x = generateRandomString();
	$new_user['firstname'] = ucwords($_POST['firstname']);
	$new_user['lastname'] =ucwords($_POST['lastname']);
	$new_user['email'] = $_POST['email'];
	$new_user['password'] = sha1($x);
	//var_dump($new_user);
	$to      = $_POST['email'];
$subject = 'the subject';
$message = 'hello,
user id : '.$_POST['email'].'
password : '.$x.'
goto '.ROOT.' to login.';

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

	addUser($new_user);
				$URL=ROOT."/?view_profile";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	die();
	
}


?>		<!-- second post -->
<title>Add Member</title>
<script>
						$(document).ready(function () {
							//alert('gg');
							$("#email_check").keyup(function(){
								$('#email_check_text').html('');
								var searchkey= $("#email_check").val();
								var expression = new RegExp(searchkey,'i');
								//alert(searchkey);
								$.getJSON('data/email_check_ajax.php?type='+searchkey,function(data){
									$.each(data,function(key,value){
									if(value.email.search(expression)!=-1){
										$('#email_check_text').html('Email already exists');
									}
								});
							});
						});
						});
						function signup_check(){
							var email_check_text=$("#email_check_text").val();
							if(email_check_text!='Email already exists'){
								$("#signup_form").submit(false);
							}
							else{
								$("#signup_form").submit();
							}
						}
					</script>
                <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 id="as" class="panel-title">Add a new member</h3>
                        </div>
                        <div class="panel-body">
                            <form id="signup_form" role="form" name="add_mem" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" name="firstname" type="text" autofocus required pattern="[A-Za-z]+"
										oninvalid="this.setCustomValidity('Please Enter alphabet only')" oninput="setCustomValidity('')">
                                    </div>
                                     <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" name="lastname" type="text" required pattern="[A-Za-z]+" oninput="setCustomValidity('')" oninvalid="setCustomValidity('Plz enter only alphabets')">
                                    </div>
                                   <div class="form-group">
                                        <input id="email_check" class="form-control" placeholder="Email" name="email" type="email" required autocomplete="off"><span style="color:red" id="email_check_text"></span>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" onSubmit="signup_check()" name="mem_submit" value="Add Member" class="btn btn-lg btn-success btn-block"/>
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
				
			