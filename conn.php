<?php
$servername = "127.0.0.1";
$username = "root";
$password= "";
$dbname= "mylogin";

try {
    $pdo = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //creates table if it doesn't exist
    $stmt = $pdo->prepare("CREATE DATABASE IF NOT EXISTS $dbname");
    $stmt->execute();
} catch(PDOException $e) {
    echo $e->getMessage();
}
//destroy db and start new connection
$pdo = null;

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table, password char(60) to hold bcrypt
    $sql = "CREATE TABLE IF NOT EXISTS Users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  password CHAR(60) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
    // use exec() because no results are returned
    $pdo->exec($sql);
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$pdo = null;
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);;
