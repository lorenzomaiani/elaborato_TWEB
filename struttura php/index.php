<?php 
    require_once("bootstrap.php");

    $params["content"] = "template/indexContent.php";
    $params["title"] = "Home";
    $params["mainTitle"] = "Home";
    $params["cookie"] = "On";
    $params["script"] = "script";
    $params["showLogin"] = "yes";
    
    require_once("template/base.php");
?>