<?php

define('ACC', true);
require('init.php');

$msg = new msgModel();
$cats = catModel::getCatTree();

$threads = array();

foreach ($cats as $k => $v) {
	$threads[$v['id']] = $msg->getTopThreads(0, $v['id'], 5);
}

//view
require(ROOT . "view/$template_dir/index.php");