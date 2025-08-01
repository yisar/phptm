<?php defined('ACC') || exit('ACC Denied'); ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width" />
    <title>
        <?php echo $user['nickname'] ?> 的用户中心
    </title>
    <link rel="stylesheet" href="view/style.css">
    <style>
        body {
            background: #F1F4F7 !important;
        }
    </style>
</head>

<body>
    <?php require(ROOT . 'view/header.php'); ?>
    <main class="ucenter">
        <div class="info">
            <img src="<?php echo 'https://cdn.sep.cc/avatar/' . md5($user['email']) ?>" alt="">
            <h1>
                <?php echo $user['nickname'] ?>
            </h1>
            <p>注册日期：
                <?php echo date('Y-m-d', $user['regtime']); ?>
            </p>
            <p>上次登录：
                <?php echo date('Y-m-d', $user['lastlogin']); ?>
            </p>
        </div>
        <nav>
            <li <?php echo $cat == 1 ? 'class="active" ' : '' ?>><a href="./user.php?cat=1">Post</a></li>
            <?php if ($self) { ?>
                <li <?php echo $cat == 2 ? 'class="active" ' : '' ?>><a href="./user.php?cat=2">Subscription</a></li>
                <li <?php echo $cat == 3 ? 'class="active" ' : '' ?>><a href="./user.php?cat=3">Setting</a></li>
            <?php } ?>
        </nav>
        <div class="list wrap">
            <?php
            $arr = $self ? array('thread', 'thread', 'user_setting') : array('thread');
            require(ROOT . 'view/' . $arr[$cat - 1] . '.php');
            ?>
        </div>
    </main>
</body>

</html>