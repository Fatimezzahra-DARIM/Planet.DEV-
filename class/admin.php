<?php
    require_once "../config/DbConnection.php";
    require_once "../config/adminService.php";

    class user {
        
        public $id;
        public $admin_name;
        public $email;
        public $password;

        public function __construct($id, $admin_name, $email, $password){
            $this->id = $id;
            $this->admin_name = $admin_name;
            $this->email = $email;
            $this->password = $password;
        }

        public function login(){
            $_SESSION["id"] = $this->id;
            $_SESSION["admin_name"] = $this->admin_name;
            $_SESSION["email"] = $this->email;
            $_SESSION["password"] = $this->password;
            $_SESSION["loginMessage-success"] = "welcome back ". $this->admin_name;
            header("location: ../index.php");
        }
    }
