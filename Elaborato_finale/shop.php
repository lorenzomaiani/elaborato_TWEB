<?php
    require_once("bootstrap.php");

    if(isset($_POST["action"]) == 1){   //aggiungi al carrello
        $db->addProductToCart($_POST["username"], $_POST["nomeprodotto"],$_POST["quantitàprodottoutente"]);
        header("Location:index.php");
    }

    if($_GET["action"] == 2){   //vogliamo aprire il template carrello
        $params["content"] = "template/carrello.php";
        $params["title"] = "Carrello - ".$_SESSION["username"];
        $params["prodotti"] = $db->getProductFromCartByUsername($_SESSION["username"]);
        $params["navTitle"] = "Carrello";
        require_once("template/base.php");
    }

    if($_GET["action"] == 3){ // rimuovi dal carrello
        $db->removeProductToCart($_GET["username"], $_GET["nomeprodotto"]);
        header("Location:index.php");
    }

    if($_GET["action"] == "shop"){
        $params["content"] ="template/checkoutUser.php";
        $params["title"] = "Checkout - ".$_SESSION["username"];
        $params["navTitle"] = "Checkout";
        $params["prodotti"] = $db->getProductFromCartByUsername($_SESSION["username"]);
        require_once("template/base.php");
    }

?>