<?php
include_once("navigation.php");

if($view=='news'){
$posts=getAllPosts('news');}
else{
$posts=getAllPosts('preview');
}
?>		<!-- second post -->
    <title><?=$temp?></title>
                <h1 class="page-header">
					<a href="<?= ROOT ?>/?product_<?=$view?>"><?=$temp?></a>
				<?php if($logged==true):?>
					<small class="pull-right"><a href="<?= ROOT ?>/?add_<?=$view?>">Add <?=$temp?></a></small>
				<?php endif;?>
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
                <a href="<?= ROOT ?>/?view_<?=$view?>=<?=$n['id']?>"  style="color:black; text-decoration:none;"><h3><?=$n['post_title']?></h3>
                <p><?=$n['part']?>...</p>
                </a> <!-- <a class="btn btn-primary btn-sm" href="#">Call to Action!</a> -->
            </div>

            <!-- Rating anc views -->
            </div>
            </div>
<?php //end
;}

?>

				
<?php
	include_once("right_panel.php");
	include_once("footer.php");
?>	
	