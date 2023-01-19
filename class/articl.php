<?php

 class article {
    public $id;
    public $title;
    public $Publication_date;
    public $image;
    public $admin_name;
    public $category_name;
    public $description;

    public static function create( $title, $description,$admin_name, $Publication_date, $category_name, $image){
        global $conn;
        $query = "INSERT INTO `articl` (`Title`, `Publication_date`, `Image`, `admin_name`, `category_name`, `Description`) VALUES ('$title', '$Publication_date', '$image', '$admin_name', '$category_name', '$description');";
        $stmt = $conn->prepare($query);
        if($stmt->execute()){
            $_SESSION["articleMessage-success"] = "Article has been created successfully!";
            header("location: ../index.php");
        }else{
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../index.php");
        }
    }
    public static function update($id, $title, $description, $admin_name,$Publication_date,$category_name,$image){
        global $conn;
        $query = "UPDATE `articl` SET `Title`='$title',`Description`='$description',`admin_name`='$admin_name',`Publication_date`='$Publication_date',`category_name`='$category_name',`Image`='$image' WHERE `id` = $id";
        $stmt = $conn->prepare($query);
        if($stmt->execute()){
            $_SESSION["articleMessage-success"] = "Article has been updated successfully!";
            header("location: ../index.php");
        }else{
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../index.php");
        }
    }
    public static function delete($id){
        global $conn;
        $query = "DELETE FROM `articl` WHERE `id` = $id";
        $stmt = $conn->prepare($query);
        if($stmt->execute()){
            $_SESSION["articleMessage-success"] = "Article has been deleted successfully!";
            header("location: ../index.php");
        }else{
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../index.php");
        }
    }
    public static function getAll(){
        global $conn;
        $query = "SELECT * FROM `articl`";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
?>