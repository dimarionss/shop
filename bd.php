<?php
// подключение базы данных
$host = 'localhost';
$db   = 'roys';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);



// выполняем операции с базой данных

$statement = $pdo->prepare('Select * From goods');
$statement->execute();
$results = $statement->fetchAll();











//$sql_goods_on_id = $pdo->prepare('Select * From goods Where id = :id');
//
//
//
//$sql_goods_on_id->execute([
//    ':id' => 1
//]);
//$results = $statement->fetchAll();
//
//
//
//$sql_goods_on_id->execute([
//    ':id' => 6
//]);
//$results = $statement->fetchAll();
