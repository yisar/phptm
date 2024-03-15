<?php defined('ACC') || exit('ACC Denied'); ?>

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
                    href="post.php?id=<?php echo $report_tid; ?>&reply=%3e%3e<?php echo $t['tid'] ?>">举报</a>]</span>
            <span>[<a target="_blank" href="subscribe.php?tid=<?php echo $t['tid'] ?>"><?php echo subscriptionModel::isSubscribed($t['tid']) ? '取消订阅' : '订阅'; ?></a>]</span>
        <?php } ?>
        <?php if (userModel::isLogin() && $_SESSION['type'] > 0) { ?>
            <span>[<a target="_blank" href="edit.php?tid=<?php echo $t['tid'] ?>">编辑</a>]</span>
            <span>[<a onclick="if(!confirm('要<?php echo $t['SAGE'] == 1 ? '解除' : ''; ?>SAGE吗?')){return false;};"
                    href="sage.php?tid=<?php echo $t['tid'] ?>"><?php echo $t['SAGE'] == 1 ? '解除' : ''; ?>SAGE</a>]</span>
            <span>[<a onclick="if(!confirm('确实要删除吗?')){return false;};"
                    href="delete.php?tid=<?php echo $t['tid'] ?>">删除</a>]</span>
        <?php } ?>
        <span>[<a target="_blank" href="post.php?id=<?php echo $t['tid']; ?>">回应</a>]</span>
        <p>
            <?php echo $t['content']; ?>
        </p>
        <b>最新回复时间：<?php echo date('Y-m-d H:i:s', $t['lastreptime']);?></b>
    </div>
<?php } ?>
<?php require('view/default/pagination.php'); ?>