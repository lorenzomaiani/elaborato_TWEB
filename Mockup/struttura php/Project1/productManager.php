<?php
    require_once("bootstrap.php");

    if($_GET["action"] == 1){ //load template to insert new product
        $params["content"] = "template/insertProduct.php";
        $params["title"] = "Insert Product";
        $params["mainTitle"] = "Insert new product";
    }

    if($_GET["action"] == 2){ //load template to remove element
        $params["content"] = "template/removeProduct.php";
        $params["title"] = "Remove product";
        $params["mainTitle"] = "Remove a product";
    }
    
    if($_GET["action"] == 3){
        $params["content"] = "template/adminLogin.php";
        $params["title"] = "Admin";
        $params["mainTitle"] = "Admin";
        $params["product"] = $db->getAllProduct();
    }

    if(isset($_POST["productname"])){ // remove the product
        if(count($_POST["productname"]) > 0){
            $db->removeProductByName($_POST["productname"]);
            header("Location:login.php");
        }
    }

    if(isset($_POST["productname"]) && isset($_POST["productdescription"]) && isset($_POST["productimage"])){ //insert new product
        $productname = htmlspecialchars($_POST["productname"]);
        $productdescription = htmlspecialchars($_POST["productdescription"]);
        $productimage = htmlspecialchars($_POST["productimage"]);

        $db->insertNewProduct($productname, $productdescription, $productimage);
        header("Location:login.php");
        
    }

    require_once("template/base.php");
?>