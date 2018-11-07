<?php
include_once("navigation.php");





$msg="";
$srcResult=searchProduct($searchKey);
if(!count($srcResult)>0){
	$msg="no phone found wiith '".$searchKey."'";
}
?>		<!-- second post -->
<title>Search for <?=$searchKey?></title>

                <h1 class="page-header"><small>Search for</small>
                    <?=$searchKey?>
                    
                </h1>
		<!-- second post -->
                <div class="row"><h1 class="page-header"><small><?=$msg?></small></h1>
<?php //loop
if(count($srcResult)>0){
foreach($srcResult as $res){
?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="<?= ROOT ?>/?view_product=<?=$res['id']?>"><img style="height: 150px;" src="<?=$res['image']?>" alt=""></a>
                            <div class="caption">
							<center>
                                <h4><a href="<?= ROOT ?>/?view_product=<?=$res['id']?>"><?=$res['name']?></a>
                                </h4>
                                <h6><a href="<?= ROOT ?>/?product_compare=<?=$res['id']?>">Compare</a>
                                </h6>
							</center>
                            </div>
                        </div>
                    </div>

<?php //end
;}}
?>

				</div>
				
<?php
	include_once("right_panel.php");
	include_once("footer.php");
?>	
				
			