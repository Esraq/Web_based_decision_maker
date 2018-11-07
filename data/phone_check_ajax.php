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
	$query = "SELECT name FROM phone WHERE name= '$type'";
	$jsonData= getJSONFromDB($query);
	echo $jsonData;
 }
?>
