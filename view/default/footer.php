<?php defined('ACC') || exit('ACC Denied');
$isLogin = userModel::isLogin(); ?>
<footer class="wrap">
	<ul>
		<a href="./">首页</a>
		<?php if (!$isLogin) { ?>
			<li><a href="./login.php#login">登陆</a></li>
			<li><a href="./login.php#register">注册</a></li>
		<?php } else { ?>
			<li class="hidden-xs curr-login">当前登陆:
				<?php echo $_SESSION['nickname']; ?>
			</li>
			<li><a href="./ucenter.php">个人中心</a></li>
			<li><a href="./logout.php">退出登陆</a></li>
		<?php } ?>
		<a href="./ucenter.php?cat=2">我的订阅</a>
		<a href="./post.php?id=<?php echo $report_tid; ?>">违规内容举报</a>
	</ul>
</footer>