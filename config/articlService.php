<?php
require_once "DbConnection.php";
require_once "../class/articl.php";

    if(isset($_POST["create_btn"]))       createArticle();
    if(isset($_POST["update_btn"]))       updateArticle();
    if(isset($_POST["delete_btn"]))       deleteArticle();


    function createArticle(){
    // die("here");
    // if(!isset($_POST["Title"]) || !isset($_POST["Description"]) || !isset($_POST["admin_name"])){
    //     // $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
    //     // header("location: ../index.php");
    // }
    // $id = $_POST["id"];
    $title = $_POST["Title"];
    $description = $_POST["Description"];
    $admin_name = 1;
    $category_name = $_POST["category_name"];
    $count=0;
    foreach($title as $title1){
        if ($_FILES['img']['name'][$count] == "") {
            $image = "logo.png";
        } else {
            $image = $_FILES['img']['name'][$count];
            $upload = "../img/" . $image;

            move_uploaded_file($_FILES['img']['tmp_name'][$count], $upload);
            $articl = new article($title[$count], $description[$count], $admin_name, $category_name[$count], $image);
            $articl->create();
        }
        $count++;
        
    }
   
}
    function updateArticle(){
        // echo $_POST["id"];
        // echo "here " ;
        // die() ;
        if(!isset($_POST["id"]) || !isset($_POST["Title"]) || !isset($_POST["Description"]) || !isset($_POST["admin_name"])){
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            // header("location: ../index.php");
        }
        $id = $_POST["id"];
    $title = $_POST["Title"];
    $description = $_POST["Description"];
    $admin_name = $_POST["admin_name"];
    $Publication_date = $_POST["Publication_date"];
    $category_name = $_POST["category_name"];
    $image = $_POST["image"];
        article::update( $id,$title, $description, $admin_name, $Publication_date, $category_name, $image);
    }
    
    function deleteArticle(){
        if(!isset($_POST["id"])){
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../index.php");
        }
        $id = $_POST["id"];
        article::delete($id);
    }
