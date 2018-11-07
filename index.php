<?php
//var_dump($GLOBALS);
define('APP_ROOT', "$_SERVER[DOCUMENT_ROOT]/SP2");

/** Define Protocol */
define('PROTOCOL', ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
    $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://");

/** Define Server*/
define('ROOT', PROTOCOL.$_SERVER['SERVER_NAME'].'/SP2');

$hasError = true;
if (count($_GET) == 0) {
        $view = "home"; 
        $hasError = false; 
        $isDispatchedByFrontController=true;
        include_once(APP_ROOT."/app/controller/product_controller.php");
}
else if(count($_GET) > 0) {
    $key = array_keys($_GET)[0]; //ex: product_home
	$searchKey=preg_replace('!\s+!', ' ',$_GET[$key]);
	if($searchKey==''){
		$searchKey='0';
	}
	
	
	//var_dump($searchKey);
    $path = explode("_", $key);
    if (count($path) >= 2) {
        $hasError = false; 

        $controller = $path[0]; 
        $view = $path[1]; 
		
        $isDispatchedByFrontController=true;
		if($controller=="product" || $controller=="add" || $controller=="view" || $controller=="user" || $controller=="delete"){
			include_once(APP_ROOT."/app/controller/".$controller."_controller.php");
		}
		else{
			$hasError = true; 
		}

	}
}

if ($hasError) {
    include_once(APP_ROOT."/app/error.php");
}
