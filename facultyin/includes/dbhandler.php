<?php

$dsn = 'mysql:host=localhost; dbname=tgmanagement; charset=utf8';
$username = 'root';
$password = '';

try{
    $pdo = new PDO($dsn,$username,$password);
    //configuring the connection.
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // echo "Connection Established";
} catch(PDOException $e) {
    echo "Something went wrong";
}