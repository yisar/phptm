<?php

defined('ACC') || exit ('ACC Denied');
//递归转义数组
function _addslashes($arr)
{
	foreach ($arr as $key => $val) {
		$arr[$key] = is_array($val) ? _addslashes($val) : addslashes($val);
	}
	return $arr;
}

function showMsg($msg, $flag = true, $isAutoGo = false, $url = '', )
{
	$icon = $flag ? ':)' : ':(';
	if ($url == '') {
		$url = isset ($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'javascript:history.back(-1);';
	}
	if ($msg == '404') {
		header("HTTP/1.1 404 Not Found");
		$msg = '抱歉，你所请求的页面不存在！';
	}
	echo <<<EOT
	<!DOCTYPE html>
	<html lang="zh">
	<head>
EOT;
	if ($isAutoGo) {
		echo "<meta http-equiv=\"refresh\" content=\"1.25;url=$url\" />";
	}

	echo <<<EOT
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>提示信息</title>
</head>

<body>
    <style>
        * {margin: 0;padding: 0;}

        body {color: #ea8;background: #F1F4F7;}

        h1 {font-size: 100px;}

        p {margin: 10px 0;}

        b,a {font-size: 12px;color: #bbb;font-weight: normal;}

        main {padding: 20px;}
    </style>
    <main>
        <h1>$icon</h1>
		<p>$msg</p>
EOT;
	if (!$isAutoGo) {
		echo '<b><a href="' . $url . '">点击返回</a></b>';
	} else {
		echo '<b>自动跳转中……</b>';
	}
	echo <<<EOT
    </main>
</body>
</html>
EOT;
	exit;
}