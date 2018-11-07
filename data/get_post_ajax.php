<?php
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","sp2");
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}
 if(isset($_REQUEST['type'])){
	 $type=$_REQUEST['type'];
	$query = "SELECT id, post_type, user_id, user_name, post_title, post_text, publish_date, image FROM posts WHERE post_type LIKE '%$type%' ORDER BY publish_date DESC";
	$jsonData= getJSONFromDB($query);
	echo $jsonData;
 }
?>
