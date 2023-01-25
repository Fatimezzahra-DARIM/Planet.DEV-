<?php
include_once "../config/getConfig.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/parsley/parsley.css">
    <script src="../asset/parsley/jquery.js"></script>
    <script src="../asset/parsley/parsley.min.js"></script>
    <title>Dynamique Form</title>
</head>

<body>
    <!-- Form -->
    <div class="row">
        <h1 class="modal-title fs-5 d-flex justify-content-center" id="exampleModalLabel">Add Articl</h1>
    </div>
    <div class="row">
        <div class="modal-body col-5 d-flex justify-content-center ">
            <form data-parsley-validate id="articl" name="articl" enctype="multipart/form-data" action="../config/articlService.php" method="POST">
                <div id="articles" class="py-3 px-1 border-dark rounded-3 border-2">
                    <div id="article">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="title" class="form-control" name="Title[]" id="title-addArticl" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>

                            <textarea name="Description[]" id="edittext" class="form-control mb-3 text-left " placeholder="The article text" style="height: 20rem; " required>
                                    </textarea>
                        </div>

                        <div class="form-control mb-3">
                            <label for="title" class="form-label">IMG</label>
                            <input id="file-upload" name="img[]" type="file">
                        </div>

                        <div class="">
                            <label for="categoryName" class="form-label">Category</label>
                            <select id="categoryName" name="category_name[]" class="form-control mb-3">
                                <?php
                                foreach ($data as $row) :
                                ?>

                                    <option value="<?= $row['category_name'] ?>"><?= $row['category_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button id="addForm" class="btn btn-primary me-3">
                        add form
                    </button>
                    <button type="submit" class="btn btn-primary" id="send" name="create_btn">Create Articl</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<script>
    let articles = document.getElementById('articles');
    let article = document.getElementById('article');
    let addForm = document.getElementById('addForm');

    addForm.addEventListener("click", function(e) {
        e.preventDefault();
        let newArticle = article.cloneNode(true);
        x = 0;

        for (children of newArticle.children) {
            children.children[1].value = '';
            x++;
            if (x == 3) {
                break;
            }
        }

        articles.appendChild(newArticle);
    });
</script>