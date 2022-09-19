<?php

$db_host = 'localhost';
$db_name = 'test1';     //技術長是test
$db_user = 'root';       //技術長是root_YU
$db_pass = '123456';     //技術長是root

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";


$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$pdo = new PDO($dsn,$db_user,$db_pass,$pdo_options);


if(!isset($_SESSION)){
    session_start();
}


?>