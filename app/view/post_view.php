<?php
include_once("navigation.php");
$post['post_title']="";
$post['user_name']="";
$post['publish_date']="";
$post['image']="";
$post['post_text']="";

$post=getPostById($searchKey);
//var_dump(getPostById($searchKey));
	if($post==NULL){
				$URL=ROOT;
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				die();				
	}

?>		<!-- second post -->
    <title><?=$temp?> : <?=$post['post_title']?></title>
		<!-- second post -->
                <h1 class="page-header">
					<?php if($logged==true):?>
				<ul class="pager">
                    <li class="previous">
					        <a href="<?= ROOT ?>/?add_<?=$view?>" class="btn btn-default">Add <?=$temp?></a>

					</li>
                    <!-- <li class="previous">
                        <a href="#" class="btn btn-default">Pictures</a>
                    </li> -->
					<?php if($post['user_id']==$_SESSION['user']['id'] || $_SESSION['user']['type']=="super"):?>
					<li class="next">
                        <a href="<?= ROOT ?>/?add_<?=$view?>=<?=$post['id']?>" class="btn btn-default">Edit This</a>
                        <a href="<?= ROOT ?>/?delete_post=<?=$post['id']?>" class="btn btn-default">Delete This</a>
                    </li>
					<?php endif;?>
                </ul>
					<?php endif;?>
				<?=$post['post_title']?>
				
                    </br>
					<small>by <b><?=$post['user_name']?></b> &nbsp;&nbsp; <font size="2">on <?=$post['publish_date']?></font>
                    </small>
                </h1>


                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" style="height: 6cm; margin-left:6cm;"src="<?=$post['image']?>" alt="">

                <hr>

                <!-- Post Content -->
				<?=$post['post_text']?>
                <hr>

                <!-- Blog Comments -->

			
<?php
	include_once("right_panel.php");
	include_once("footer.php");
?>	
				
			