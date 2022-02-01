<?php
    require_once("bootstrap.php");

    if($_GET["action"] == 1){   //add to cart DONE
        $db->addProductToCart($_GET["username"], $_GET["productname"]);
        header("Location:login.php");
    }

    if($_GET["action"] == 2){   //open a shop template that show products in cart
        $params["mainTitle"] = "Shop";
        $params["script"] = "yes";
        $params["content"] = "template/userShop.php";
        $params["title"] = "Shop - ".$_SESSION["username"];
        $params["showProducts"] = "yes";
        $params["product"] = $db->getProductFromCartByUsername($_SESSION["username"]);
        require_once("template/base.php");
    }

    if($_GET["action"] == 3){ // remove product to cart
        $db->removeProductToCart($_GET["username"], $_GET["productname"]);
        header("Location:login.php");
    }

    if($_GET["action"] == "shop"){
        $params["content"] ="template/checkOutForm.php";
        $params["title"] = "Checkout - ".$_SESSION["username"];
        $params["mainTitle"] = "Checkout";
        $params["script"] = "yes";
        $params["product"] = $db->getProductFromCartByUsername($_SESSION["username"]);
        $params["showProducts"] = "yes";
        require_once("template/base.php");
    }

?>