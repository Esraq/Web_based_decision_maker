<?php
require_once(APP_ROOT."/data/product_data_access.php");

	function addProduct($product){
		return addProductDb($product);
	}
	function updateProduct($product){
		return updateProductDb($product);
	}
	function deleteProduct($id){
		return deletePDb($id);
	}
	function getProductById($id,$name){
		return getProductByIdDb($id,$name);
	}
	function getBrands(){
		//echo "asdds";
		return getBrandsDb();
	}
	function searchProduct($key){
		return searchProductDb($key);
	}
	function setNewRate($id, $rate){
		return setNewRateDb($id, $rate);
	}
	function getLeatestProduct(){
		//echo "asdds";
		return getLeatestProductDb();
	}
	function getHitProduct(){
		//echo "asdds";
		return getHitProductDb();
	}

?>
