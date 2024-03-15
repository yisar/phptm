<?php defined('ACC') || exit('ACC Denied');
$isLogin = userModel::isLogin(); ?>
<footer class="wrap">
	<ul>
		<a href="./">首页</a>
		<a href="./post.php?id=<?php echo $report_tid; ?>">违规内容举报</a>
	</ul>
</footer>