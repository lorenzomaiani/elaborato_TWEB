<?php 
    require_once("bootstrap.php");
    if(isset($_GET["searchBox"])){
        $search_result = $db->getProductByName($_GET["searchBox"]);
        if(count($search_result) > 0){
            $params["content"] = "complex_template/userLogin.php";
            $params["product"] = $search_result;
        }
        else{
            $params["content"] = "errorSearch.php";
            $params["searchError"] = $_GET["searchBox"];
        }
    }
    $params["mainTitle"] = "Homepage";
    $params["user"] = $_SESSION["username"];
    $params["script"] = "On";
    $params["homepageFooter"] = "On";
    $params["title"] = "Result";
    require_once("template/base.php");
?>