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
 if(isset($_REQUEST['searchkey'])){
	$searchkey=$_REQUEST['searchkey'];
	$query = "SELECT * FROM phone WHERE id = $searchkey";
	$jsonData= getJSONFromDB($query);
	echo $jsonData;
 }
?>
