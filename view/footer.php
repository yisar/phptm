<?php defined('ACC') || exit('ACC Denied');
$isLogin = userModel::isLogin(); ?>
<footer class="wrap">
	<ul>
		<li>©2025 fubook.net & admin@danmu.org</li>
		<a href="./post.php?id=<?php echo $report_tid; ?>">违规内容举报</a>
	</ul>
</footer>