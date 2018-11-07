<?php
if (!isset($isDispatchedByFrontController)) {
    include_once("../error.php");
    die;
}

//include_once(APP_ROOT."/core/user_service.php");

switch ($view) {
    case "product":
        include_once(APP_ROOT."/app/view/product_view.php");
        break;
    case 'news':
		$temp='News';
		include_once(APP_ROOT.'/app/view/post_view.php');
        break;
    case 'previews':
		$temp='Preview';
		include_once(APP_ROOT.'/app/view/post_view.php');
        break;
    case "profile":
        include_once(APP_ROOT."/app/view/profile.php");
        break;
    case "all":
        include_once(APP_ROOT."/app/view/all_user.php");//
        break;
   default:
        include_once(APP_ROOT."/app/error.php");
}
?>