<div class="editor">
    <form action="<?php
    echo $pathname === 'thread' ? 'act/newpost.php' : 'act/newreply.php'
        ?>" method="POST">
        <li>
            <?php include(ROOT . 'view/textface.html'); ?>
        </li>
        <?php
        if ($pathname === 'thread') {
            echo '<li>
            <input placeholder="标题" name="title"></input>
        </li>';
        } ?>
        <li>
            <textarea id="content" placeholder="正文内容"
                name="content"><?php echo isset($_GET['reply']) ? strip_tags($_GET['reply']) : ''; ?></textarea>
        </li>
        <li>
            <button>发送</button>
        </li>
        <input type="hidden" name="id" value="<?php echo $pathname === 'thread' ? $cid : $tid; ?>">
    </form>

</div>