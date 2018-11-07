<?php
include_once("navigation.php");
$head="Add New";
if($view=="update"){
	$head="Update";
}
	
if(!isset($_SESSION['logged']) || $_SESSION['logged']==false)
{
				$URL=ROOT."/?user_login";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	
		
	
}

//echo $searchKey;
$err="";

$g2="checked";
		$g4="";
		$g3="";

$phone['name']="";
$phone['brand']="";
$phone['image']="";
$phone['g2']=0;
$phone['g3']=0;
$phone['g4']=0;
$phone['dim']="";
$phone['weight']="";
$phone['disp_type']="";
$phone['size']="";
$phone['resolution']="";
$phone['protection']="";
$phone['OS']="";
$phone['CPU']="";
$phone['core']="";
$phone['clock']="";
$phone['vrate']=0;
$phone['GPU']="";
$phone['front']="";
$phone['back']="";
$phone['battary']="";
$phone['b_type']="";
$phone['rom']="";
$phone['ram']="";
$phone['price']="";
$phone['launch']="";
if($searchKey!='0'){
	$phone=getProductById($searchKey,"");
	if($phone==NULL){
				$URL=ROOT;
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	
	}
	if($phone['g4']=='1'){
		$g4="checked";
		$g3="checked";
	}
	else if($phone['g3']=='1'){
		$g3="checked";
	}
}
//var_dump($phone);

