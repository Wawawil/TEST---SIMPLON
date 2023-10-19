<?php
    define('HOST','localhost');
    define('DB_NAME','simplon');
    define('USER','root');
    define('PASS','');
/* Connection */
    try{
    $db = new PDO('mysql:host=' .HOST .';dbname=' .DB_NAME, USER, PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $error){
    echo $error;
    }

?>