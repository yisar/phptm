<?php
define('ACC', true);
require ('../init.php');

userModel::isLogin() || showMsg('请先登陆！', false, true, '../');
$_SESSION['type'] > 0 || showMsg('权限不足！', false, true, '../');
empty ($_GET['tid']) && showMsg('参数错误！', false, true, '../');
$tid = (int) $_GET['tid'];
$msg = new msgModel();

if ($msg->isSAGE($tid)) {
	if ($msg->UNSAGE($tid)) {
		$message = 'tid为' . $tid . '的主题已经解除SAGE！';
	} else {
		$message = 'tid为' . $tid . '的主题解除SAGE失败！';
	}
} else {
	if ($msg->SAGE($tid)) {
		$message = 'tid为' . $tid . '的主题已经SAGE！';
	} else {
		$message = 'tid为' . $tid . '的主题SAGE失败！';
	}
}
showMsg($message, true, true);