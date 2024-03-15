<?php

define('ACC', true);
require('init.php');
$pathname = 'thread';

//实例化留言板操作类
$msg = new msgModel();

//取得被回复主题tid
empty($_GET['id']) && showMsg('参数错误!', true, './');
$cid = (int) $_GET['id'];

$curr_page = empty($_GET['page']) ? 1 : (int) $_GET['page'];

//取得被回复主题
$threads = $msg->getTopThreads(($curr_page - 1) * 10, $cid, 10);
//获取全部分类
$cats = catModel::getCatTree();
$curr_cat = catModel::getInfo($cid, false);

//view
require(ROOT . "view/$template_dir/thread.php");