<?php
define('ACC', true);
require ('../init.php');

userModel::isLogin() || showMsg('请先登陆!', true, '../login.php');
$lastSendTime = empty ($_SESSION['cd']) ? 0 : $_SESSION['cd'];
time() - $lastSendTime < CD && showMsg('发言CD中…先施法吧！', false);
empty ($_POST['id']) && showMsg('请从正常页面发起回应！', true, true, '../');
empty ($_POST['content']) && showMsg('请输入正文!', false);
$data = array();
$msg = new msgModel();
$data['content'] = $_POST['content'];
$data['tid'] = (int) $_POST['id'];
$data['uid'] = (int) $_SESSION['uid'];
$data['name'] = $_SESSION['nickname'];
$data['type'] = $_SESSION['type'];
$data['floor'] = $msg->getNextFloor($data['tid']);
if ($msg->addreply($data)) {
	$_SESSION['cd'] = time();
	showMsg('发出回应成功！', true, true, '../post.php?id=' . $data['tid']);
} else {
	showMsg('发起讨论失败！', false);
}