<?php

    $hostDetails = 'mysql:host=localhost; dbname=fb-social; charset=utf8mb4';
    $userAdmin = 'root';
    $pass = '';

    try{
        $pdo = new PDO($hostDetails,$userAdmin,$pass);
    } catch(PDOException $e){
        echo 'Connection error!' . $e->getMessage();
    }

?>
