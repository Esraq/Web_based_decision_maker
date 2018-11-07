<?php
include_once("navigation.php");
if(isset($_SESSION['logged']) && $_SESSION['logged']==true)
{	
}
else{
				$URL=ROOT."/?user_login";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	
}

?>		<!-- second post -->
    <title><?=$user['name']?></title>
                <h1 class="page-header">
					<a >Profile</a>
                </h1>

                <!-- First Blog Post -->

                        <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th ><strong>First Name : </strong></th>
                                            <th ><?=$user['name']?></th>
										</tr>
                                        <tr>
                                            <th ><strong>Last Name : </strong></th>
                                            <th ><?=$user['last']?></th>
										</tr>
                                        <tr>
                                            <th ><strong>EMAIL : </strong></th>
                                            <th ><?=$user['email']?></th>
										</tr>
                                        <tr>
                                            <th ><strong>MEMBER TYPE : </strong></th>
                                            <th ><?php if($user['type']=="super"){echo "Super Admin";}else{echo "Admin";}?></th>
										</tr>
									</tbody>
								</table>
						</div>
            <!-- /.col-md-4 -->
        <!-- </div> -->
        <!-- /.row -->







		</div>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- grid viwe brand name Well -->                <!-- grid viwe brand name Well -->
                <!-- grid viwe brand name Well -->                <!-- grid viwe brand name Well -->
				
				
				
				
				
				
                <div class="well">
                    <h4><?=$user['name']." ".$user['last']?></h4>
                    <!-- <div class="row"> -->
                        <div class="table-responsive">
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
	