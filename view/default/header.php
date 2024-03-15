<?php defined('ACC') || exit('ACC Denied');
$isLogin = userModel::isLogin(); ?>

<header>
	<div class="wrap">
		<nav>
			<a href="/">
				<h1></h1>
			</a>
			<ul>
				<?php if (!$isLogin) { ?>
					<li><a href="./login.php#login">登陆</a></li>
					<li><a href="./login.php#register">注册</a></li>
				<?php } else { ?>
					<li>
						<?php echo $_SESSION['nickname']; ?>
					</li>
					<li><a href="./ucenter.php">个人中心</a></li>
					<li><a href="./logout.php">退出登陆</a></li>
				<?php } ?>
				<a href="./ucenter.php?cat=2">我的订阅</a>
			</ul>
		</nav>
	</div>
</header>