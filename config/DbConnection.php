<?php
session_start();
    class DBConnection {
        public $host = "localhost" ;
        public $user = "root" ;
        public $dbName = "planetdev" ;
        public $password = "" ;

        public function connection() {
            try{
                $dsn = "mysql:host=$this->host;dbname=$this->dbName;" ;
                $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'] ;
                $conn = new PDO($dsn, $this->user, $this->password, $options) ;
                // echo "connection is success" ;
                return $conn ;
            }catch(PDOException $e){
                echo "connection is failed ".$e->getMessage() ;
            }
        }
    }   

    $connection = new DBConnection();
    $conn = $connection->connection();
