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
            $query = "SELECT productname, productlabel, productimage,price,quantity FROM products WHERE productname = ?";
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

        public function updateQuantityOfProducts($productname,$quantity){
            $query = "UPDATE products SET quantity = ? - 1 WHERE productname = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("is" ,$quantity,$productname);
            $stmt->execute();
        }

        public function updateQuantityAdd($productname,$quantity){
            $query = "UPDATE products SET quantity = quantity + ? WHERE productname = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("is" ,$quantity,$productname);
            $stmt->execute();
        }

        public function getProductFromCartByUsername($username){
            $query = "SELECT productname, productlabel, productimage, price, quantity FROM products WHERE productname IN (SELECT productname FROM cart WHERE username = ?)";
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

        public function removeAllProductFromCartByUsername($username){
            $query = "DELETE FROM cart WHERE username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
        }

        public function removeProductByName($productname){
            $query = "DELETE FROM products WHERE productname = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $productname);
            $stmt->execute();
        }

        public function insertNewProduct($productname, $productdescription, $productimage, $productprice, $productquantity){
            $query = "INSERT into products (productname, productlabel, productimage, price, quantity) VALUES (?, ?, ?,?,?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("sssss", $productname, $productdescription, $productimage,$productprice, $productquantity);
            $stmt->execute();
        }

        public function getMessagesByUsername($username){
            $query = "SELECT messagescontent FROM messages WHERE username = ? and active = 1";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function addNewMessagesByUsername($username,$msg){
            $query = "INSERT into messages (username, messagesContent,active) VALUES (?, ?,1)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("ss", $username, $msg);
            $stmt->execute();
        }

        public function deleteAllMessageByUsername($username){ //not used
            $query = "DELETE FROM messages WHERE username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
        }

        public function updateActiveMessages($username){
            $query = "UPDATE messages SET active = 0 WHERE username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
        }
    }
?>

