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
            <textarea id="content" placeholder="支持markdown语法"
                name="content"><?php echo isset($_GET['reply']) ? strip_tags($_GET['reply']) : ''; ?></textarea>
        </li>
        <input type="hidden" name="tid" value="<?php echo $threads[0]['tid']; ?>">
    </form>

</div>