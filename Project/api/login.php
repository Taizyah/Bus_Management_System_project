<?php
    require_once("./autoload.php");

    $dbconnection = DBConnection::getInstance()->getConnection("localhost", "root", "", "logsiticsmanagementsystem");
    $operations = new Operations($dbconnection);

    if(isset($_POST['username']) AND isset($_POST['password'])){
        if(!empty($_POST['username']) AND !empty($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            echo $operations->login($username, $password);
            
        }
    }
?>