<?php
include_once("navigation.php");
if(isset($_SESSION['logged']) && $_SESSION['logged']==true)
{
	
}
else{
				$URL=ROOT."/?user_login";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	die();
}
if(isset($_POST['opass']) && sha1($_POST['opass'])==$_SESSION['user']['password']){
	updatePass($user['id'],sha1($_POST['npass']));
				$URL=ROOT."/?view_profile";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';		die();
}
//$alluser=getAllUser();
?>		<!-- second post -->
    <title>Password</title>
                <h1 class="page-header">
					<a >Change Password</a><br/>

                </h1>

                <!-- First Blog Post -->

            <!-- <div class="row"> -->
            <!-- /.col-md-4 -->
        <!-- </div> -->
        <!-- /.row -->
		
                <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 id="as" class="panel-title">Fill the fields below</h3>
                        </div>
                        <div class="panel-body">
                            <form id="pass_form" role="form" name="add_mem" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Old Password" name="opass" type="password" autofocus required>
                                    </div>
                                     <div class="form-group">
                                        <input id="newpass" class="form-control" placeholder="New Password" name="npass" type="password" required pattern=".{6,}" title="6 characters minimum">
                                    </div>
                                   <div class="form-group">
                                        <input id="retpass" class="form-control" placeholder="Retype Password" name="rpass" type="password" required onkeyup="checkPasswordMatch()">
										<span style="color:red" id="pass_msg"></span>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" onSubmit="check()" name="mem_submit" value="Change Password" class="btn btn-lg btn-success btn-block"/>
                                </fieldset>
                            </form>
                             </div>
                        </div>
                    </div>
                 </div>
		
<script>
//$(document).ready(function () {
	function checkPasswordMatch(){
    var password = $("#newpass").val();
    var confirmPassword = $("#retpass").val();
	$("#pass_msg").html("");
    if (password == confirmPassword){
        $("#pass_msg").html("Password matched.");
	}
	}
//});
function check() {
    var password = $("#newpass").val();
    var confirmPassword = $("#retpass").val();
    if (password == confirmPassword){
		$("#signup_form").submit();
	}
	else{
		$("#signup_form").submit(false);
	}
}


</script>

                <!-- grid viwe brand name Well -->                <!-- grid viwe brand name Well -->
                <!-- grid viwe brand name Well -->                <!-- grid viwe brand name Well -->
            </div>
			<!-- left body -->
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

				
				
				
				
				
                <div class="well">
                    <h4><?=$user['name']." ".$user['last']?></h4>
                    <!-- <div class="row"> -->
                        <div class="table-responsive">
                                <table class="table">
                                <table class="table">
                                    <tbody>
                                        <tr class="success">
                                            <td><a href="<?= ROOT ?>/?add_post">Add a Post</a></td>
                                        </tr>
                                        <tr class="warning">
                                            <td><a href="<?= ROOT ?>/?add_product">Add New Phone</a></td>
                                        </tr>
									<?php if($user['type']=="super"):?>
                                        <tr class="success">
                                            <td><a href="<?= ROOT ?>/?add_member">Add Member</a></td>
                                        </tr>
                                        <tr class="warning">
                                            <td><a href="<?= ROOT ?>/?view_all">All Member</a></td>
                                        </tr>
									<?php endif;?>
                                        <tr class="success">
                                            <td><a href="<?= ROOT ?>/?user_post">My Posts</a></td>
                                        </tr>
										<tr class="warning">
                                            <td><a href="<?= ROOT ?>/?user_update">Update Password</a></td>
                                        </tr>

                                    </tbody>
                                </table>
                                </table>
                            </div>
                    <!-- </div> -->
                    <!-- /.row -->
                </div>

                <!-- Blog Categories Well -->
							<!-- /.row -->
				</div>				
			<!-- </div> -->
        <!-- /.row -->

<?php
//	include_once("right_panel.php");
	include_once("footer.php");
?>	
	