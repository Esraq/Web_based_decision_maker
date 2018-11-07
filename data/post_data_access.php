<?php require_once(APP_ROOT."/lib/data_access_helper.php"); 
require_once(APP_ROOT."/data/user_data_access.php");
// post table
	function addPostDb($post){
		$query = "INSERT INTO posts (post_type, user_id, user_name, post_title, post_text, publish_date, image) VALUES 
		('$post[post_type]', $post[user_id], '$post[user_name]', '$post[post_title]', '$post[post_text]', NOW(), '$post[image]')";
		//echo $query;
		return executeQuery($query);
	}
	function deletePostDb($id){
		$query = "DELETE FROM posts WHERE id=$id";
		return executeQuery($query);
	}
	
	function editPostDb($post){
		$query = "UPDATE posts SET post_title='$post[post_title]', post_text='$post[post_text]', image='$post[image]' WHERE id=$post[id]";
		return executeQuery($query);
	}

	function getPostByIdDb($id){
		$query = "SELECT id, post_type, user_id, user_name, post_title, post_text, publish_date, image FROM posts WHERE id=$id";
		$result = executeQuery($query);	
		$post = null;
		if($result){
			$post = mysqli_fetch_assoc($result);
		}
		if($post!=NULL){
			if(getNameByIdDb($post['user_id'])!=NULL){
				$post['user_name']=getNameByIdDb($post['user_id']);
			}
		}
		return $post;
	}
	function getMyPostsDb($uid){
		$query = "SELECT id, post_type, user_id, user_name, post_title, post_text, publish_date, image FROM posts WHERE user_id=$uid";
		$result = executeQuery($query);	
		$post = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$post[$i] = $row;	
				$part=array_slice((str_word_count($row['post_text'], 1)), 0, 40);	
				$test="";
				foreach($part as $p){
					$test.=$p." ";
				}
				$post[$i]['part']=$test;
			}
		}
		return $post;
	}
	function getPBIDb($img){
		$query = "SELECT id, post_type, user_id, user_name, post_title, post_text, publish_date, image FROM posts WHERE image=$img";
		$result = executeQuery($query);	
		$post = null;
		if($result){
			$post = mysqli_fetch_assoc($result);
		}
		if($post!=NULL){
			if(getNameByIdDb($post['user_id'])!=NULL){
				$post['user_name']=getNameByIdDb($post['user_id']);
			}
		}
		return $post;
	}
	function getAllPostsDb($type){
		$query = "SELECT id, post_type, user_id, user_name, post_title, post_text, publish_date, image FROM posts WHERE post_type LIKE '%$type%' ORDER BY publish_date DESC";
		$result = executeQuery($query);	
		$post = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$post[$i] = $row;	
				$part=array_slice((str_word_count($row['post_text'], 1)), 0, 40);	
				$test="";
				foreach($part as $p){
					$test.=$p." ";
				}
				$post[$i]['part']=$test;
			}
		}
		return $post;
	}

?>	
