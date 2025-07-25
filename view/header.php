<?php defined('ACC') || exit('ACC Denied');
$isLogin = userModel::isLogin(); ?>

<header>
	<div class="wrap">
		<nav>
			<a href="/">
				<?php echo SITENAME ?>
			</a>
			<ul>
				<?php if (!$isLogin) { ?>
					<li><a href="./login.php#login">登录</a></li>
					<li><a href="./login.php#register">注册</a></li>
				<?php } else { ?>
					<li>
						<?php echo $_SESSION['nickname']; ?>
					</li>
					<li><a href="./user.php">个人中心</a></li>
					<li><a href="./act/logout.php">退出登录</a></li>
				<?php } ?>
				<a href="./user.php?cat=2">我的订阅</a>
			</ul>
		</nav>
	</div>
</header>