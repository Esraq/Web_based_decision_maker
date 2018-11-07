<!DOCTYPE html>
<?php
require_once(APP_ROOT."/core/user_service.php");
require_once(APP_ROOT."/core/product_service.php");
require_once(APP_ROOT."/core/post_service.php");
	$user['id']="";
	$user['name']="";
	$user['email']="";
	$user['type']="";
				//setcookie("test_cookie", "test", time() - 3600, '/');

session_start();
/*
if(isset($_COOKIE['user_id'])){
	$_SESSION['user'] = getUserById($_COOKIE['user_id']);
	$_SESSION['logged'] = true;
	$logged = true;

}*/
if(isset($_SESSION['logged']) && $_SESSION['logged']==true)
{
	$logged = true;
	$user['id']=$_SESSION['user']['id'];
	$user['name']=$_SESSION['user']['firstname'];
	$user['last']=$_SESSION['user']['lastname'];
	$user['email']=$_SESSION['user']['email'];
	$user['type']= $_SESSION['user']['type'];
	
}
else{
	$logged=false;

}
/*
if(!isset($_SESSION)){
	session_start();
		if(isset($_SESSION['logged'])){
				$logged=true;
			$user['id']=$_SESSION['user']['id'];
			$user['name']=$_SESSION['user']['name'];
			$user['username']=$_SESSION['user']['username'];
			$user['email']=$_SESSION['user']['email'];
			$user['type']=$_SESSION['user']['type'];
			//$user['type']='user';
		}
}
*/
//var_dump($_COOKIE);
if(isset($_POST['search_submit']) && isset($_POST['searcht'])){
	$srchKey=trim($_POST['searcht']);
	if(strlen($srchKey)){ header("location: ?product_search=$srchKey");die();}
}

?>
<html lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
	    <!-- jQuery -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
				<style>
			
			 #ajax_search_result :hover{
				 background-color:lightgray;
			}

				</style>
					<script>
						$(document).ready(function () {
							//alert('gg');
							$("#search-bar").keyup(function(){
								$('#ajax_search_result').html('');
								var searchkey= $("#search-bar").val();
								var expression = new RegExp(searchkey,'i');
								$.getJSON('data/get_product_for_search_ajax.php?searchkey='+searchkey,function(data){
									$.each(data,function(key,value){
									if(value.name.search(expression)!=-1 && $('#ajax_search_result').children().length <7 && searchkey != ''){
										$('#ajax_search_result').append('<li class="list-group-item"><a style="display: block;text-decoration: none;" href="?view_product='
										+value.id+'"><img src="'+value.image+'" height="40" width="40" class="img-thumbnail"/>'
										+value.name+'</a></li>');
									}
								});
							});
						});
						});
					</script>
</head>

<body>


    <!-- Navigation -->
<!-- fixed Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= ROOT ?>/">Phone Geeks</a>
            </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				  
				  <li class="dropdown">
					
				  </li>
				</ul>
				<div class="col-sm-6 col-md-6">
					<form class="navbar-form" role="search" method="post" name="search"  onsubmit="return searchForm()" autocomplete="off">
					<div class="input-group" style="width:100%">
						<input type="text" class="form-control" placeholder="Search" id="search-bar" name="searcht"/>
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit" value="Search" id="search-button" name="search_submit"><i class="glyphicon glyphicon-search"></i></button>
							<!-- add button -->
						</div>
					</div>
					</form>
						<ul class="list-group" id="ajax_search_result" style="position:absolute;left:30px;max-width:376px;width:500px;word-wrap: break-word;">
						</ul>
				</div>
				<ul class="nav navbar-nav navbar-right">
				<!--			<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>	-->
					<?php if($logged==false):?>
						<li><a href="<?= ROOT ?>/?user_login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						
						<!-- after login -->
					<?php else:?>	
						<li><a href="<?= ROOT ?>/?view_profile">My Panel</a></li>
						<li><a href="<?= ROOT ?>/?add_product">Add Phone</a></li>
						<!-- <li><a href="<?= ROOT ?>/?add_member">Add Member</a></li> -->
						<li><a href="<?= ROOT ?>/logout.php">Logout &nbsp;<span class="glyphicon glyphicon-log-out"></a></li>
					<?php endif; ?>
						<!-- after login -->
				</ul>
			</div><!-- /.navbar-collapse -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="input-group" style="width:40%">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="./singup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="./login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>-->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-- fixed Navigation -->
	
	

<!-- static Navigation -->

    <nav class="navbar navbar-inverse navbar-static-top" role="navigation" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
			<!--   <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div> -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= ROOT ?>/">Home</a>
                    </li>
                    <li>
                        <a href="<?= ROOT ?>/?product_news">News</a>
                    </li>
                    <li>
                        <a href="<?= ROOT ?>/?product_previews">Previews</a>
                    </li>
            <!--    
					<li>
                        <a href="posts.php">Blogs</a>
                    </li>
                    <li>
                        <a href="posts.php">Reviews</a>
                    </li>
                    <li>
                        <a href="phone_finder.php">Phone Finder</a>
                    </li>
                    <li>
                        <a href="all_brands.php">All Brand</a>
                    </li>
			-->
                    <li>
                        <a href="<?= ROOT ?>/?product_compare">Compare</a>
                    </li>
                    <!-- 
					
					<li>
                        <a href="add_product.php">Add New Product</a>
                    </li>
					
					-->
                </ul>
				<!--    <ul class="nav navbar-nav navbar-right">
                <li><a href="./singup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="./login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>-->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	
	
<!-- static Navigation -->
<!-- Navigation -->
	
<script>
function searchForm(){
	var ti = document.forms["search"]["title"].value.trim();
	if(ti==""){
		return false;
	}
	document.forms["search"].submit();
}

</script>

	
	


<!-- page body -->

    <!-- Page Content -->
    <div class="container">

        <!-- <div class="row"> -->
		
		
			<!-- left body -->
            <!-- Blog Entries Column -->
            <div class="col-md-8">
			
		<!-- second post -->

 