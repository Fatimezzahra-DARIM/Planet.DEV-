<?php
require_once "DbConnection.php";
    require_once "../class/admin.php";
   
   
    if(isset($_POST["login_btn"]))        loginChecker();

    function loginChecker(){
        global $conn;
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT * FROM admin WHERE `email` = '$email' AND `password` = '$password'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $newUser = new user($result["admin_id"], $result["admin_name"], $result["Email"], $result["Password"]);
            $newUser -> login();
        header("location: ../public/index.php");
        } else {
            $_SESSION["loginMessage-field"] = "Sorry email or password is incorrect";
        header("location: ../public/login.php");
        }
    }
// function cuntAdmins()
// {
//     echo (user::countAdmins());
// }
