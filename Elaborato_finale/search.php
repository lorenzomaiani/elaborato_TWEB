<?php 
    require_once("bootstrap.php");
    if(isset($_GET["searchBox"])){
        $search_result = $db->getProductByName($_GET["searchBox"]);
        if(count($search_result) > 0){
            if($_SESSION["username"] == "Admin"){
                $params["content"] = "template/homepageAdmin.php";
            }
            else{
                $params["content"] = "template/homepageUser.php";
            }
            $params["prodotti"] = $search_result;
        }
        else{
            $params["content"] = "errorericerca.php";
            $params["errorericerca"] = $_GET["searchBox"];
        }
    }
    $params["user"] = $_SESSION["username"];
    $params["title"] = "Result";
    require_once("template/base.php");
?>