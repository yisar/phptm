<?php defined('ACC') || exit('ACC Denied'); ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo SITENAME ?>
    </title>
    <link rel="stylesheet" href="view/default/style.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/c/font_4066894_lfnqwuus5os.css">
</head>

<body>
    <?php require(ROOT . 'view/default/header.php'); ?>
    <main>
        <ul class="wrap">
            <?php foreach ($cats as $_cat) { ?>
                <section class="cat">
                    <div class="title">
                        <a href="./thread.php?id=<?php echo $_cat['id']; ?>">
                            <?php echo $_cat['cat_name']; ?>
                        </a>
                    </div>
                    <div class="list">
                        <?php foreach ($threads[$_cat['id']] as $i => $t) { ?>
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
                                            <?php echo $t['content'] ?>
                                        </p>
                                    </a>
                                    <span>
                                        <?php echo date('m-d H:i', $t['pubtime']); ?>
                                    </span>
                                </div>

                            </div>
                        <?php } ?>
                    </div>
                </section>
            <?php } ?>
        </ul>
    </main>
    <?php require(ROOT . 'view/default/footer.php') ?>
</body>

</html>