<?php

    $dbhost = '127.0.0.1:3307';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'ofw_tulong';

    $dsn = "mysql:host=$dbhost;dbname=$dbname;charset=UTF8";

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        // if($pdo){
        //     echo "Connected to the $dbname database is successful";
        // }
    } catch(PDOException $e){
        die($e->getMessage());
    }