<?php

session_start();

define("ROOT", $_SERVER['DOCUMENT_ROOT']);



require_once "lib/functions.php";

require_once "bd.php";

$reg_c->arraybd

    ->user

    ->site;

//    ->dir('/blogery')

//    ->old;



show_err();

// читаем урл и создаем массив разбивая его по '/'

$url = $_SERVER['REQUEST_URI'];

//отсекаем GET

$clear_url = explode("?", $url);

//разделяем урл

$pieces_url = explode("/", $clear_url[0]);

///////////////////





//dumpx($_COOKIE);

//dumpx($_SESSION);





$user = new User();

$goods = new Goods();

$site = new Site();

$site->my_email = 'royspost2019@gmail.com';

$site->my_email_pass = 'dima13572468';





$user->createTempUser();

$goods->loadAllGoods();

$user->loadUser();

$user->createUser();

$user->loadCart();

$user->checkCart();

$site->sendZayavka();





require_once "resource/views/header.php";





//если урл пустой обычно содержыт '/' то подключаем шаблон главной страницы

if ($url == '/' or $pieces_url[1] == '') {

    require_once "resource/views/main.php";
} //если урл не пустой то читаем его первый елемент и подключаем нужный шаблон

else {



    //проверяем есть ли такой файл в шаблонах если есть подключаем

    //если нету выводим шаблон 404

    if (file_exists("resource/views/" . $pieces_url[1] . ".php")) {

        require_once "resource/views/" . $pieces_url[1] . ".php";
    } else {

        require_once "resource/views/404.php";
    }
}

require_once "resource/views/footer.php";
