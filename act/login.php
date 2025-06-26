<?php
define('ACC', true);
require ('../init.php');

if (empty ($_POST['email']) || empty ($_POST['password'])) {
	exit ('ACC Denied');
}
userModel::isLogin() && showMsg('已经处于登录状态！', true, true, '../');
$email = $_POST['email'];
$pass = md5('acgzone.clicli' . md5($_POST['password']));

$UM = new userModel();

if ($UM->login($email, $pass)) {
	showMsg('登录成功！即将跳转到主页！', true, true, '../');
} else {
	showMsg('用户名或密码错误！', false);
}