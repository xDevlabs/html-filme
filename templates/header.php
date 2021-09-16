<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php assets('css/styles.css')?>">
    <title><?php echo isset($page_title)?$page_title:'New Document'?></title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__left">
            <a href="#">
                <figure>
                    <img src="<?php assets('images/logo.svg')?>" alt="">
                </figure>
            </a>
            
            <form action="#">
                <input type="text" placeholder="Search">
            </form>
        </div>

        <div class="header__right">
            <a href="#" class="btn btn-outline">ログイン</a>
            <a href="#" class="btn btn-primaary">新規登録</a>
        </div>
    </div>
</header>