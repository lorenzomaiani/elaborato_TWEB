<?php 
    require_once("bootstrap.php");
    if(isset($_GET["searchBox"])){
        $search_result = $db->getProductByName($_GET["searchBox"]);
        if(count($search_result) > 0){
            $params["content"] = "template/homepageUser.php";
            $params["prodotti"] = $search_result;
        }
        else{
            $params["content"] = "errorSearch.php";
            $params["searchError"] = $_GET["searchBox"];
        }
    }
    $params["user"] = $_SESSION["username"];
    $params["title"] = "Result";
    require_once("template/base.php");
?>