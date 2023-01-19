<?php
require_once "DbConnection.php";
    require_once "../class/admin.php";
     session_start();
   
    if(isset($_POST["login_btn"]))        loginChecker();

    function loginChecker(){
        global $conn;
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT * FROM admin WHERE `email` = '$email' AND `password` = '$password'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() == 1) {
            $newUser = new user($result[0]["id"], $result[0]["admin_name"], $result[0]["email"], $result[0]["password"]);
            $newUser -> login();
        } else {
            $_SESSION["loginMessage-field"] = "Sorry email or password is incorrect";
        }
    }
