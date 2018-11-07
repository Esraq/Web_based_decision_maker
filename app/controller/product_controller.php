<?php
if (!isset($isDispatchedByFrontController)) {
    include_once("../error.php");
    die;
}

//provide service to controller
//include_once(APP_ROOT."/core/product_service.php");
//include_once(APP_ROOT."/core/post_service.php");

switch ($view) {
    case "home":
        include_once(APP_ROOT."/app/view/home.php");
        break;

    case 'news':
		$temp='News';
        include_once (APP_ROOT.'/app/view/posts.php');
        break;

    case 'previews':
		$temp='Previews';
        include_once (APP_ROOT.'/app/view/posts.php');
        break;

	case 'compare':
        include_once (APP_ROOT.'/app/view/compare.php');
        break;

    case 'search':
        include_once (APP_ROOT.'/app/view/search.php');
        break;
    case 'update':
        include_once (APP_ROOT.'/app/view/add_product.php');
        break;
    case 'delete':
        include_once (APP_ROOT.'/app/view/delete_product.php');
        break;

    default:
        include_once(APP_ROOT."/app/error.php");
}
?>
