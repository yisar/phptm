<?php defined('ACC') || exit('ACC Denied'); ?>

<div class="editor">
    <style>
        .editor li:last-child {
            height: auto;
        }
    </style>
    <form action="settingAct.php" method="POST">
        <li>
            <h2>邮箱:</h2>
            <input type="text" name="email" maxlength="30" value="<?php echo $_SESSION['email'];?>">
        </li>
        <li>
            <h2>昵称:</h2>
            <input name="nickname" type="text" value="<?php echo $_SESSION['nickname'];?>">
        </li>
        <li>
            <h2>密码:</h2>
            <input type="password" name="password" maxlength="30" placeholder="留空则不改">
            <button>修改</button>
        </li>
    </form>
</div>