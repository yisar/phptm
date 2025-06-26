<?php
define('ACC', true);
require ('../init.php');
userModel::isLogin() || showMsg('你还没有登录！', false, true, '../login.php');
userModel::logout();
showMsg('你已退出登录！', true, true);