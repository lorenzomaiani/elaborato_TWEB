<?php 

    function isUserLoggedIn(){
        return !empty($_SESSION["username"]);
    }

    function registerUser($user){
        $_SESSION["username"] = $user["username"];
        $_SESSION["id"] = $user["id"];
    }

    function addProductToCart($productname){
        $_SESSION["cart"] = $productname;
    }
?>