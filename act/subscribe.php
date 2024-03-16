<?php
define('ACC', true);
require ('../init.php');

userModel::isLogin() || showMsg('请先登陆!', false, true, '../login.php');
empty ($_GET['tid']) && showMsg('参数错误', false, true, '../');
$tid = (int) $_GET['tid'];
$ss = new subscriptionModel();
if ($ss->isSubscribed($tid)) {
	if ($ss->del($tid)) {
		showMsg('已取消订阅', true, true);
	}
} else {
	if ($ss->add($tid)) {
		showMsg('订阅大成功！', true, true);
	}
}