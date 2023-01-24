<?php
require_once "DbConnection.php";
require_once "../class/articl.php";


    if(isset($_POST["create_btn"]))       createArticle();
    if(isset($_POST["update_btn"]))       updateArticle();
    if(isset($_GET["id"]))       deleteArticle();

   

    function createArticle(){
    $title = $_POST["Title"];
    $description = $_POST["Description"];
    $admin_name = $_SESSION["id"];
    $category_name = $_POST["category_name"];
    $count=0;
    foreach($title as $title1){
        if($_FILES['img']['name'][$count]=="") {
            $image = "logo.png";
        } else {
            $image = $_FILES['img']['name'][$count];
        }
            $upload = "../img/" . $image;
            move_uploaded_file($_FILES['img']['tmp_name'][$count], $upload);
            $articl = new article($title[$count], $description[$count], $admin_name, $category_name[$count], $image);
            $articl->create();
            
        $count++;
        
    }
   
}
    function updateArticle(){
        // echo $_POST["id"];
        // echo "here " ;
        // die() ; 
    $id = $_POST["id"];
    $title = $_POST["Title"];
    $description = $_POST["Description"];
    $category_name = $_POST["category_name"];
    $img = $_POST["img_old"];
    
    if (empty($_FILES['img']['name'])) {
        $image =$img ;
    } else {
        $image = $_FILES['img']['name'];
        $upload = "../img/" . $image;
        move_uploaded_file($_FILES['img']['tmp_name'], $upload);
    }
        article::update( $id,$title, $description, $category_name, $image);
        
    }
    
    function deleteArticle(){
        $id = $_GET["id"];
        article::delete($id);
    }


    
