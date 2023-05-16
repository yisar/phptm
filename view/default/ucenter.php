<?php defined('ACC') || exit('ACC Denied'); ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width" />
    <title>
        <?php echo $_SESSION['username'] ?> 的用户中心
    </title>
    <link rel="stylesheet" href="view/default/style.css">
</head>

<body>
    <?php require(ROOT . 'view/default/header.php'); ?>
    <main class="ucenter">
        <div class="info">
            <img src="<?php echo 'https://cdn.sep.cc/avatar/' . md5($_SESSION['email']) ?>" alt="">
            <h1>
                <?php echo $_SESSION['username'] ?>
            </h1>
            <p>注册日期：
                <?php echo date('Y-m-d', $_SESSION['regtime']); ?>
            </p>
            <p>上次登陆：
                <?php echo date('Y-m-d', $_SESSION['lastlogin']); ?>
            </p>
        </div>
        <nav>
            <li <?php echo $cat == 1 ? 'class="active" ' : '' ?>><a href="./ucenter.php?cat=1">讨论串</a></li>
            <li <?php echo $cat == 2 ? 'class="active" ' : '' ?>><a href="./ucenter.php?cat=2">订阅串</a></li>
            <li <?php echo $cat == 3 ? 'class="active" ' : '' ?>><a href="./ucenter.php?cat=3">信息设定</a></li>
        </nav>
        <div class="list wrap">
            <?php
            $arr = array('threads', 'order', 'setting');
            require(ROOT . 'view/default/ucenter_' . $arr[$cat - 1] . '.php');
            ?>
        </div>
    </main>
    <?php require(ROOT . 'view/default/footer.php'); ?>
</body>

</html>