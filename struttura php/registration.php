<?php 
    require_once("bootstrap.php");

    if(isset($_POST["username"]) && isset($_POST["password"])){
        //username in database
        $userInData = $db->getUsername();

        // controll if the username passed is already in database or not
        $flag = 1;
        foreach($userInData as $i){
            if($i["username"] == $_POST["username"]){
                $flag = 0;
            }
        }

        if($flag == 1){
            $db->registerNewUser($_POST["username"],$_POST["password"]);
        }
        else{
            $params["script"] = "script";
            $params["error"] = "Username already used!";  
        }
    }   
    $params["content"] = "template/registrationContent.php";
    $params["title"] = "Registration";
    $params["mainTitle"] = "Registration";
    $params["showLogin"] = "yes";
    require_once("template/base.php");
?>