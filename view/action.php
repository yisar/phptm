<div class="action">
    <?php $uid = empty($value)? $t['uid'] : $value['uid']?>
    <?php $f = empty($value)? '0': $value['floor']?>
    <?php if (userModel::isLogin()) { ?>
        <span>[<a target="_blank"
                href="post.php?id=<?php echo $report_tid; ?>&reply=> <?php echo $t['tid'] ?>">举报</a>]</span>
        <span>[<a target="_blank" href="act/subscribe.php?tid=<?php echo $t['tid'] ?>">
                <?php echo subscriptionModel::isSubscribed($t['tid']) ? "取消订阅" : "订阅" ?>
            </a>]</span>
    <?php } ?>

    <?php if (userModel::isLogin() && $_SESSION['type'] > 0) { ?>
        <span>[<a onclick="if(!confirm('要<?php echo $t['SAGE'] == 1 ? '解除' : ''; ?>SAGE吗?')){return false;};"
                href="act/sage.php?tid=<?php echo $t['tid'] ?>">
                <?php echo $t['SAGE'] == 1 ? '解除' : ''; ?>SAGE
            </a>]</span>
    <?php } ?>

    <?php if ($t['tid'] != $tid) { ?>
        <span>[<a target="_blank" href="post.php?id=<?php echo $t['tid']; ?>">回应</a>]</span>
    <?php } ?>

    <?php if (userModel::isLogin()) { ?>
        <?php if ($_SESSION['type'] > 0 || $uid == $_SESSION['uid']) { ?>
            <span>[<a target="_blank" href="act/edit.php?tid=<?php echo $t['tid'] ?>">编辑</a>]</span>
            <span>[<a onclick="if(!confirm('确实要删除吗?')){return false;};"
                    href="act/delete.php?tid=<?php echo $t['tid'] ?>&f=<?php echo $f ?>">删除</a>]</span>
        <?php }
    } ?>

    <?php echo $t['SAGE'] == 0 ? '' : '<p><i class="iconfont icon-cai"></i> 本串已经被SAGE</p>' ?>
</div>