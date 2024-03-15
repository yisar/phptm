<?php defined('ACC') || exit('ACC Denied'); ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $curr_cat['cat_name'], ' - ', SITENAME; ?>
    </title>
    <link rel="stylesheet" href="view/default/style.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/c/font_4066894_lfnqwuus5os.css">
    <script src="https://npm.elemecdn.com/snarkdown@2.0.0/dist/snarkdown.umd.js"></script>
</head>

<body>
    <?php require(ROOT . 'view/default/header.php'); ?>
    <main class="wrap">
        <style>
            body {
                background: #75a99b;
            }
        </style>
        <ul class="thread">
            <?php foreach ($threads as $k => $t) { ?>
                <div class="item" tid="<?php echo $t['tid']; ?>">
                    <h1>
                        <?php echo $t['title']; ?>
                    </h1>
                    <div class="info">
                        <div class="user">
                            <span>
                                <?php echo $t['name']; ?>
                            </span>
                            <time>
                                <?php echo date('Y-m-d H:i', $t['pubtime']); ?>
                            </time>
                        </div>
                        <?php require(ROOT . 'view/default/comp/action.php') ?>
                    </div>
                    <article>
                        <pre><?php echo $t['content'] ?></pre>
                    </article>
                </div>
            <?php } ?>
            <?php require(ROOT . 'view/default/comp/editor.php') ?>
            </div>
        </ul>
    </main>
    <?php require(ROOT . 'view/default/footer.php') ?>
</body>

</html>