<?php
    require_once("bootstrap.php");

    if($_GET["action"] == 1){ // carica il template per l'inserimento del nuovo prodotto
        $params["content"] = "template/inserimentoProdotto.php";
        $params["title"] = "Inserimento prodotto";
        $params["navTitle"] = "Inserimento nuovo prodotto";
    }
    
    if($_GET["action"] == 2){  // rimozione prodotto con pulsante
        if(count($_GET["productname"]) > 0){
            $db->removeProductByName($_GET["productname"]);
            header("Location:index.php");
        }
    }
    
    /*
    if($_GET["action"] == 3){  caso obsoleto, venivano mostrati i prodotti su richiesta dell'admin, ora vengono mostrati tutti subito.
        $params["content"] = "template/adminLogin.php";
        $params["title"] = "Admin";
        $params["mainTitle"] = "Admin";
        $params["product"] = $db->getAllProduct();
    }
    */

    //inserimento nuovo prodotto
    if(isset($_POST["nomeprodotto"]) && isset($_POST["descrizioneprodotto"]) && isset($_POST["immagineprodotto"]) && isset($_POST["prezzoprodotto"]) && isset($_POST["quantitàprodotto"])){ 
        $nomeprodotto = htmlspecialchars($_POST["nomeprodotto"]);
        $descrizioneprodotto = htmlspecialchars($_POST["descrizioneprodotto"]);
        $immagineprodotto = htmlspecialchars($_POST["immagineprodotto"]);
        $prezzoprodotto = $_POST["prezzoprodotto"];
        $quantitàprodotto = $POST["quantitàprodotto"];
        $db->insertNewProduct($nomeprodotto, $descrizioneprodotto, $immagineprodotto, $prezzoprodotto, $quantitàprodotto);
        header("Location:index.php");
        
    }

    require_once("template/base.php");
?>