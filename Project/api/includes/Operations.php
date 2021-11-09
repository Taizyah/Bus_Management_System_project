<?php

    class Operations {

        private $connection;

        public function __construct($connection){
            $this->connection = $connection;
        }


        public function login(string $username, string $password){

            $hashedPassword = md5($password);

            if(empty($username) || empty($password)){
                return json_encode(array("message"=>"One or more required fields is empty.")); 
            }

            $getUser = $this->connection->prepare("SELECT * FROM users WHERE `email`=? AND `password`=?");
            $getUser->bind_param("ss", $username, $password);
            $getUser->execute();
            $resultSet = $getUser->get_result();
            if($resultSet->num_rows > 0) {
                $user = $resultSet->fetch_assoc();
                return json_encode(array("user"=>[$user]));
            }
            
            return json_encode(array("message"=>"failed"));
        }

    }

?>