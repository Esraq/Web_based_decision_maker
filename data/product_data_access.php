<?php require_once(APP_ROOT."/lib/data_access_helper.php"); ?>
<?php
//product table
	function addProductDb($product){
		$query = "INSERT INTO phone (name, brand, image, launch, g2, g3, g4, dim, weight, disp_type, size, resolution, protection, OS, CPU, core, clock, vrate, GPU,
		front, back, battary, b_type, ram, rom, price, design, perform, cam, batt, rate, view, count)
		VALUES ('$product[name]', '$product[brand]', '$product[image]', '$product[launch]', 1, $product[g3], $product[g4], '$product[dim]', $product[weight],
			'$product[disp_type]', $product[size], $product[resolution], '$product[protection]', '$product[OS]', '$product[CPU]', $product[core], $product[clock], 
			$product[vrate], '$product[GPU]', $product[front], $product[back], $product[battary], '$product[b_type]', $product[ram], $product[rom],
			$product[price], 1, 1, 1, 1, 1, 1, 1)";
		$result = executeQuery($query);
		
		//create names.xml
		return $result;
	}
	function getProductNamesDb(){
		$query = "SELECT id ,name FROM phone";  
		$result = executeQuery($query);	
		$product = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$product[$i] = $row;				
			}
		}
		return $product;
	}

	function updateProductDb($product){
		$query = "UPDATE phone SET name='$product[name]',brand='$product[brand]',image='$product[image]',
			launch='$product[launch]',g2=$product[g2],g3=$product[g3],g4=$product[g4],dim='$product[dim]',
			weight=$product[weight],disp_type='$product[disp_type]',size=$product[size],resolution=$product[resolution],
			protection='$product[protection]',OS='$product[OS]',CPU='$product[CPU]',core=$product[core],clock=$product[clock],
			vrate=$product[vrate],GPU='$product[GPU]',front=$product[front],back=$product[back],battary=$product[battary],
			b_type='$product[b_type]',ram=$product[ram],rom=$product[rom],price=$product[price] WHERE id=$product[id]";
		return executeQuery($query);
	}
	function setNewRateDb($id, $rate){
		$query = "SELECT  design, perform, cam, batt, rate, count FROM phone WHERE id=$id";
		$result = executeQuery($query);	
		$r = array();
		if($result){
			$r =mysqli_fetch_assoc($result);				
			
		}
		$design=(($r['design']*$r['count'])+$rate['design'])/($r['count']+1);
		$perform=(($r['perform']*$r['count'])+$rate['perform'])/($r['count']+1);
		$cam=(($rate['cam']*$r['count'])+$rate['cam'])/($r['count']+1);
		$batt=(($rate['batt']*$r['count'])+$rate['batt'])/($r['count']+1);
		$rat=(($rate['rate']*$r['count'])+$rate['rate'])/($r['count']+1);
		$query = "UPDATE phone SET design=$design, perform=$perform, cam=$cam, batt=$batt, rate=$rat, count=count+1 WHERE id=$id";
		return executeQuery($query);
	}
	function deletePDb($id){
		$query = "DELETE FROM phone WHERE id=$id";
		$result = executeQuery($query);	
	}
	function getProductByIdDb($id,$name){
		//echo $id;
		$product = null;
		if($id!=0){
			executeQuery("UPDATE phone SET view=view+1 WHERE id=$id");
			$query = "SELECT id, name, brand, image, launch,  g2, g3, g4, dim, weight, disp_type, size, resolution, protection, OS, CPU, core, clock, vrate, GPU, front, back, battary, b_type, ram, rom, price, design, perform, cam, batt, rate, view FROM phone WHERE id=$id";  
		}else{
			executeQuery("UPDATE phone SET view=view+1 WHERE name=$name");
			$query = "SELECT id, name, brand, image, launch,  g2, g3, g4, dim, weight, disp_type, size, resolution, protection, OS, CPU, core, clock, vrate, GPU, front, back, battary, b_type, ram, rom, price, design, perform, cam, batt, rate, view FROM phone WHERE name=$name";  
		}		
		$result = executeQuery($query);	
			if($result){
				$product = mysqli_fetch_assoc($result);
			}
			//echo $product['name'];
		return $product;
	}
	function getBrandsDb(){
				//echo "brnd";

		$query = "SELECT DISTINCT brand FROM phone";  
		$result = executeQuery($query);	
		$brand = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$brand[$i] = $row['brand'];				
			}
		}
		return $brand;
	}


	function searchProductDb($key){
		$query = "SELECT id, name, image FROM phone WHERE name LIKE '%$key%' ORDER BY launch DESC";  
		$result = executeQuery($query);	
		$product = null;
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$product[$i] = $row;				
			}
		}
		return $product;
	}
	function getLeatestProductDb(){
		//echo "let";
		$query = "SELECT id, name FROM phone ORDER BY launch DESC LIMIT 5";  
		$result = executeQuery($query);	
		$product = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$product[$i] = $row;				
			}
		}
		return $product;
	}
	function getHitProductDb(){
		//echo "hit";
		$product = array();
		$query = "SELECT id, name FROM phone ORDER BY view DESC LIMIT 5";
		$result = executeQuery($query);	
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$product[$i] = $row;				
			}
		}
		//var_dump($product);
		return $product;
	}
?>