if(sizeof($_POST)>=25){
$phone['name']=$_POST['phonename'];
$phone['brand']=$_POST['brand'];
$phone['launch']=$_POST['launch'];
	if(isset($_POST['g2']))
	{$phone['g2']=1;}
	if(isset($_POST['g3'])){$phone['g2']=1;$phone['g3']=1;}
	if(isset($_POST['g4'])){$phone['g2']=1;$phone['g3']=1;$phone['g4']=1;}
$phone['dim']=$_POST['dimension'];
$phone['weight']=$_POST['weight'];
$phone['disp_type']=$_POST['display_type'];
$phone['size']=$_POST['display_size'];
$phone['resolution']=$_POST['resolution'];
$phone['protection']=$_POST['display_protection'];
$phone['OS']=$_POST['os'];
$phone['CPU']=$_POST['cpu'];
$phone['core']=$_POST['core'];
$phone['clock']=$_POST['clock'];
$phone['vrate']=$_POST['vrate'];
$phone['GPU']=$_POST['gpu'];
$phone['front']=$_POST['primary_camera'];
$phone['back']=$_POST['secondary_camera'];
$phone['battary']=$_POST['battary_capacity'];
$phone['b_type']=$_POST['battary_type'];
$phone['rom']=$_POST['rom'];
$phone['ram']=$_POST['ram'];
$phone['price']=$_POST['price'];

//var_dump($GLOBALS);
	if(isset($_FILES["imageUp"])&& $_FILES["imageUp"]["name"]!=""){
		$target_dir = "app/view/images/";
		$target_file = $target_dir . basename($_FILES["imageUp"]["name"]);
		$file_name=basename($_FILES["imageUp"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			$t=explode(".", $_FILES["imageUp"]["name"]);
			$newfilename = round(microtime(true)) . '.' . $imageFileType;
			move_uploaded_file($_FILES["imageUp"]["tmp_name"], $target_dir."m".$newfilename);
			$phone['image']=$target_dir."m".$newfilename;
				if($searchKey=='0'){
					addProduct($phone);
					$phone=getProductById($searchKey,$phone['name']);
				$URL=ROOT."/?view_product=".$phone['id'];
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	

				}else{
					//echo "sdfggfsd";
				updateProduct($phone);
				$URL=ROOT."/?view_product=".$phone['id'];
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	
				}

	}
	else if($searchKey!='0'){
					//var_dump($phone);	
			updateProduct($phone);
				$URL=ROOT."/?view_product=".$phone['id'];
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	
	}else{
		$err="Fill all the fields "; 
	}
	
		
}
?>		<!-- second post -->
<title><?=$head?> Phone</title>
                <h1 class="page-header">
					<small ><?=$head?> Phone</small>
                </h1>
<script>
						$(document).ready(function () {
							$("#if_phone_exists").keyup(function(){
								$('#phone_check').html('');
								var searchkey= $("#if_phone_exists").val();
								var expression = new RegExp(searchkey,'i');
								//alert(searchkey);
								$.getJSON('data/phone_check_ajax.php?type='+searchkey,function(data){
									$.each(data,function(key,value){
									if(value.name.search(expression)!=-1){
										$('#phone_check').html('Phone already exists');
									}
								});
							});
						});
						});
						function add_phone_check(){
							var phone_check=$("#phone_check").val();
							if(email_check_text!='Phone already exists'){
								$("#add_phone_form").submit(false);
							}
							else{
								$("#add_phone_form").submit();
							}
						}
					</script>
<div id='sa'class="form-group <?php if($err!=''){echo 'alert alert-success';}?>"><?=$err?></div>
		<!-- second post -->
                <div class="row">
                    <div class="login-panel panel panel-default">
                        <div class="panel-body">
                            <form id="add_phone_form" role="form" method="post" name="add_phone" enctype="multipart/form-data">
                                <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th colspan="2" >Phone Name </th>
                                            <td>
												<div class="form-group">
													<input id="if_phone_exists" class="form-control"  name="phonename" type="text" autofocus required value="<?=$phone['name']?>">
													<span style="color:red" id='phone_check'></span>
												</div>
											</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" >Brand </th>
                                            <td>
												<div class="form-group">
													<input class="form-control"  name="brand" type="text" value="<?=$phone['brand']?>" required>
												</div>
											</td>
                                        </tr>
                                        <tr class="">
                                            <th colspan="2" >Image</th>
                                            <td>
												<div class="form-group">
													<input name="imageUp" type="file" class="form-control" accept="image/*" onchange="loadFile(event)"><br/>
													<img id="output" src="<?=$phone['image']?>" height="150"  />
												</div>
											</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" >Launch date </th>
                                            <td>
												<div class="form-group">
													<input class="form-control"  name="launch" value="<?=$phone['launch']?>" type="date">
												</div>
											</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2"width="10%"><strong>Network</strong></th>
                                            <th><ul style="list-style-type:none">
											<li><input type="checkbox" name="g2" <?=$g2?>>&nbsp; 2G </li>
											<li><input type="checkbox" name="g3" <?=$g3?>>&nbsp; 3G </li>
											<li><input type="checkbox" name="g4" <?=$g4?>>&nbsp; 4G </li>
											</ul></th>
                                        </tr>
										

										
										
                                        <tr>
                                            <th  rowspan="2">Body</th>
                                            <th >Dimension</th>
                                            <td>
												<div class="form-group">
													<input class="form-control"  name="dimension" value="<?=$phone['dim']?>" type="text" required>
												</div>
											</td>
                                        </tr>
										
										<tr class="">
                                            <th>Weight</th>
                                            <td>
												<div class="form-group">
													<input class="form-control"  name="weight" type="number" min="30" max="500" value="<?=$phone['weight']?>">
												</div>
											</td>
                                        </tr>
										
										
                                        <tr>
                                            <th  rowspan="4">Display</th>
                                            <th >Type</th>
                                            <td>
												<div class="form-group">
													<input class="form-control"  name="display_type" value="<?=$phone['disp_type']?>" type="text" required>
												</div>
											</td>
                                        </tr>
										
										<tr class="">
                                            <th>Size</th>
                                            <td>
												<div class="form-group">
													<input class="form-control"  name="display_size" value="<?=$phone['size']?>" type="number" step="0.01" min="1">
												</div>
											</td>
                                        </tr>	
										
										<tr class="">
                                            <th>Resolution</th>
                                            <td>
												<div class="form-group">
												<div class="form-group">
														<select class="form-control" name="resolution">">
														  <option value="480" <?php if($phone['resolution']==480){echo "selected";}?>>qHD</option>
														  <option value="720" <?php if($phone['resolution']==720){echo "selected";}?>>HD</option>
														  <option value="1080" <?php if($phone['resolution']==1080){echo "selected";}?>>FHD</option>
														  <option value="1440" <?php if($phone['resolution']==1440){echo "selected";}?>>QHD</option>
														</select>	
												</div>
												</div>
											</td>

                                        </tr>
										<tr class="">
                                            <th>Protection</th>
                                            <td>
												<div class="form-group">
													<input class="form-control" value="<?=$phone['protection']?>" name="display_protection" type="text" required>
												</div>
											</td>
                                        </tr>
										<tr>
                                            <th rowspan="3">Platform</th>
                                            <th >OS</th>
                                            <td>
												<div class="form-group">
													<input class="form-control" value="<?=$phone['OS']?>" name="os" type="text" required>
												</div>
											</td>
                                        </tr>
										<tr>
                                            <th >CPU</th>
                                            <td>
												<div class="form-group">
													<input class="form-control" value="<?=$phone['CPU']?>"  name="cpu" type="text">
													Core:<select class="form-control" name="core" >
														  <option value="1" <?php if($phone['core']==1){echo "selected";}?>>Single Core</option>
														  <option value="2"  <?php if($phone['core']==2){echo "selected";}?>>Dual Core</option>
														  <option value="3" <?php if($phone['core']==3){echo "selected";}?>>Three Core</option>
														  <option value="4" <?php if($phone['core']==4){echo "selected";}?>>Quad Core</option>
														  <option value="6" <?php if($phone['core']==6){echo "selected";}?>>Hexa Core</option>
														  <option value="8" <?php if($phone['core']==8){echo "selected";}?>>Octa Core</option>
														  <option value="10" <?php if($phone['core']==10){echo "selected";}?>>Deca Core</option>
														</select>
													Clock:<input class="form-control"  value="<?=$phone['clock']?>" name="clock" type="number" step="0.01" min="0.1">
													Rate :<span id="rrange"><?=$phone['vrate']?></span>&nbsp;<input type="range" min="0" max="10" value="<?=$phone['vrate']?>" step="1" name="vrate" onchange="showValue(this.value)" />
												</div>
											</td>
                                        </tr>
										<tr>
                                            <th >GPU</th>
                                            <td>
												<div class="form-group">
													<input class="form-control" value="<?=$phone['GPU']?>" name="gpu" type="text" required>
												</div>
											</td>
                                        </tr>
									
                                        <tr>
                                            <th  rowspan="2">Camera</th>
                                            <th >Primary</th>
                                            <td>
												<div class="form-group">
													<input class="form-control"  value="<?=$phone['back']?>" name="primary_camera" type="number" step="0.1" min="2">
												</div>
											</td>
                                        </tr>
										
										<tr class="">
                                            <th>Secondary</th>
                                            <td>
												<div class="form-group">
													<input class="form-control" value="<?=$phone['front']?>" name="secondary_camera" type="number" step="0.1" min="1">
												</div>
											</td>
                                        </tr>	
										
                                        <tr>
                                            <th  rowspan="2">Battary</th>
                                            <th >Capacity</th>
                                            <td>
												<div class="form-group">
													<input class="form-control" value="<?=$phone['battary']?>" name="battary_capacity" type="number" min="200">
												</div>
											</td>
                                        </tr>
										
										<tr class="">
                                            <th>Type</th>
                                            <td>
												<div class="form-group">
													<input class="form-control" value="<?=$phone['b_type']?>"  name="battary_type" type="text" required>
												</div>
											</td>
                                        </tr>	
										
                                        <tr>
                                            <th  rowspan="2">Memory</th>
                                            <th >ROM</th>
                                            <td>
												<div class="form-group">
													<input class="form-control" value="<?=$phone['rom']?>" name="rom" type="number" min="1" >
												</div>
											</td>
											
                                        </tr>
                                        <tr>
                                            <th >RAM</th>
                                            <td>
												<div class="form-group">
													<input class="form-control"  name="ram" value="<?=$phone['ram']?>" type="number" min="1" >
												</div>
											</td>
											
                                        </tr>
										
                                        <tr>
                                            <th colspan="2">Price</th>									
                                            <td>
												<div class="form-group">
													<input class="form-control" value="<?=$phone['price']?>" name="price" type="number" min="1">
												</div>
											</td>
											
                                        </tr>
										
										
										</tbody>
                                </table>
                        </div>

                                    <!-- Change this to a button or input when using this as a form -->
                                    <input onSubmit="add_phone_check()" type="submit" name="submit_phone" class="btn btn-lg btn-success btn-block" value="Save Phone"/>
                            </form>
                             </div>
                        </div>
			
					
					
                </div>

<script type="text/javascript">
function showValue(newValue)
{
	document.getElementById("rrange").innerHTML=newValue;
}

  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>				
<?php
	include_once("right_panel.php");
	include_once("footer.php");
?>	
				
			