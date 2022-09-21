<?php
session_start();
try{
    $database="mysql:dbname=clinic-mgt";
    $username="root";
    $password="";
    $conn = new PDO($database, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $_SESSION['conn'] = $conn;
}catch (Exception $ex){
    echo $ex;
}
?>
