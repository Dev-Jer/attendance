<?php 
    //local development connection variables
    //$host = '127.0.0.1';
    //$db = 'attendace_db';
    //$user = 'root';
    //$pass = '';
    //$charset = 'utf8mb4';

    //Remote connection
    $host = 'remotemysql.com';
    $db = 'pjUA3csHl3';
    $user = 'pjUA3csHl3';
    $pass = '33de8zmwby';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);

?>