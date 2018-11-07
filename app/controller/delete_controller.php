<?php
if (!isset($isDispatchedByFrontController)) {
    include_once("../error.php");
    die;
}

//include_once(APP_ROOT."/core/user_service.php");

switch ($view) {
    case "product":
		// check admin
        include_once(APP_ROOT."/app/view/delete_product.php");
        break;
    case 'post':
        include_once(APP_ROOT.'/app/view/delete_post.php');
        break;
    case 'user':
        include_once(APP_ROOT.'/app/view/delete_user.php');
        break;
    default:
        include_once(APP_ROOT."/app/error.php");
}
?>