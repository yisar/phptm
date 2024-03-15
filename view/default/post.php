<?php defined('ACC') || exit('ACC Denied'); ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo 'RID.', $threads[0]['tid'], ' - ', SITENAME; ?>
    </title>
    <link rel="stylesheet" href="view/default/style.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/c/font_4066894_lfnqwuus5os.css">
    <script src="https://npm.elemecdn.com/snarkdown@2.0.0/dist/snarkdown.umd.js"></script>
</head>

<body>
    <?php require(ROOT . 'view/default/header.php'); ?>
    <main>
        <style>
            body {
                background: radial-gradient(#591803, #fff6df);
            }
        </style>
        <ul class="thread wrap">
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

                </div>
                <?php foreach ($replies[$k] as $key => $value) {
                    ?>
                    <div class="item" floor="<?php echo $value['floor'], '>#', $value['floor']; ?>">
                        <div class="indent">
                            <span></span>
                            <span>
                                <?php echo $value['name']; ?>
                            </span>
                            <span>
                                <?php echo date('Y-m-d H:i:s', $value['reptime']); ?>
                            </span>
                            <span>ID:
                                <?php echo $ID; ?>
                            </span>
                            <?php echo $value['uid'] == $t['uid'] ? '<span class="text-po">(PO主)</span>' : ''; ?>
                            <span>[<a
                                    href="view.php?id=<?php echo $t['tid']; ?>&reply=%3e%3e<?php echo $t['tid'], '%3e', $value['floor']; ?>#reply">回应</a>]</span>
                            <article class="content" content="<?php echo $value['content']; ?>"></article>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            </div>

        </ul>

    </main>
    <?php require(ROOT . 'view/default/comp/editor.php') ?>
    <?php require(ROOT . 'view/default/footer.php') ?>
</body>

</html>