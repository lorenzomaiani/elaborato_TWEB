<?php
    require_once("bootstrap.php");

    if($_GET["action"] == 1){ // carica il template per l'inserimento del nuovo prodotto
        $params["content"] = "template/inserimentoProdotto.php";
        $params["title"] = "Inserimento prodotto";
        $params["navTitle"] = "Inserimento nuovo prodotto";
    }
    
    if($_GET["action"] == 2){  // rimozione prodotto con pulsante
        $db->removeProductByName($_GET["nomeprodotto"]);
        header("Location:index.php");
    }

    //inserimento nuovo prodotto
    if(isset($_POST["nomeprodotto"]) && isset($_POST["descrizioneprodotto"]) && isset($_POST["prezzoprodotto"]) && isset($_POST["quantitàprodotto"])){ 
        $nomeprodotto = htmlspecialchars($_POST["nomeprodotto"]);
        $descrizioneprodotto = htmlspecialchars($_POST["descrizioneprodotto"]);
        $prezzoprodotto = $_POST["prezzoprodotto"];
        $quantitàprodotto = $_POST["quantitàprodotto"];

        list($result,$msg) = uploadImage(UPLOAD_DIR,$_FILES["immagineprodotto"]);
        if ($result != 0){
            $immagineprodotto = $msg;
            $db->insertNewProduct($nomeprodotto, $descrizioneprodotto, $immagineprodotto, $prezzoprodotto, $quantitàprodotto);
        }

        header("Location: index.php");
        
    }

    if(isset($_POST["quantitàAggiunta"])){ //aggiunge la quantità voluta dall'Admin
        $db->addQuantityByProductname($_POST["nomeprodotto"], $_POST["quantitàAggiunta"]);
        header("Location: index.php");
    }

    require_once("template/base.php");
?>