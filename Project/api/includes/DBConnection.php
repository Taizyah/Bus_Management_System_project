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


        public function getConnection(){
            try{
                return new \MySQLI("localhost", "root", "", "logsiticsmanagementsystem");

            }catch(\exception $exception){
                echo $exception;
            }
        }
    }