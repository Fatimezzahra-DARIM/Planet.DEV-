 <?php

    //  if(isset($_POST["logOut_btn"])) logOut();
    //  function logOut(){
    //  session_destroy();
    //  header("location:login.php");
    //  }
    require_once "../config/DbConnection.php";

        if (isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['id']);
        header("location:login.php");
        }