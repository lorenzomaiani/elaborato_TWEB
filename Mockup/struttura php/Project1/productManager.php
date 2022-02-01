<?php
    require_once("bootstrap.php");

    if($_GET["action"] == 1){ //load template to insert new product
        $params["content"] = "template/insertProduct.php";
        $params["title"] = "Insert Product";
        $params["mainTitle"] = "Insert new product";
    }

    if($_GET["action"] == 2){  // remove problem from button
        if(count($_GET["productname"]) > 0){
            $db->removeProductByName($_GET["productname"]);
            header("Location:login.php");
        }
    }
    
    if($_GET["action"] == 3){ // get all product
        $params["content"] = "template/adminLogin.php";
        $params["title"] = "Admin";
        $params["mainTitle"] = "Admin";
        $params["product"] = $db->getAllProduct();
    }

    if(isset($_POST["productname"]) && isset($_POST["productdescription"]) && isset($_POST["productimage"]) && isset($_POST["productprice"]) && isset($_POST["productquantity"])){ //insert new product
        $productname = htmlspecialchars($_POST["productname"]);
        $productdescription = htmlspecialchars($_POST["productdescription"]);
        $productimage = htmlspecialchars($_POST["productimage"]);
        $productprice = $_POST["productprice"];
        $productquantity = $POST["productquantity"];
        $db->insertNewProduct($productname, $productdescription, $productimage, $productprice, $productquantity);
        header("Location:login.php");
        
    }

    require_once("template/base.php");
?>