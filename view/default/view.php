<?php defined('ACC') || exit('ACC Denied'); ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $curr_cat['cat_name'], ' - ', SITENAME;
        ; ?>
    </title>
    <link rel="stylesheet" href="view/default/style.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/c/font_4066894_lfnqwuus5os.css">
</head>

<body>
    <header>
        <!-- <h1>头部</h1> -->
    </header>
    <main>
        <div class="menu">
            <div class="logo">
                <a href="/">
                </a>
            </div>
            <?php require(ROOT . 'view/default/menu.php'); ?>
        </div>
        <div class="body">

            <div class="list">
                <?php

                foreach ($threads as $k => $t) {
                    ?>
                    <div class="item" tid="<?php echo $t['tid']; ?>">
                        <span>
                            <?php echo $t['title']; ?>
                        </span>
                        <span>
                            <?php echo $t['name']; ?>
                        </span>
                        <span>
                            <?php echo date('Y-m-d H:i:s', $t['pubtime']); ?>
                        </span>
                        <?php $ID = $t['type'] > 0 ? userModel::getUsername($t['uid']) : substr(md5($t['uid'] . $t['title'] . $t['tid']), -8); ?>
                        <span>ID:
                            <?php echo $ID; ?>
                        </span>
                        <?php if (userModel::isLogin()) { ?>
                            <span>[<a target="_blank"
                                    href="view.php?id=<?php echo $report_tid; ?>&reply=%3e%3e<?php echo $t['tid'] ?>">举报</a>]</span>
                            <span>[<a target="_blank" href="subscribe.php?tid=<?php echo $t['tid'] ?>"><?php echo subscriptionModel::isSubscribed($t['tid']) ? '取消订阅' : '订阅'; ?></a>]</span>
                        <?php } ?>
                        <?php if (userModel::isLogin() && $_SESSION['type'] > 0) { ?>
                            <span>[<a target="_blank" href="edit.php?tid=<?php echo $t['tid'] ?>">编辑</a>]</span>
                            <span>[<a
                                    onclick="if(!confirm('要<?php echo $t['SAGE'] == 1 ? '解除' : ''; ?>SAGE吗?')){return false;};"
                                    href="sage.php?tid=<?php echo $t['tid'] ?>"><?php echo $t['SAGE'] == 1 ? '解除' : ''; ?>SAGE</a>]</span>
                            <span>[<a onclick="if(!confirm('确实要删除吗?')){return false;};"
                                    href="delete.php?tid=<?php echo $t['tid'] ?>">删除</a>]</span>
                        <?php } ?>
                        <span>[<a target="_blank" href="view.php?id=<?php echo $t['tid']; ?>">回应</a>]</span>
                        <p>
                            <?php echo $t['content']; ?>
                        </p>
                        <?php echo $t['SAGE'] == 0 ? '' : '<p><i class="iconfont icon-cai"></i> 本串已经被SAGE（<abbr  title="该串不会因为新回应而被顶到页首">?</abbr>）</p>' ?>
                        <?php
                        $reply_num = $msg->countReplies($t['tid']);
                        if ($reply_num - 5 > 0) {
                            echo '<p style="color:#707070"><i class="iconfont icon-jia"></i> 提示: 回应有' . ($reply_num - 5) . '篇被省略。要阅读所有回应请按下回应链接。</p>';
                        }
                        ?>
                    </div>
                    <?php foreach ($replies[$k] as $key => $value) {
                        ?>
                        <div class="item" floor="<?php echo $value['floor'], '>#', $value['floor']; ?>">
                            <div class="indent">
                                <span></span>
                                <span>
                                    <?php echo $value['name']; ?>
                                </span>
                                <span>
                                    <?php echo date('Y-m-d H:i:s', $value['reptime']); ?>
                                </span>
                                <span>ID:
                                    <?php echo $ID; ?>
                                </span>
                                <?php echo $value['uid'] == $t['uid'] ? '<span class="text-po">(PO主)</span>' : ''; ?>
                                <span>[<a
                                        href="view.php?id=<?php echo $t['tid']; ?>&reply=%3e%3e<?php echo $t['tid'], '%3e', $value['floor']; ?>#reply">回应</a>]</span>
                                <p>
                                    <?php echo $value['content']; ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
                <h2 style="text-align:center">回应：
                    <?php echo 'RID.', $threads[0]['tid']; ?>
                </h2>
                <div class="editor">

                    <form action="newreply.php" method="POST">
                        <li>
                            <?php include(ROOT . 'view/default/textface.html'); ?>
                            <button>送出</button>

                        </li>
                        <li>
                            <h2>正文:</h2>
                            <textarea id="content" name="content"><?php echo isset($_GET['reply'])?strip_tags($_GET['reply']):'';?></textarea>
                        </li>
                        <input type="hidden" name="cat" value="<?php echo $threads[0]['tid']; ?>">
                    </form>

                </div>
                <div class="bangui">
                    <ol>
                        <li>大家好久不贱</li>
                        <li>请大家保持政治中立，不然可能会被请去喝茶哦</li>
                    </ol>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <ul><a href="">
                <li>首页班规</li>
            </a><a href="">
                <li>用户系统</li>
            </a><a href="">
                <li>APP下载</li>
            </a>
            </div>
</body>

</html>