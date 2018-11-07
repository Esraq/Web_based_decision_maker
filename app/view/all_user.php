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
if(!isset($_SESSION['user']) || $_SESSION['user']['type']=="admin"){
					$URL=ROOT."/?view_profile";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';		die();

}
$alluser=getAllUser();
?>		<!-- second post -->
    <title>All User</title>
                <h1 class="page-header">
					<a >All User</a><br/>

                </h1>

                <!-- First Blog Post -->

            <!-- <div class="row"> -->
            <!-- /.col-md-4 -->
        <!-- </div> -->
        <!-- /.row -->
		
		
		
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped" width="80%">
                                    <tbody>
									    <tr>
                                            <th >Name</th>
                                            <th >Email</th>
                                            <th >Action</th>
										</tr>

<?php //loop
foreach($alluser as $au){
?>
                                        <tr>
                                            <th ><?=$au['firstname']." ".$au['lastname']?></th>
                                            <th ><?=$au['email']?></th>
                                            <th >
                        <a href="<?= ROOT ?>/?user_make=<?=$au['id']?>" class="btn btn-default">Make Super Admin</a>
                        <a href="<?= ROOT ?>/?delete_user=<?=$au['id']?>" class="btn btn-default">Delete</a>
											</th>
										</tr>
<?php //end
;}

?>
									
									</tbody>
                                </table>
                        </div>


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
	