<?php

function tpd_connect(){
    $server = 'localhost';
    $dbname = 'practicaldiva';
    $username = 'tpd_user';
    $password = 'yrW5SueG9hKXDwHj';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try {
        $link = new PDO($dsn, $username, $password, $options);
        // if(is_object($link)){
        //     echo "It Worked!";
        // }
        return $link;
    }catch(PDOException $e){
        //echo "It didn't work, error: " . $e->getMessage();
        header("Location: /practicaldiva/views/500.php");
        exit;
    }
}
tpd_connect()
?>