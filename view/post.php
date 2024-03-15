<?php defined('ACC') || exit('ACC Denied'); ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $threads[0]['title'], ' - ', SITENAME; ?>
    </title>
    <link rel="stylesheet" href="view/style.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/c/font_4066894_lfnqwuus5os.css">
    <style>
        body {
            background: #75a99b;
        }
    </style>
</head>

<body>
    <?php require(ROOT . 'view/header.php'); ?>
    <main class="wrap">
        <ul class="thread pd">
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
                                发表于
                                <?php echo date('Y-m-d H:i', $t['pubtime']); ?>
                            </time>
                        </div>
                        <?php require(ROOT . 'view/comp/action.php') ?>
                    </div>
                    <article>
                        <pre><?php echo $t['content'] ?></pre>
                    </article>
                </div>
                <?php foreach ($replies[$k] as $key => $value) {
                    ?>
                    <div class="item" floor="<?php echo $value['floor'], '>#', $value['floor']; ?>">
                        <div class="info">
                            <div class="user">
                                <span>
                                    <?php echo $value['name']; ?>
                                </span>
                                <time>
                                    发表于
                                    <?php echo date('Y-m-d H:i', $value['reptime']); ?>
                                </time>
                            </div>
                            <?php require(ROOT . 'view/comp/action.php') ?>
                        </div>
                        <article>
                            <pre><?php echo $value['content'] ?></pre>
                        </article>
                    </div>
                <?php } ?>
            <?php } ?>
            <?php require(ROOT . 'view/pagination.php') ?>
            <?php require(ROOT . 'view/comp/editor.php') ?>
            </div>
        </ul>
    </main>
    <?php require(ROOT . 'view/footer.php') ?>
</body>

</html>