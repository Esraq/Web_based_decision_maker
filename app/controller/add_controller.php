<?php
if (!isset($isDispatchedByFrontController)) {
    include_once("../error.php");
    die;
}

//include_once(APP_ROOT."/core/user_service.php");

switch ($view) {
    case "product":
		// check admin
        include_once(APP_ROOT."/app/view/add_product.php");
        break;
    case 'news':
		// check admin
		$temp='News';
        include_once(APP_ROOT.'/app/view/add_post.php');
        break;
    case 'previews':
		$temp='Preview';
        include_once(APP_ROOT.'/app/view/add_post.php');
        break;
    case 'post':
		$temp='Post';
        include_once(APP_ROOT.'/app/view/add_post.php');
        break;
    case "member":
        include_once(APP_ROOT."/app/view/signup.php");
        break;
    default:
        include_once(APP_ROOT."/app/error.php");
}
?>