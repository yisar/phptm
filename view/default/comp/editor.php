<div class="editor">
    <form action="<?php
    echo $pathname === 'thread' ? 'newpost.php' : 'newreply.php'
        ?>" method="POST">
        <li>
            <?php include(ROOT . 'view/default/textface.html'); ?>
        </li>
        <?php
        if ($pathname === 'thread') {
            echo '<li>
            <input placeholder="标题" name="title"></input>
        </li>';
        } ?>
        <li>
            <textarea id="content" placeholder="正文内容" name="content"></textarea>
        </li>
        <li>
            <button>发送</button>
        </li>
        <input type="hidden" name="id" value="<?php echo $pathname === 'thread' ? $cid : $tid; ?>">
    </form>

</div>