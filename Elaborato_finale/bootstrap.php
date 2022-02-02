<?php
    session_start();
    //Connection to database
    require_once("db/database.php");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sitoweb";
    $port = "8080";

    $db = new DataBase($servername, $username, $password, $dbname, $port);
    
    //Function
    require_once("utilities/functions.php");
?>