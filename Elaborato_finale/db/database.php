<?php
    class DataBase{
        private $db;

        public function __construct($servername, $username, $password, $dbname, $port){
            $this->db = new mysqli($servername,$username,$password,$dbname,$port);
            if (!$this->db) {
                die("Connection failed: " . mysqli_connect_error());
            }
        }

        public function selectAll(){
            $query = "SELECT * FROM users";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function checkLogin($username,$password){
            $query = "SELECT username FROM users WHERE username = ? AND password = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }


        public function registerNewUser($username, $password){
            $query = "INSERT into users (username, password) VALUES (?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
        }

        public function getUsername(){
            $query = "SELECT username FROM users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }
        
        public function getSomeProduct($n){
            $query = "SELECT nomeprodotto, descrizioneprodotto, immagineprodotto,quantitàprodotto, prezzoprodotto FROM prodotti LIMIT ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("i", $n);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getProductByName($nomeprodotto){
            $query = "SELECT nomeprodotto, descrizioneprodotto, immagineprodotto,quantitàprodotto,prezzoprodotto FROM prodotti WHERE nomeprodotto = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $nomeprodotto);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getAllProduct(){
            $query = "SELECT * FROM prodotti";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getProductFromCartByUsername($username){
            $query = "SELECT nomeprodotto, descrizioneprodotto, immagineprodotto, prezzoprodotto, quantitàprodotto FROM prodotti WHERE nomeprodotto IN (SELECT nomeprodotto FROM carrello WHERE username = ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function addProductToCart($username,$nomeprodotto){
            $query = "INSERT into carrello (username, nomeprodotto) VALUES (?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ss", $username, $nomeprodotto);
            $stmt->execute();
        }

        public function removeProductToCart($username,$nomeprodotto){
            $query = "DELETE FROM carrello WHERE username = ? AND nomeprodotto = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ss", $username, $nomeprodotto);
            $stmt->execute();
        }

        public function removeProductByName($nomeprodotto){
            $query = "DELETE FROM prodotti WHERE nomeprodotto = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $productname);
            $stmt->execute();
        }

        
        public function insertNewProduct($nomeprodotto, $descrizioneprodotto, $immagineprodotto, $quantitàprodotto, $prezzoprodotto){
            $query = "INSERT into prodotti (nomeprodotto, descrizioneprodotto, immagineprodotto, quantitàprodotto, prezzoprodotto) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("sssii", $nomeprodotto, $descrizioneprodotto, $immagineprodotto, $quantitàprodotto,$prezzoprodotto );
            $stmt->execute();
        }

        public function removeAllProductFromCartByUsername($username){
            $query = "DELETE FROM carrello WHERE username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s",$username);
            $stmt->execute();
        }

        public function addNewMessagesFromUsers($username,$testonotifica){
            $query = "INSERT INTO notifiche(username,testonotifica) VALUES (?,?)";
            $stmt = $this->db->prepare($query);
            $stmt-> bind_param("ss", $username,$testonotifica);
            $stmt->execute();
        }

        public function getMessagesByUsername($username){
            $query = "SELECT testonotifica FROM notifiche WHERE username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        }


    }
?>

