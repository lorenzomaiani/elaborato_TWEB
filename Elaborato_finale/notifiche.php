<?php
    require_once("bootstrap.php");
    
    if($_GET["action"] == 1){    //aggiungi messaggio alla tabella notifiche e conferma acquisto
        $prodottiNelCarrello = $db->getProductFromCartByUsername($_SESSION["username"]);
        $flag = 1;

        foreach ($prodottiNelCarrello as $prodottiCarrello){
            $quantitàInDB = $db->getQuantityInStock($prodottiCarrello["nomeprodotto"]);
            $quantitàResidua = $quantitàInDB[0]["quantitàprodotto"] - $prodottiCarrello["quantitàprodotto"];
            if ($quantitàInDB[0]["quantitàprodotto"] < $prodottiCarrello["quantitàprodotto"]){
                $flag = 0;
            }
            elseif ($quantitàResidua == 0){
                $flag = 2;
            }
        }

        if ($flag == 0){ //gestisce possibile acquisto contemporaneo di uno stesso prodotto o acquisto di una quantità maggiore di quello nel db
            $msg = "Spiacenti, acquisto non riuscito";
            $db->addNewMessagesFromUsers($_SESSION["username"], $msg);
        }

        elseif ($flag == 2){ //
            $msg = "Un prodotto è esaurito";
            $db->addNewMessagesFromUsers("Admin", $msg);
            $msg = "Grazie per l'acquisto! A presto!";
            $prodottiNelCarrello = $db->getProductFromCartByUsername($_SESSION["username"]);
            foreach ($prodottiNelCarrello as $prodottiCarrello){
                $db->updateQuantityOfProduct($prodottiCarrello["nomeprodotto"],$prodottiCarrello["quantitàprodotto"]);
            }
            $db->addNewMessagesFromUsers($_SESSION["username"], $msg);
        }

        else{
            $msg = "Grazie per l'acquisto! A presto!";
            $prodottiNelCarrello = $db->getProductFromCartByUsername($_SESSION["username"]);
            foreach ($prodottiNelCarrello as $prodottiCarrello){
                $db->updateQuantityOfProduct($prodottiCarrello["nomeprodotto"],$prodottiCarrello["quantitàprodotto"]);
            }
            $db->addNewMessagesFromUsers($_SESSION["username"], $msg);
        }

        $db->removeAllProductFromCartByUsername($_SESSION["username"]);
        header("Location:index.php");


        //PROVA PRECEDENTE!!!
       /* if($_SESSION["username"] == "Admin"){
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
        header("Location:index.php");*/
    }

    if($_GET["action"] == 2){
        $db->updateActiveMessages($_SESSION["username"]);
        header("Location:index.php");
    }

?>