<?php
//functions here
class LoginModel
{
    protected $db;

    public function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }

    public function database(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $stmt = $this->db->prepare("INSERT INTO Users (username, password) VALUES ('$username', '$password')");
        $stmt->execute();
    }

    public function addUser() {
        if (isset($_POST['submit'])) {
           $this->database();
        }


    }
}
