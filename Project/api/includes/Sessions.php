<?php

    namespace includes;

    class Sessions{

        private static $session = null;
        private static $instance = null;

        private function __construct($var){
            Sessions::$session = $this->setSession($var);
        }

        private function setSession($sessionVariable){
            session_start();
            if($sessionVariable != null){
                $_SESSION["id"] = $sessionVariable;
                
                return $_SESSION["id"];
            }
            return null;
        }

        public function getSessionVariable(){
            return Sessions::$session;
        }

        public static function getInstance($session){
            if(Sessions::$instance == null){
                Sessions::$instance = new Sessions($session);
                return Sessions::$instance;
            }
            return Sessions::$instance;
        }
    }
?>