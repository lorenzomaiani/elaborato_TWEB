<?php
    require_once("bootstrap.php");

    if(isset($_POST["username"]) && isset($_POST["password"])){
        $loginAccess = $db->checkLogin($_POST["username"], $_POST["password"]);
        if(count($loginAccess) != 0){
            registerUser($loginAccess[0]);
        }
    }

    if(isUserLoggedIn() && $_SESSION["username"] == "Admin"){
        $params["content"] = "adminLogin.php";   #pagina principale admin
        $params["title"] = "Admin";
        $params["mainTitle"] = "Admin";
        $params["user"] = "Admin";
        $params["showLogin"] = "yes";
    }

    else if(isUserLoggedIn()){
        $params["content"] = "template/homepageUser.php";   #pagina principale utente
        $params["script"] = "yes";
        $params["title"] = "Homepage - ".$_SESSION["username"];
        $params["mainTitle"] = "Homepage";
        $params["user"] = $_SESSION["username"];
        $params["product"] = $db->getSomeProduct(4);
        $params["showShop"] = "yes";
        $params["showsubtitle"] = "yes";
        $params["timeString"] = getTime();

    }
    
    else{
        $params["content"] = "template/loginContent.php";  #form per il login base
        $params["title"] = "Login";
    }

    require_once("template/base.php");
?>