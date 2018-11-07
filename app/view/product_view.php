
<?php
include_once("navigation.php");


$product=getProductById($searchKey,"");
	if($product==NULL){
				$URL=ROOT;
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	
	}
?>

<script>
						$(document).ready(function () {
							var is_rated = getCookie("<?php echo $product['id'];?>");
							if(is_rated=="<?php echo $product['name'];?>"){
								$('#rater').hide();
							}
						});
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

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['rate_submit'])){
	echo "test";
	$rate['design']=$_POST['designr'];
	$rate['batt']=$_POST['battaryr'];
	$rate['cam']=$_POST['fraturer'];
	$rate['perform']=$_POST['preformr'];
	$rate['rate']=$_POST['allr'];
	echo "<script>setCookie('".$product['id']."', '".$product['name']."');</script>";
	setNewRate($product['id'],$rate);
}
?>		<!-- second post -->
<title><?=$product['name']?></title>

                <h1 class="page-header"><?=$product['name']?>
                </h1>
		
		
            <div class="well well-lg">
            <div class="row">
            <div class="col-md-5">
			
					<!-- image -->

                <img class="img-responsive img-rounded" style="height: 280px;" src="<?=$product['image']?>" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-7">
                <!-- <a class="btn btn-primary btn-sm" href="#">Call to Action!</a> -->
				<h4>User Rating</h4>
				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?=$product['design']*10?>%"> Design <?=(int)($product['design']*10)?>% </div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?=$product['batt']*10?>%"> Battary <?=(int)($product['batt']*10)?>%</div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?=$product['perform']*10?>%"> Performance <?=(int)($product['perform']*10)?>% </div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?=$product['cam']*10?>%"> Features <?=(int)($product['cam']*10)?>% </div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?=$product['rate']*10?>%"> User Satisfaction <?=(int)($product['rate']*10)?>% </div>
				</div>
			</div>

            <!-- Rating anc views -->
                <ul class="pager">
                    <li class="next">
                        <a href="<?= ROOT ?>/?product_compare=<?=$product['id']?>" class="btn btn-default">Compare</a>
                    </li>
                    <!-- <li class="previous">
                        <a href="#" class="btn btn-default">Pictures</a>
                    </li> -->
					<?php if($logged==true):?>
					<li class="previous">
                        <a href="<?= ROOT ?>/?product_update=<?=$product['id']?>" class="btn btn-default">Update</a>
                        <a href="<?= ROOT ?>/?product_delete=<?=$product['id']?>" class="btn btn-default">Delete</a>
                    </li>
					<?php endif;?>
                </ul>

            </div>
            </div>
            <!-- /.col-md-4 -->
        <!-- </div> -->
        <!-- /.row -->

       <!--  <hr> -->

                <!-- Third Blog Post -->
			
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th ><strong>Network</strong></th>
                                            <th >Technologies</th>
                                            <td width="50%">
											<?php 
											if($product['g2']==1)
											{echo "2G";}
										 if($product['g3']==1)
										{echo ", 3G";}
									 if($product['g4']==1)
									{echo ", 4G";}
										?>
											</td>
                                        </tr>

										
                                        <tr>
                                            <th  rowspan="2">Body</th>
                                            <th >Dimension</th>
                                            <td ><?=$product['dim']?></td>
                                        </tr>
										
										<tr class="">
                                            <th>Weight</th>
                                            <td><?=$product['weight']." "?> g</td>
                                        </tr>
										
										
                                        <tr>
                                            <th  rowspan="4">Display</th>
                                            <th >Type</th>
                                            <td ><?=$product['disp_type']?> </td>
                                        </tr>
										
										<tr class="">
                                            <th>Size</th>
                                            <td><?=$product['size']." "?> inches </td>
                                        </tr>	
										
										<tr class="">
                                            <th>Resolution</th>
											<td> <?=$product['resolution']?> p </td>

                                        </tr>
										<tr class="">
                                            <th>Protection</th>
                                            <td><?=$product['protection']?></td>
                                        </tr>
										<tr>
                                            <th rowspan="3">Platform</th>
                                            <th >OS</th>
                                            <td ><?=$product['OS']?></td>
                                        </tr>
										<tr>
                                            <th >CPU</th>
                                            <td ><?=$product['CPU']?></td>
                                        </tr>
										<tr>
                                            <th >GPU</th>
                                            <td ><?=$product['GPU']?></td>
                                        </tr>
                                        <tr>
                                            <th  rowspan="2">Memory</th>
                                            <th >ROM</th>
											
                                            <td><?=$product['rom']?> GB</td>
											
                                        </tr>
                                        <tr>
                                            <th >RAM</th>
                                            <td><?=$product['ram']?> GB</td>
											
                                        </tr>
                                        <tr>
                                            <th  rowspan="2">Camera</th>
                                            <th >Primary</th>
                                            <td ><?=$product['front']?>MP</td>
                                        </tr>
										
										<tr class="">
                                            <th>Secondary</th>
                                            <td><?=$product['back']?>MP</td>
                                        </tr>	
										
                                        <tr>
                                            <th  rowspan="2">Battary</th>
                                            <th >Capacity</th>
											<td> <?=$product['battary']?> mAh  </td>
                                        </tr>
										
										<tr class="">
                                            <th>Type</th>
                                            <td><?=$product['b_type']?> </td>
                                        </tr>	
										
										
                                        <tr>
                                            <th colspan="2">Price</th>
											
                                            <td><?=$product['price']?> BDT</td>
											
                                        </tr>
										
										
										</tbody>
                                </table>
                        </div>
			
			


                <hr>
		<div id="rater" class="sticker pull-right">
		<div class="well" style="background-color:green; color:white;">
					<h4>Rate This Phone</h4>
			<form role="form" method="post" name="rate" onsubmit="return rateForm()">
				Design : <span id="drange">1</span><input type="range" min="1" max="10" value="1" step="1" name="designr" onchange="showDValue(this.value)" />
				Performance : <span id="prange">1</span><input type="range" min="1" max="10" value="1" step="1" name="preformr" onchange="showPValue(this.value)" />
				Battary : <span id="brange">1</span><input type="range" min="1" max="10" value="1" step="1" name="battaryr" onchange="showBValue(this.value)" />
				Features : <span id="frange">1</span><input type="range" min="1" max="10" value="1" step="1" name="fraturer" onchange="showFValue(this.value)" />
				Over All : <span id="orange">1</span><input type="range" min="1" max="10" value="1" step="1" name="allr" onchange="showOValue(this.value)" />
					<input class="btn btn-default" type="submit" value="Rate" id="rate-button" name="rate_submit"/>
			</form>
		
        </div>				
        </div>				



<script type="text/javascript">
function showDValue(newValue)
{
    document.getElementById("drange").innerHTML=newValue/2;
}
function showPValue(newValue)
{
    document.getElementById("prange").innerHTML=newValue/2;
}
function showBValue(newValue)
{
    document.getElementById("brange").innerHTML=newValue/2;
}
function showFValue(newValue)
{
    document.getElementById("frange").innerHTML=newValue/2;
}
function showOValue(newValue)
{
    document.getElementById("orange").innerHTML=newValue/2;
}
function rateForm()
{
	document.forms["rate"].submit();
}

</script>
				
<?php
	include_once("right_panel.php");
	include_once("footer.php");
?>	
				
			