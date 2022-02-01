<?php
    class DataBase{
        private $db;

        public function __construct($servername, $username, $password, $dbname, $port){
            $this->db = new mysqli($servername,$username,$password,$dbname,$port);
            if (!$this->db) {
                die("Connection failed: " . mysqli_connect_error());
            }
        }

        //All methods for access data in DB

        public function selectAll(){
            $query = "SELECT * FROM users";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function checkLogin($username,$password){
            $query = "SELECT id, username FROM users WHERE username = ? AND password = ?";
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
            $query = "SELECT productname, productlabel, productimage,price,quantity FROM products LIMIT ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("i", $n);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getProductByName($productName){
            $query = "SELECT productname, productlabel, productimage FROM products WHERE productname = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $productName);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getAllProduct(){
            $query = "SELECT * FROM products";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getProductFromCartByUsername($username){
            $query = "SELECT productname, productlabel, productimage, price FROM products WHERE productname IN (SELECT productname FROM cart WHERE username = ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function addProductToCart($username,$productname){
            $query = "INSERT into cart (username, productname) VALUES (?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ss", $username, $productname);
            $stmt->execute();
        }

        public function removeProductToCart($username,$productname){
            $query = "DELETE FROM cart WHERE username = ? AND productname = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ss", $username, $productname);
            $stmt->execute();
        }

        public function removeProductByName($productname){
            $query = "DELETE FROM products WHERE productname = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $productname);
            $stmt->execute();
        }

        public function insertNewProduct($productname, $productdescription, $productimage){
            $query = "INSERT into products (productname, productlabel, productimage) VALUES (?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("sss", $productname, $productdescription, $productimage);
            $stmt->execute();
        }
    }
?>

