<?php
require_once(APP_ROOT."/data/post_data_access.php");

	function addPost($post){
		return addPostDb($post);
	}
	function deletePost($id){
		return deletePostDb($id);
	}
	function getPostById($id){
		return getPostByIdDb($id);
	}
	function getPBI($img){
		return getPBIDb($img);
	}
	function editPost($post){
		return editPostDb($post);
	}
	function getAllPosts($type){
		return getAllPostsDb($type);
	}
	function getMyPosts($uid){
		return getMyPostsDb($uid);
	}

?>
