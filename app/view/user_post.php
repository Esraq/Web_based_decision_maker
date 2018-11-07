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

$posts=getMyPosts($user['id']);
?>		<!-- second post -->
    <title><?=$user['name']?></title>
                <h1 class="page-header">
					<a >My Posts</a><br/>
					<small><?php if($posts==NULL){ echo "You did not post ant thing.";}?></small>

                </h1>

                <!-- First Blog Post -->

            <!-- <div class="row"> -->
            <!-- /.col-md-4 -->
        <!-- </div> -->
        <!-- /.row -->
<?php //loop
foreach($posts as $n){
?>
            <div class="well well-lg">
            <div class="row">
            <div class="col-md-3">
                <img class="img-responsive img-rounded" style="height: 150px;" src="<?=$n['image']?>" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-9">
                <a href="<?= ROOT ?>/?view_<?=$n['post_type']?>=<?=$n['id']?>"  style="color:black; text-decoration:none;"><h3><?=$n['post_title']?></h3>
                <p><?=$n['part']?>...</p>
                </a> <!-- <a class="btn btn-primary btn-sm" href="#">Call to Action!</a> -->
            </div>

            <!-- Rating anc views -->
            </div>
            </div>
<?php //end
;}

?>
            </div>
			<!-- left body -->
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- grid viwe brand name Well -->                <!-- grid viwe brand name Well -->
                <!-- grid viwe brand name Well -->                <!-- grid viwe brand name Well -->
				
				
				
				
				
				
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
	