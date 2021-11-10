<?php

    require_once('./../autoload.php');

    use includes\DBConnection;
    use includes\Operations;

    $dbconnection = DBConnection::getInstance()->getConnection();
    $operations = new Operations($dbconnection);

    if(isset($_POST['company_name']) AND isset($_POST['company_address']) AND isset($_POST['company_email']) AND isset($_POST['company_phone']) AND isset($_POST['company_password'])){

        $name = $_POST['company_name'];
        $address = $_POST['company_address'];
        $email = $_POST['company_email'];
        $phone = $_POST['company_phone'];
        $password = $_POST['company_password'];

        echo $operations->signup($name, $address, $email, $phone, $password);
    }


?>