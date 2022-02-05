<?php
    require_once("bootstrap.php");
    
    if($_GET["action"] == 1){    //aggiungi messaggio alla tabella notifiche
        $msg = "Grazie per l'acquisto! A presto!";
        $db->addNewMessagesFromUsers($_SESSION["username"], $msg);
        $db->removeAllProductFromCartByUsername($_SESSION["username"]);
        header("Location:index.php");
    }

?>