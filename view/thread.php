<?php defined('ACC') || exit('ACC Denied'); ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $curr_cat['name'], ' - ', SITENAME; ?>
    </title>
    <link rel="stylesheet" href="view/style.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/c/font_4066894_lfnqwuus5os.css">
</head>

<body>
    <?php if ($pathname == 'thread') { ?>
        <?php require(ROOT . 'view/header.php'); ?>
    <?php } ?>
    <main class="wrap">
        <section class="thread">
            <ul class="list">
                <?php foreach ($threads as $k => $t) { ?>
                    <div class="item">
                        <div>
                            <a href="./post.php?id=<?php echo $t['tid']; ?>">
                                <h1>
                                    <?php echo $t['title'] ?>
                                </h1>
                            </a>
                            <a href="./user.php?uid=<?php echo $t['uid'] ?>">
                                <p>
                                    <?php echo $t['name'] ?>
                                </p>
                            </a>
                        </div>
                        <div>
                            <a href="./post.php?id=<?php echo $t['tid']; ?>">
                                <p>
                                    <?php echo mb_substr($t['content'], 0, 20) . '...' ?>
                                </p>

                            </a>
                            <span>
                                <?php echo date('m-d H:i', $t['pubtime']); ?>
                            </span>
                        </div>

                    </div>
                <?php } ?>
                <?php require(ROOT . 'view/pagination.php') ?>
                <?php if ($pathname == 'thread') { ?>
                    <?php require(ROOT . 'view/editor.php') ?>
                <?php } ?>
        </section>
        </ul>
        </div>

    </main>
    <?php require(ROOT . 'view/footer.php') ?>
</body>

</html>