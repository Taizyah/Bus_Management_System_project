<?php

    namespace includes;

    class Operations {

        private $connection;

        public function __construct($connection){
            $this->connection = $connection;
        }


        /**
         * Function to log in the user 
         * @param string $username
         * @param string $password
         */
        public function login(string $username, string $password){

            $hashedPassword = md5($password);

            if(empty($username) || empty($password)){
                return json_encode(array("message"=>"One or more required fields is empty.")); 
            }

            $getUser = $this->connection->prepare("SELECT `id`,`email` FROM users WHERE `email`=? AND `password`=?");
            $getUser->bind_param("ss", $username, $hashedPassword);
            $getUser->execute();
            $resultSet = $getUser->get_result();
            if($resultSet->num_rows > 0) {
                $user = $resultSet->fetch_assoc();
                return json_encode(array("response"=>$user));
            }
            
            return json_encode(array("response"=>"failed"));
        }



        /**
         * This function sends a request to the admin to sign up a bus company...
         * @param string $name
         * @param string $address
         * @param string $email
         * @param string $number
         * @param string $password
         */
        public function signup(string $name, string $address, string $email, string $number, string $password){
            $hashedPassword = md5($password);
            $addUserQuery = $this->connection->prepare("INSERT INTO users (`name`,`address`, `email`,`phone`,`password`) VALUES(?,?,?,?,?)");
            $addUserQuery->bind_param("sssss", $name, $address, $email, $number, $hashedPassword);
            if($addUserQuery->execute()){
                return json_encode(array("message"=>"success"));
            }else{
                 json_encode(array("message"=>"failed"));
            }
        }

    }

?>