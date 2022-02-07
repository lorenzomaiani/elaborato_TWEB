<?php
    require_once("bootstrap.php");
    
    if($_GET["action"] == 1){    //add messagge to user for shopping operation
        if ($_SESSION["username"] == "Admin"){
            $msg = "A product is sold out!";
        }
        else{
            $msg = "Thank you so much for this purchase! See you soon";
            // get all info about product in cart
            $productInCart = $db->getProductFromCartByUsername($_SESSION["username"]);
            // foreach products, decrease by 1 the quantity
            foreach($productInCart as $products){
                $quantity = $products["quantity"];
                $productname = $products["productname"];
                $db->updateQuantityOfProducts($productname,$quantity); //descrease quantity of products by productnames
            }
        }
        $db-> addNewMessagesByUsername($_SESSION["username"], $msg);
        $db->removeAllProductFromCartByUsername($_SESSION["username"]);
        header("Location:login.php");
    }

    if($_GET["action"] == 2){ //deactive a messagge to not be showed
        $db->updateActiveMessages($_GET["username"]);
        header("Location:login.php");
    }

    

?>