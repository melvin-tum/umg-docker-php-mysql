<?php 

$host = 'localhost';
$user = 'root';
$db = 'dbname';
$pass = 'test';

    try {
        //$pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pass);
        $pdo = mysqli_connect('db', 'root', 'test', "dbname");
        //$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo $e->getMessage();
        'error: '.$e->getMessage();
    }