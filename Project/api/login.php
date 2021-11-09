<?php
    require_once("./../autoload.php");
    
    use includes\DBConnection;
    use includes\Operations;

    $dbconnection = DBConnection::getInstance()->getConnection("localhost", "root", "", "logsiticsmanagementsystem");
    $operations = new Operations($dbconnection);

    // echo $operations->login("tembodalitso2@gmail.com", "1234");
    
    if(isset($_POST['username']) AND isset($_POST['password'])){
        if(!empty($_POST['username']) AND !empty($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            echo $operations->login("tembodalitso2@gmail.com", "1234");
            
        }
    }
?>