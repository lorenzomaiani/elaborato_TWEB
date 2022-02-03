<?php
    require_once("bootstrap.php");
    
    if($_GET["action"] == 1){    //add messagge to user for shopping operation
        $msg = "Thank you so much for this purchase! See you soon";
        $db->addNewMessagesFromUsers($_SESSION["username"], $msg);
        $db->removeAllProductFromCartByUsername($_SESSION["username"]);
        header("Location:login.php");
    }
?>