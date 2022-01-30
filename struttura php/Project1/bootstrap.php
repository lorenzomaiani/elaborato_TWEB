<?php 
    session_start();
    //Connection to database
    require_once("db/database.php");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sitoweb";
    $port = "3306";

    $db = new DataBase($servername, $username, $password, $dbname, $port);
    //Define constant value

    //Function
    require_once("utilities/functions.php");
?>