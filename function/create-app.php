<?php
// include("database/auth_session.php");
// require('database/db.php');
// $user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="icon" href="../images/logo.ico">
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/my.css" />
    <link rel="stylesheet" href="../css/jp.css" />

    <title>FreeKey 2.0</title>
</head>

<body style="background-color: #eee ;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="../Pages/Dashboard.php"> 🔑 FreeKey 2.0</a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ms-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">

                        <li><a class="dropdown-item" href="../Pages/profile.php">Profile Settings</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Contact Support</a>
                        </li>
                        <li><a class="dropdown-item" style="border:3px red solid;" href="../Pages/logout.php">Log Out</a></li>
                        <li class="dropdown-item">
                            <label for="border2">
                                <input checked="false" type="checkbox" id="border2" />
                                Default Mode
                            </label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <a href="../Pages/Dashboard.php" class="nav-link px-3 ">
                            <span class="me-2"><i class="bi bi-columns-gap"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="my-1">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <a href="../Pages/application.php" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-layers"></i></span>
                            <span>Application</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Pages/profile.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-person-circle"></i></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Pages/Community.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-people"></i></span>
                            <span>Community</span>
                        </a>
                    </li>
                    <li class="my-1">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Resources
                        </div>
                    </li>
                    <li>
                        <a href="../Pages/downloads.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-box-arrow-down"></i></span>
                            <span>Downloads</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-code-square"></i></span>
                            <span>Documentation</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <main class="cop mt-2 pt-3 px-2">
        <div class="form-body ">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content formb ">
                        <div class="form-items">
                            <h3>Create a new Application</h3>
                            <p>Fill in the data below to create <u>Your Application</u></p>
                            <form class="requires-validation" method="post" action="appcreate.php " novalidate>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="name" placeholder="Enter The Application Name" required>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="ver" placeholder="Enter The Application Version" required>
                                </div>
                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" class="btn btn-primary stretch" style="width: 100%;">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    </div>
    <footer class="footer" style=" align-items: center;">
        <!-- Grid container -->
        <div class="container p-2 pb-0 ">
            <!-- Section: Social media -->
            <section class="mb-2">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1
        href=" #!" role="button"><i class="bi bi-facebook"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i class="bi bi-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i class="bi bi-youtube"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i class="bi bi-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i class="bi bi-linkedin"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i class="bi bi-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="leftt text-center " style="background-color: rgb(33, 37, 41);">
            © 2022 Copyright:
            <a class="text-white" href="#" style="text-decoration: none;">🔑 FREEKEY 2.0</a>
        </div>
        <!-- Copyright -->
    </footer>
    </div>
    </div>
    </div>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap5.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/my.js"></script>

</body>

</html>