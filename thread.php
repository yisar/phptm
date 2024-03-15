<?php

define('ACC', true);
require('init.php');
$pathname = 'thread';

//实例化留言板操作类
$msg = new msgModel();

//取得被回复主题tid
empty($_GET['id']) && showMsg('参数错误!', true, './');
$cid = (int) $_GET['id'];

//取得被回复主题
$threads = $msg->getTopThreads(0, $cid, 20);

//总页数
$count = $msg->countReplies($tid);
$all = ceil($count / 10);

//获取当前页数
$curr_page = empty($_GET['page']) ? 1 : (int) $_GET['page'];
$curr_page > $all && $curr_page = $all;
$curr_page < 1 && $curr_page = 1;

//$i开始显示页数，$show结束显示页数
if ($curr_page <= 6) {
    $i = 1;
    $show = $all < 11 ? $all : 11;
} elseif ($curr_page > 6 && $curr_page <= $all - 5) {
    $i = $curr_page - 5;
    $show = $curr_page + 5;
} else {
    $i = $all - 10;
    $show = $all;
}

//获取全部分类
$cats = catModel::getCatTree();
$curr_cat = catModel::getInfo($cid, false);

//view
require(ROOT . "view/$template_dir/thread.php");