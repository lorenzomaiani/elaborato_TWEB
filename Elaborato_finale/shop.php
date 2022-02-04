<?php
    require_once("bootstrap.php");

    if($_GET["action"] == 1){   //add to cart DONE
        $db->addProductToCart($_GET["username"], $_GET["nomeprodotto"]);
        header("Location:index.php");
    }

    if($_GET["action"] == 2){   //vogliamo aprire il template carrello
        $params["content"] = "template/carrello.php";
        $params["title"] = "Carrello - ".$_SESSION["username"];
        $params["prodotti"] = $db->getProductFromCartByUsername($_SESSION["username"]);
        require_once("template/base.php");
    }

    if($_GET["action"] == 3){ // remove product to cart
        $db->removeProductToCart($_GET["username"], $_GET["nomeprodotto"]);
        header("Location:index.php");
    }

    if($_GET["action"] == "shop"){
        $params["content"] ="template/checkoutUser.php";
        $params["title"] = "Checkout - ".$_SESSION["username"];
        $params["prodotti"] = $db->getProductFromCartByUsername($_SESSION["username"]);
        require_once("template/base.php");
    }

?>