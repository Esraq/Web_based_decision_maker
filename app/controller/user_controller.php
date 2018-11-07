<?php
if (!isset($isDispatchedByFrontController)) {
    include_once("../error.php");
    die;
}

//include_once(APP_ROOT."/core/user_service.php");

switch ($view) {
    case "login":
        include_once(APP_ROOT."/app/view/login.php");
        break;
    case 'register':
        include_once (APP_ROOT.'/app/view/signup.php');
        break;
    case 'update':
        include_once (APP_ROOT.'/app/view/edit_profile.php');//
        break;
    case 'post':
        include_once (APP_ROOT.'/app/view/user_post.php');//
        break;
    case 'make':
        include_once (APP_ROOT.'/app/view/make_admin.php');//
        break;
    case 'logout':
        session_destroy();
		header ("location: ?product_home");
        break;
    default:
        include_once(APP_ROOT."/app/error.php");
}
?>