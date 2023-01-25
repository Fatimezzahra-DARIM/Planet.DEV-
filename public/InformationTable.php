<?php
require_once "../config/DbConnection.php";
require_once "../class/articl.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Planet.Dev
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!--Data table links-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
    <!-- icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.css" integrity="sha512-c0+vSv9tnGS4fzwTIBFPcdCZ0QwP+aTePvZeAJkYpbj67KvQ5+VrJjDh3lil48LILJxhICQf66dQ8t/BJyOo/g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>




    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../img/logo.png" class="img-fluid" /><span>Planet Dev</span></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="index.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false">
                        <i class="material-icons">apps</i><span>Information Table</span></a>

                </li>


                <li class="dropdown">
                    <a href="./DynamicForm.php">
                        <i class="material-icons">border_color</i><span>Add Articles</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="logOut.php?logout" data-toggle="collapse" aria-expanded="false"><i class=" material-icons bi bi-box-arrow-in-left">
                        </i><span>Log Out</span></a>
                </li>


            </ul>


        </nav>



        <!-- Page Content  -->
        <div id="content">

            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>
                        <div>
                            <a class="navbar-brand" href="#"> Dashboard </a>
                        </div>
                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">

                        </div>
                    </div>
                </nav>
            </div>


            <div class="main-content">

                <h4 class="card-title">Information Table</h4>
                <p class="category">New articles on 2023</p>
                <table id="data-table" class="display dataTable" style="width: 100%" aria-describedby="example_info">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author ID</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="odd">
                        <?php
                        $articles = article::getAll();
                        while ($row = $articles->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<th>" . $row["Title"] . "</th>";
                            echo "<th>" . $row["admin_name"] . "</th>";
                            echo "<th>" . $row["Publication_date"] . "</th>";
                            echo "<th>" . $row["category_name"] . "</th>";
                            echo "<th>" . $row["Description"] . "</th>";
                        ?><td>
                                <div class="d-flex fs-3">
                                    <a href="update.php?id=<?= $row["id"] ?>" data-bs-toggle="modal" class="btn btn-warning me-3" onclick=""><i class="bi bi-pencil-square users-icon"></i></a>
                                    <a href="../config/articlService.php?  id=<?= $row["id"] ?>" class="btn btn-danger text-dark"><i class="bi bi-trash3-fill users-icon"></i></a>
                                    <a href="" class="btn btn-success text-dark me-3"><i class="bi bi-eye-fill"></i></a>
                                </div>
                            </td>
                        <?php
                            echo "</tr>";
                        }
                        ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>

    <footer class="footer">
        <p class="copyright d-flex justify-content-end"> &copy 2023 Design by Fatimezzahra DARIM
        </p>
    </footer>

    </div>



    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("#data-table").DataTable({
                scrollX: true,
                info: false,
                responsive: true,
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="js/jquery-3.3.1.slim.min.js"></script> -->
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->


</body>

</html>