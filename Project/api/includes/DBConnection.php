<?php

    namespace includes;

    class DBConnection {

        private static ?DBConnection $dbconnection = null;

        private function __construct(){
            
        }

        public static function getInstance(){
            if(DBConnection::$dbconnection == null){
                DBConnection::$dbconnection = new DBConnection();
            }
            return DBConnection::$dbconnection;
        }


        public function getConnection(string $host, string $username, string $password, string $database){
            try{
                return new \MySQLI($host, $username, $password, $database);

            }catch(\exception $exception){
                echo $exception;
            }
        }
    }