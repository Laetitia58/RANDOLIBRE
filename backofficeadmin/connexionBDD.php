<?php

try{  
    $db=new PDO("mysql:host=localhost;dbname=randolibre;charset=utf8","root", "");
    $db->exec("SET NAMES 'UTF8'");
}
catch(PDOException $e){
    echo "erreur de connexion:" . $e->getMessage();
    die();
}
