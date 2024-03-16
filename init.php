<?php
/*
file init.php
框架初始化
 */
defined('ACC')||exit('ACC Denied');
header('Content-type: text/html; charset=utf-8');
session_start();
date_default_timezone_set('PRC');

function autoload ($class) {
	if (strtolower(substr($class, -5)) == 'model') {
		require(ROOT . 'db/' . $class . '.php');
	} else {
		require(ROOT . 'lib/' . $class . '.php');
	}
}

spl_autoload_register( 'autoload' );

//定义常量
define('ROOT', str_replace('\\', '/', dirname(__FILE__)).'/');
define('DEBUG', true);
define('SAVELOG',true);

//读取配置
$conf = conf::getInstance();
$report_tid = $conf->report_tid;
define('SITENAME', $conf->site_name);
define('CD',$conf->post_cd);

//获取模板路径
$template_dir = isset($_SESSION['template'])?$_SESSION['template']:'';

//加载函数库
require(ROOT . 'util.php');

//类自动加载

//设置报错级别
DEBUG ? error_reporting(E_ALL) : error_reporting(0);

// //递归过滤参数
// if (!get_magic_quotes_gpc()){
	$_GET = _addslashes($_GET);
	$_POST = _addslashes($_POST);
	$_COOKIE = _addslashes($_COOKIE);
// }
