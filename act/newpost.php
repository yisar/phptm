<?php
define('ACC', true);
require ('../init.php');

userModel::isLogin() || showMsg('请先登录!', false, true, '../login.php');
$lastSendTime = empty ($_SESSION['cd']) ? 0 : $_SESSION['cd'];
time() - $lastSendTime < CD && showMsg('发言CD中…先施法吧！', false);
empty ($_POST['id']) && showMsg('请从正常页面发起讨论！', true, true, '../');
(int) $_POST['id'] < 1 && showMsg('参数错误！', true, true, '../');
empty ($_POST['content']) && showMsg('请输入正文!', false);
$data = array();
$data['title'] = empty ($_POST['title']) ? '无标题' : $_POST['title'];
$data['content'] = $_POST['content'];
$data['cat'] = (int) $_POST['id'];
$data['uid'] = (int) $_SESSION['uid'];
$data['name'] = $_SESSION['nickname'];
$data['type'] = $_SESSION['type'];
$msg = new msgModel();
if ($msg->addThread($data)) {
	$_SESSION['cd'] = time();
	showMsg('成功发起讨论！', true, true);
} else {
	showMsg('发起讨论失败！', false);
}