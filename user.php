<?php

define('ACC', true);
require('init.php');
userModel::isLogin() || showMsg('请先登陆!', true, './login.php');
$uid = empty($_GET['uid']) ? $_SESSION['uid'] : (int) $_GET['uid'];
$cat = empty($_GET['cat']) ? 1 : (int) $_GET['cat'];

$self = $uid == $_SESSION['uid'] ;
switch ($cat) {
	//我发起的讨论 栏目
	case 1:
		$msg = new msgModel;
		$curr_page = empty($_GET['page']) ? 1 : (int) $_GET['page'];
		$threads = $msg->getUserThreads($uid, ($curr_page - 1) * 5);
		break;
	//我的订阅 栏目
	case 2:
		$ss = new subscriptionModel();
		$curr_page = empty($_GET['page']) ? 1 : (int) $_GET['page'];
		$threads = $ss->get(($curr_page - 1) * 5);
		break;
}

require(ROOT . "view/$template_dir/user.php");