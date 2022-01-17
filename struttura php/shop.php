<?php
    require_once("bootstrap.php");

    if($_GET["action"] == 1){   //add to cart DONE
        $db->addProductToCart($_GET["username"], $_GET["productname"]);
        header("Location:login.php");
    }

    if($_GET["action"] == 2){   //open a shop template that show products in cart
        $params["mainTitle"] = "SHOP";
        $params["content"] = "complex_template/userShop.php";
        $params["title"] = "Shop - ".$_SESSION["username"];
        $params["user"] = $_SESSION["username"];
        $params["showProducts"] = "yes";

        $params["product"] = $db->getProductFromCartByUsername($_SESSION["username"]);
        require_once("template/base.php");
    }

?>