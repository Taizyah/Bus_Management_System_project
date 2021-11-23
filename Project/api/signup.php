<?php

    require_once('./../autoload.php');

    use includes\DBConnection;
    use includes\Operations;

    $dbconnection = DBConnection::getInstance()->getConnection();
    $operations = new Operations($dbconnection);

    if(isset($_POST['name']) AND isset($_POST['address']) AND isset($_POST['email']) AND isset($_POST['phone']) AND isset($_POST['password'])){

        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        echo $operations->signup($name, $address, $email, $phone, $password);
    }


?>