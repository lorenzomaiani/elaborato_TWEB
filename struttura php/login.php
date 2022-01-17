<?php 
    require_once("bootstrap.php");
    $_SESSION["cookie"] = "On";

    if(isset($_POST["username"]) && isset($_POST["passwd"])){

        $loginAccess = $db->checkLogin($_POST["username"], $_POST["passwd"]);
        if(count($loginAccess) != 0){
            registerUser($loginAccess[0]);
        }
        else{
            $params["errorLogin"] = "Username or Password not correct. If you are not already registered, please click the link below";
        }
    }

    if(isUserLoggedIn() && $_SESSION["username"] == "Admin"){
        $params["content"] = "adminLogin.php";
        $params["title"] = "Admin";
        $params["mainTitle"] = "Admin";
        $params["user"] = "Admin";
        $params["showLogin"] = "yes";
    }
    else if(isUserLoggedIn()){
        $params["content"] = "complex_template/userLogin.php";
        $params["script"] = "yes";
        $params["title"] = "Homepage - ".$_SESSION["username"];
        $params["mainTitle"] = "Homepage";
        $params["user"] = $_SESSION["username"];
        $params["product"] = $db->getRandomProduct(5);
        //var_dump($params["product"]);
        $params["showShop"] = "yes";
    }
    else{
        $params["content"] = "template/loginContent.php";
        $params["title"] = "Login";
        $params["mainTitle"] = "Login";
        $params["showLogin"] = "yes";
    }

    
    
    require_once("template/base.php");
?>