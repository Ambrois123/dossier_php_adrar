<?php

try{

    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_server;charset=utf8', 'formation_adrar', 'formation_adrar');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('INSERT INTO users (user_email, user_role, user_password, user_phone, user_gender) 
    VALUES
    ("embrois@gmail.com", "admin", "adrar", "0263547841", "1"),
    ("axels@gmail.com", "visiteur", "adrar", "0263547841", "2"),
    ("dupont@gmail.com", "visiteur", "adrar", "0263547841", "1"),
    ("arthur@gmail.com", "visiteur", "adrar", "0263547841", "1"),
    ("gisele@gmail.com", "client", "adrar", "0263547841", "2"),
    ("charles@gmail.com", "client", "adrar", "0263547841", "1")
    ');

}catch(PDOException $e){

    echo $e->getMessage();
}