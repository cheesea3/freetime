<?php
//establish connection
require_once('./conn.php');

//make model available
include './models/loginModel.php';

// create an instance
$loginModel = new loginModel($pdo);

//view
include './view/home.php';
