<?php
    require_once("bootstrap.php");

    if(isset($_POST["username"]) && isset($_POST["password"])){
        $loginAccess = $db->checkLogin($_POST["username"], $_POST["password"]);
        if(count($loginAccess) != 0){
            registerUser($loginAccess[0]);
        }
        else{
            $params["erroreLogin"] = "Username o Password errati. Se non si è registrati, fallo ora!";
        }
    }

    if(isUserLoggedIn() && $_SESSION["username"] == "Admin"){
        $params["content"] = "homepageAdmin.php";   #pagina principale admin
        $params["title"] = "Admin";
        $params["navHomepageAdmin"] = "yes";
        $params["prodotti"] = $db->getAllProduct();
        $params["notifiche"] = $db->getMessagesByUsername($_SESSION["username"]);
        $params["numNotifiche"] = count($params["notifiche"]);
    }

    else if(isUserLoggedIn()){
        $params["content"] = "template/homepageUser.php";   #pagina principale utente
        $params["title"] = "Homepage - ".$_SESSION["username"];
        $params["user"] = $_SESSION["username"];
        $params["prodotti"] = $db->getSomeProduct(8);
        $params["navHomepageUser"] = "yes";
        $params["notifiche"] = $db->getMessagesByUsername($_SESSION["username"]);
        $params["numNotifiche"] = count($params["notifiche"]);
    }
    
    else{
        $params["navLogin"] = "yes";
        $params["content"] = "template/loginContent.php";  #form per il login base
        $params["title"] = "Login";
        $params["navTitle"] = "Login";
    }

    require_once("template/base.php");
?>