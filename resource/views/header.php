<?php
if (isset($_GET['succ_message'])) {

    $succ_message = $_GET['succ_message'];

}



$pages = [

    '' => 'Главная',

    'shop' => 'Магазин',

    'blog' => 'Блог',

    'about' => 'О нас',

    'contact' => 'Контакты',

    'zayavka' => 'Заявка',

    'registration' => 'Регистрация',

    'cart' => 'Корзина <span class="prise-in-menu">' . $user->price . '</span>'

];





$title = 'Страница не найдена';

//сравниваем елемент массива и первый кусок урл если они совпдают то

//присваеваем title текущее значение массива

foreach ($pages as $key => $page_title) {

    if ($pieces_url[1] == $key) $title = $page_title;

}

//dumpx($user);

?>
<!DOCTYPE html>

<html>

<head>
    <title><?= @$title ?></title>

    <link rel="stylesheet" type="text/css" href="resource/public/css/style.css">

    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="resource/public/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="resource/public/js/JQuery.min.js"></script>

    <script type="text/javascript" src="resource/public/js/myscript.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu+Mono|VT323|" rel="stylesheet">



</head>

<body>

<?php

require_once "resource/views/authoriz.php" ?>

<!-------------------------Меню-header---------------------------------->

<header id="header1">

    <h1 class="logo">#KEPARIK</h1>

    <h5 align="center" style="text-shadow: 1px 1px 2px black, 0 0 1em #000000;">+38(093)334-44-21</h5>

    <h5 align="center" style="text-shadow: 1px 1px 2px black, 0 0 1em #000000;">royspost2019@gmail.com.ua</h5>

    <? if (isset($succ_message)) {

        $site->alertMessage('Поздравляю', $succ_message, 'save');

    } ?>

    <? if (isset($err_message)) {

        $site->alertMessage('Ошибка', $err_message, 'error');

    } ?>

    <? if ((!$user->loged)) { ?>

        <div class="authorize">



            <p>Вход/Регистрация</p>



        </div>

    <? } else { ?>

        <a href="/exit">

            <div class="authorize">



                <p>Выход</p>



            </div>

        </a>

    <? } ?>

    <div><a href="#" class="menu-toggle">Меню</a></div>

    <div id="mainmenu">

        <ul>

            <? foreach ($pages as $key => $page_title) { ?>

                <?php if ($key <> 'registration' && $key <> 'zayavka') { ?>

                    <li><a class="menu__links-item" href="/<?= $key ?>"><?= $page_title ?></a></li>

                <? } ?>

            <? } ?>



        </ul>

    </div>

</header>

<div class="clr"></div>

<div class="message">

    <div class="err">



    </div>



</div>

<!-------------------------Меню-header---------------------------------->

<div class="content"></div>