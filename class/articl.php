<?php

require_once "../config/DbConnection.php";

 class article {
    public $id;
    public $title;
    public $Publication_date;
    public $image;
    public $admin_name;
    public $category_name;
    public $description;


    function __construct($title,$description,$admin_name, $category_name, $image)
    {
        $this->title = $title;
       
        $this->description = $description;
        $this->admin_name = $admin_name;
        $this->image = $image;
        $this->category_name = $category_name;
    }

    public static function getCategories()
    {
        global $conn;
        $query = 'SELECT * FROM category';
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data  ;
    
    }
       
    
       
    
    
    public function create(){
        global $conn;
        $query = "INSERT INTO `articl` (`Title`, `Publication_date`, `Image`, `admin_name`, `category_name`, `Description`) VALUES (?,SYSDATE(),?,?,?,?);";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute(
            [   
                $this->title,
                $this->image,
                $this->admin_name,
                $this->category_name,
                $this->description
            ]
        );
        if($result){
            // $_SESSION["articleMessage-success"] = "Article has been created successfully!";
            // header("location: ../index.php");
            echo"gooooood job";
        }else{
            // $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            // header("location: ../index.php");
            echo"repeat you can do it";
        }
    }
    public static function update($id, $title, $description,$category_name,$image){
        global $conn;
        $query = "UPDATE `articl` SET `Title`='$title',`Description`='$description',`category_name`='$category_name',`Image`='$image' WHERE `id` = $id";
        $stmt = $conn->prepare($query);
        if($stmt->execute()){
            $_SESSION["articleMessage-success"] = "Article has been updated successfully!";
            header("location: ../public/index.php");

        }else{
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../public/index.php");
        }
    }

    public static function edit($id){
        global $conn;
        $query = "SELECT * FROM `articl` WHERE `id`=$id";
        
        $stmt = $conn->prepare($query);
        if ($stmt->execute()) {
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } else {
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../public/index.php");
        }
    }
    public static function delete($id){
        global $conn;
        $query = "DELETE FROM `articl` WHERE `id` = $id";
        $stmt = $conn->prepare($query);
        if($stmt->execute()){
            $_SESSION["articleMessage-success"] = "Article has been deleted successfully!";
            header("location: ../public/index.php");
        }else{
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../public/index.php");
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