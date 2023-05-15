<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录</title>
    <link rel="stylesheet" href="view/default/style.css">
</head>

<body>
    <style>
        .tabmenu {
            position: absolute;
            top: 0;
            margin: 0;
        }

        .tabmenu li {
            display: inline-block;
        }

        .tabmenu li a {
            display: block;
            padding: 2px 10px;
            margin: 10px;
            background: #ea8;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
        }

        .tablist {
            position: relative;
            margin: 50px auto;
            width: 100%;
        }

        .tab_content {
            position: absolute;
            top: 50px;
            width: 600px;
            height: 300px;
            padding: 10px;
            background: #ffe;
        }

        /*使用css3(:target属性实现)，z-index控制元素层级*/
        #register:target,
        #login:target {
            z-index: 1;
        }

        .editor {
            width: auto;
            justify-content: left;
        }

        .editor li:last-child {
            height: auto;
        }


        main {
            padding: 20px;
        }
    </style>
    <main>
        <div class="tablist">
            <ul class="tabmenu">
                <li><a href="#register">注册</a></li>
                <li><a href="#login">登录</a></li>
            </ul>
            <div id="register" class="tab_content">
                <h1>注册</h1>
                <div class="editor">
                    <form action="regAct.php" method="POST">
                        <li>
                            <h2>用户名:</h2>
                            <input type="text" name="username" maxlength="30" placeholder="如 zhangsan">
                        </li>
                        <li>
                            <h2>昵称:</h2>
                            <input name="nickname" disabled placeholder="初始为无名氏">
                            <input type="hidden" name="nickname" value="无名氏">
                        </li>
                        <li>
                            <h2>密码:</h2>
                            <input type="password" name="password" maxlength="30" placeholder="">
                            <button>注册</button>
                        </li>
                    </form>

                </div>
            </div>
        <div id="login" class="tab_content">
            <h1>登录</h1>
            <div class="editor">
                <form action="loginAct.php" method="POST">
                    <li>
                        <h2>用户名:</h2>
                        <input type="text" name="username" maxlength="30" placeholder="如 zhangsan">
                    </li>
                    <li>
                        <h2>密码:</h2>
                        <input type="password" name="password" maxlength="30" placeholder="">
                        <button>登录</button>
                    </li>
                </form>

            </div>
        </div>
        </div>
    </main>
</body>

</html>