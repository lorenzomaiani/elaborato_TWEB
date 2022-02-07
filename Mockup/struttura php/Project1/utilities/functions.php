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

    function getTime(){
        $time = date("H");

        if($time <= 12){
            return "Goodmorning";
        }
        elseif($time > 12 && $time < 18){
            return "Good Afternoon";
        }
        else{
            return "Goodevening";
        }
    }
    
?>