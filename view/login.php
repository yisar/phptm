<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录/注册</title>
    <link rel="stylesheet" href="view/style.css">
</head>

<body>
    <style>
        h1{
            font-weight: normal;
            color: var(--red);
            font-size: 22px;
            text-align: center;
        }
        .tabmenu {
            position: absolute;
            top: 0;
            margin: 0;
            left: 50%;
            transform: translate(-50%, 0);
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
            height: 300px;
            padding: 10px;
            background: #f1f4f7;
            left: 50%;
            transform: translate(-50%, 0);
        }

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
                    <form action="act/register.php" method="POST">
                        <li>
                            <input type="text" name="email" maxlength="30" placeholder="如 admin@clicli.us">
                        </li>
                        <li>
                            <input name="nickname" disabled placeholder="初始为无名氏">
                            <input type="hidden" name="nickname" value="无名氏">
                        </li>
                        <li>
                            <input type="password" name="password" maxlength="30" placeholder="">
                        </li>
                        <li>
                            <button>注册</button>

                        </li>
                    </form>

                </div>
            </div>
            <div id="login" class="tab_content">
                <h1>登录</h1>
                <div class="editor">
                    <form action="act/login.php" method="POST">
                        <li>
                            <input type="text" name="email" maxlength="30" placeholder="如 admin@clicli.us">
                        </li>
                        <li>
                            <input type="password" name="password" maxlength="30" placeholder="">
                        </li>
                        <li>
                            <button>登录</button>
                        </li>
                    </form>

                </div>
            </div>
        </div>
    </main>
</body>

</html>