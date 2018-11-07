<?php
include_once("navigation.php");
$head="Write";
if(!isset($_SESSION['logged']) && !isset($_SESSION['user']))
{
				$URL=ROOT."/?user_login";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';	
			
}
$post['post_type']="";
$post['user_id']="";
$post['user_name']="";
$post['post_title']="";
$post['post_text']="";
$post['publish_date']="";
$post['image']="";
$post['id']="";
if($searchKey!='0'){
	$head="Edit";

	$post=getPostById($searchKey);
		if($post==NULL){
				$URL=ROOT;
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				die();				
		}
		else if($post['user_id']!=$_SESSION['user']['id'] && $_SESSION['user']['type']!="super"){
				$URL=ROOT."/?";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				die();				
		}

}

$mysqli=new mysqli("localhost", "root", "", "sp2");
$err="";


if(sizeof($_POST)>=3){
	if(isset($_FILES["fileToUpload"])&& $_FILES["fileToUpload"]["name"]!=""){
		$target_dir = "app/view/images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$file_name=basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$not_image="File is not an image.";
		$file_exists="Sorry, file already exists.";
		$too_large="Sorry, your file is too large.";
		$extension_unmatched="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$sorry="Sorry, your file was not uploaded.";
		//echo "<pre>";print_r($GLOBALS);echo "</pre>";
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				$err="File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				$err=$not_image;
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			$err=$file_exists;
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 50000000) {
			$err=$too_large;
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif") {
			$err=$extension_unmatched;
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
			$err=$sorry;
		// if everything is ok, try to upload file
		}
	else {
		$t=explode(".", $_FILES["fileToUpload"]["name"]);
		$newfilename = round(microtime(true)) . '.' . $imageFileType;
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir."p".$newfilename)) {
				if($searchKey!='0'){
					$post['post_text'] = $mysqli->real_escape_string(trim($_POST["textbody"]));
					$post['post_title'] = $mysqli->real_escape_string(ucwords(trim($_POST["post_title"])));
					$post['image']=$target_dir."p".$newfilename;
					$num=editPost($post);
				$URL=ROOT."/?view_".$view."=".$post['id'];
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				die();				
				}
				else{
					
					$post['post_text'] = $mysqli->real_escape_string(trim($_POST["textbody"]));
					$post['post_title'] = $mysqli->real_escape_string(ucwords(trim($_POST["post_title"])));
					$post['post_type']=$_POST['post_type'];
					$post['image']=$target_dir."p".$newfilename;
					$post['user_id']=$_SESSION['user']['id'];
					$post['user_name']=$_SESSION['user']['firstname'];
					$num=addPost($post);
				$URL=ROOT."/?view_profile";
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				die();				
				}
		}
		else {
			$err="Unknown error occured during picture upload choosea different picture.";
		}
	}
	}
	else{
				if($searchKey!='0'){
					$post['post_text'] = $mysqli->real_escape_string(trim($_POST["textbody"]));
					$post['post_title'] = $mysqli->real_escape_string(ucwords(trim($_POST["post_title"])));
					$num=editPost($post);
				$URL=ROOT."/?view_".$view."=".$post['id'];
				echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				die();				
				}
				else{
					$err="id not set";
				}
	}
}

//var_dump($GLOBALS);
?>		<!-- second post -->
<title><?=$head?> Post</title>
                <h1 class="page-header">
					<small ><?=$head?> <?=$temp?></small>
                </h1>
<script>
	function post_func(elm){
		a=document.getElementById("post_name").value;
		b=document.getElementById("post_picture").value;
		c=document.getElementById("post_body").value;
		var flag1=0;
		var flag2=0;
		var flag3=0;
		if(a.length>0){
			flag1=1;
		}
		if(c.length>0){
			flag3=1;
		}
		if(b!=""){
			flag2=1;
		}
		var if_in_edit='<?php echo $searchKey; ?>';
		
		if(if_in_edit!='0' && elm.getAttribute("type")=="button"&&flag1==1&&flag3==1){
			document.getElementById("add_post").submit();
		}
		else if(elm.getAttribute("type")=="button"&&flag1==1&&flag2==1&&flag3==1){
			document.getElementById("add_post").submit();
		}
		else if(elm.getAttribute("type")=="button"){
			document.getElementById("add_post_info").innerHTML="Please check for empty input fields and picture";
		}

	}
	
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
	
</script>
<div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="login-panel panel panel-default">
                        <div class="panel-body">
									<form id="add_post" role="form" method="post" enctype="multipart/form-data">
									
										<fieldset>
										<div id='sa'class="form-group <?php if($err!=''){echo 'alert alert-success';}?>"><?=$err?></div>
											<div class="form-group">Post Type :&nbsp;&nbsp
											<?php if($view=='post'):?>
												<input id="radio_news" type="radio" name="post_type" value="news" checked><b id="radio_text">News</b>&nbsp;&nbsp;&nbsp;
												<input id="radio_preview" type="radio" name="post_type" value="preview"><b>Preview</b>
											<?php elseif($view=='news'):?>
												<input id="radio_news" type="radio" name="post_type" value="news" checked><b id="radio_text">News</b>&nbsp;&nbsp;&nbsp;
											<?php elseif($view=='previews'):?>
												<input id="radio_preview" type="radio" name="post_type" value="preview" checked><b>Preview</b>
											<?php endif;?>
											</div>
											<div class="form-group">
												<input id="post_name" class="form-control" placeholder="Give a Title..." name="post_title" type="text" autofocus value="<?=$post['post_title']?>">
												<span id="title_text"></span>
											</div>
											<div class="form-group">
												<b>Choose a picture </b>
												<input id="post_picture" class="form-control" name="fileToUpload" type="file" id="file" value="" accept="image/*" onchange="loadFile(event)"><br/>
													<img id="output" src="<?=$post['image']?>" height="150" />
											</div>
											<div class="form-group">
												<textarea id="post_body" class="form-control" placeholder="Write the body..." name="textbody" rows="10" required style="resize: none;"><?=$post['post_text']?></textarea>
											 </div>
											<!-- Change this to a button or input when using this as a form -->
											<input type="button" onclick="post_func(this)" class="btn btn-lg btn-primary btn-block" value="Post" name="post_submit">
											<b id="add_post_info"></b>
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
				
			