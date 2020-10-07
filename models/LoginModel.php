<?php
//functions here
class LoginModel
{
    protected $db;

    public function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }


    public function getLogin() {
        if (isset($_POST['submit'])) {
        return $this->db->query('SELECT * FROM table');
        }
        else{
            echo "something is wrong";
        }
    }
}
