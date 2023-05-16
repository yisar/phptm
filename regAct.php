<?php
define('ACC', true);
require('init.php');

if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['nickname'])) {
	exit('ACC Denied');
}
userModel::isLogin() && showMsg('请先退出登陆！', true, './');
$user_re = '/^[a-zA-Z][\w]{4,15}$/';
//$email_re = '/^[\\w-]+(\\.\\w+)*@[\\w-]+((\\.\\w{2,3}){1,3})$/';
$UM = new userModel();

$email = $_POST['email'];
$password = $_POST['password'];

if ($UM->exists_email($email)) {
	showMsg('邮箱已存在！');
}

$nickname = $_POST['nickname'];
if (mb_strlen($nickname, 'UTF8') < 2 || mb_strlen($nickname, 'UTF8') > 10) {
	showMsg('昵称输入错误！');
}

if ($UM->add('', $nickname, md5('acgzone.clicli' . md5($password)), $email, 0)) {
	showMsg('注册成功！将去往主页！', true, './');
} else {
	showMsg('添加用户失败！');
}