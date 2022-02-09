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
        
        // gestione login e registrazione
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
        
        // gestione prodotti e carrello
        public function getSomeProduct($n){
            $query = "SELECT nomeprodotto, descrizioneprodotto, immagineprodotto, quantitàprodotto, prezzoprodotto FROM prodotti LIMIT ?";
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
            $query = "SELECT p.nomeprodotto, p.descrizioneprodotto, p.immagineprodotto, p.prezzoprodotto, c.quantitàprodotto FROM prodotti as p JOIN carrello as c WHERE c.nomeprodotto = p.nomeprodotto and c.username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getQuantityFromCartByUsername($username){
            $query = "SELECT quantitàprodotto FROM carrello WHERE username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function addProductToCart($username,$nomeprodotto,$quantitàprodotto){
            $query = "INSERT into carrello (username, nomeprodotto, quantitàprodotto) VALUES (?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ssi", $username, $nomeprodotto, $quantitàprodotto);
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
            $stmt->bind_param("s", $nomeprodotto);
            $stmt->execute();
        }

        
        public function insertNewProduct($nomeprodotto, $descrizioneprodotto, $immagineprodotto,$prezzoprodotto,$quantitàprodotto){
            $query = "INSERT into prodotti (nomeprodotto, descrizioneprodotto, quantitàprodotto, immagineprodotto, prezzoprodotto) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ssssi", $nomeprodotto, $descrizioneprodotto, $quantitàprodotto, $immagineprodotto,$prezzoprodotto );
            $stmt->execute();
        }

        public function removeAllProductFromCartByUsername($username){
            $query = "DELETE FROM carrello WHERE username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s",$username);
            $stmt->execute();
        }

        public function checkAlreadyInCart($username,$nomeprodotto){
            $query = "SELECT nomeprodotto FROM carrello WHERE username = ? and nomeprodotto = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ss", $username, $nomeprodotto);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getQuantityInStock($nomeprodotto){
            $query = "SELECT quantitàprodotto FROM prodotti WHERE nomeprodotto = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s",$nomeprodotto);
            $stmt->execute();

            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        // gestione dei messaggi
        public function addNewMessagesFromUsers($username,$testonotifica){
            $query = "INSERT INTO notifiche(username,testonotifica,attivo) VALUES (?,?,1)";
            $stmt = $this->db->prepare($query);
            $stmt-> bind_param("ss", $username,$testonotifica);
            $stmt->execute();
        }

        public function getMessagesByUsername($username){
            $query = "SELECT testonotifica FROM notifiche WHERE username = ? and attivo = 1";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        //Parte di update del database
        public function updateActiveMessages($username){
            $query = "UPDATE notifiche SET attivo = 0 WHERE username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
        }

        public function updateQuantityOfProduct($nomeprodotto,$quantitàprodotto){  // operazione di rimozione fatta dall'user
            $query = "UPDATE prodotti SET quantitàprodotto = quantitàprodotto - ? WHERE nomeprodotto = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("is", $quantitàprodotto,$nomeprodotto);
            $stmt->execute();
        }

        public function addQuantityByProductname($nomeprodotto,$quantità){ // operazione di aggiunta fatta dall'admin
            $query = "UPDATE prodotti SET quantitàprodotto = quantitàprodotto + ? WHERE nomeprodotto = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("is", $quantità,$nomeprodotto);
            $stmt->execute();
        }

        public function updateQuantityOfProductAlreadyInCart($username,$nomeprodotto,$quantità){
            $query = "UPDATE carrello SET quantitàprodotto = quantitàprodotto + ? WHERE nomeprodotto = ? and username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("iss", $quantità,$nomeprodotto,$username);
            $stmt->execute();
        }
    }
?>

