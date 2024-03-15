<?php

define('ACC',true);
require('init.php');

$pathname = 'post';

//实例化留言板操作类
$msg = new msgModel();

//取得被回复主题tid
empty($_GET['id']) && showMsg('参数错误!', true, './');
$tid = (int)$_GET['id'];

//取得被回复主题
($tmp = $msg->getThread($tid)) || showMsg('参数错误!', true, './');
$threads = array();
$threads[]=$tmp;

$curr_page = empty($_GET['page']) ? 1 : (int) $_GET['page'];

//取得每个主题10个以内回复
$replies = array();
$get = $msg->getTopReplies($tid, ($curr_page-1)*10, 10);
$replies[0] = $get?$get:array();

//view
require(ROOT . "view/$template_dir/post.php");
