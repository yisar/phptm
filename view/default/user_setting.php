<?php defined('ACC') || exit('ACC Denied'); ?>

<div class="editor">
    <form action="settingAct.php" method="POST">
        <li>
            <input type="text" name="email" maxlength="30" value="<?php echo $_SESSION['email']; ?>">
        </li>
        <li>
            <input name="nickname" type="text" value="<?php echo $_SESSION['nickname']; ?>">
        </li>
        <li>
            <input type="password" name="password" maxlength="30" placeholder="留空则不改">
        </li>
        <li>
            <button>修改</button>
        </li>
    </form>
</div>