<?php
    $username = 'root';
    $password = '';
    try{
        $conn = new PDO
        ('mysql:host=localhost;dbname=BD_SFSTORE',
        $username,
        $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo 'Aconteceu o erro: ' 
        . $e->getMessage();
    }