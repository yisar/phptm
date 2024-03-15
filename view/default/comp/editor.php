<div class="editor">
    <form action="newreply.php" method="POST">
        <li>
            <?php include(ROOT . 'view/default/textface.html'); ?>
        </li>
        <li>
            <textarea id="content" placeholder="支持markdown语法"
                name="content"><?php echo isset($_GET['reply']) ? strip_tags($_GET['reply']) : ''; ?></textarea>
        </li>
        <li>
            <button>发送</button>
        </li>
        <input type="hidden" name="tid" value="<?php echo $tid; ?>">
    </form>

</div>