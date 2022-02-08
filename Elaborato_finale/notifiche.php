<?php
    require_once("bootstrap.php");
    
    if($_GET["action"] == 1){    //aggiungi messaggio alla tabella notifiche
        if($_SESSION["username"] == "Admin"){
            $msg = "Un prodotto è sold-out!";
        }
        else{
            $msg = "Grazie per l'acquisto! A presto!";

            $prodottiNelCarrello = $db->getProductFromCartByUsername($_SESSION["username"]);
            foreach ($prodottiNelCarrello as $prodottiCarrello){
                $db->updateQuantityOfProduct($prodottiCarrello["nomeprodotto"],$prodottiCarrello["quantitàprodotto"]);
            }
        }
        $db->addNewMessagesFromUsers($_SESSION["username"], $msg);
        $db->removeAllProductFromCartByUsername($_SESSION["username"]);
        header("Location:index.php");
    }

    if($_GET["action"] == 2){
        $db->updateActiveMessages($_SESSION["username"]);
        header("Location:index.php");
    }

?>