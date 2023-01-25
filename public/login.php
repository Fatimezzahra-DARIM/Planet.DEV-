    <!doctype html>
    <html lang="en">

    <head>
        <title>Login for Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="../asset/parsley/parsley.css">
        <script src="../asset/parsley/jquery.js"></script>
        <script src="../asset/parsley/parsley.min.js"></script>

    </head>

    <body class="overflow-hidden" style="height: 100vh;">
        <section class="w-100 h-100 d-flex justify-content-center align-items-center">
            <div class="m-auto col-lg-4 col-md-5 col-10">
                <h3 class="text-center">Login Admin</h3>
                <form action="../config/adminService.php" method="POST" class="d-flex flex-column p-4 mt-4 rounded-3 shadow-lg" data-parsley-validate>

                    <div class="d-flex align-items-center justify-content-center bg-primary m-auto  py-4 px-4 rounded-circle">
                        <span class="fs-4 text-white fa fa-user-o"></span>
                    </div>
                    <h5 class="text-center m-2">Sign in</h5>

                    <div class="d-flex flex-column justify-content-center align-items-center m-2">
                        <input class="w-75 m-2 rounded-left" type="email" name="email" placeholder="Username" required>
                        <input class="w-75 m-2 rounded-left" type="password" name="password" placeholder="Password" id="" required>
                    </div>
                    <button type="submit" name="login_btn" class="w-50 border-0 bg-primary text-white py-2 rounded-2 m-2 m-auto">
                        Log In
                    </button>
                </form>
            </div>
        </section>
        <!-- END parsley js-->
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../js/main.js"></script>
    </body>

    </html>