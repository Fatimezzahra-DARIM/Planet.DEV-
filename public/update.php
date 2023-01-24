<?php
require_once "../class/articl.php";
require_once "../config/getConfig.php";
$id = $_GET["id"];
$row = article::edit($id);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Update articl</title>
</head>

<body>
    <!-- Form -->
    <div class="modal-body col-5 m-auto p-2">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Update Articl</h1>
        <form id="articl" name="articl" enctype="multipart/form-data" action="../config/articlService.php" method="POST">
            <div id="articles" class="py-3 px-1 border-dark rounded-3 border-2">
                <div id="article">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="title" class="form-control" name="Title" value="<?= $row["Title"] ?>" id="title-addArticl">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="Description" id="edittext" class="form-control mb-3 text-left " style="height: 20rem; "><?= $row["Description"] ?></textarea>
                    </div>
                    <div class="form-control mb-3">
                        <label for="title" class="form-label">IMG</label>
                        <!-- <label for="file-upload" class="custom-file-upload "></label> -->
                        <input id="file-upload" name="img" type="file">
                        <input id="file-upload" name="img_old" value="<?= $row["Image"] ?>" type="hidden">
                        <input type="hidden" value="<?= $row["id"] ?>" name="id">
                    </div>
                    <img src="../img/<?= $row["Image"] ?>" alt="" width="100" height="100">
                    <div class="">
                        <label for="categoryName" class="form-label">Category</label>
                        <select id="categoryName" name="category_name" class="form-control mb-3">
                            <?php
                            foreach ($data as $rows) {
                                if ($row['category_name'] === $rows['category_name']) {
                            ?>
                                    <option value="<?= $rows['category_name'] ?>" selected><?= $rows['category_name'] ?></option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?= $rows['category_name'] ?>"><?= $rows['category_name'] ?></option>
                            <?php }
                            }; ?>
                        </select>
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="send" name="update_btn">Update Articl</button>
            </div>
        </form>
    </div>
</body>

</html>