<?php include "../backend/connect.php";
session_start();
if (isset($_SESSION['admin'])) {

} else {
    ?>
    <script>
        window.history.back();
    </script>
    <?php
}
?>

<!doctype html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>ADMIN</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/utilities.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
</head>

<body>
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg scrollbar"
            id="sidebar">
            <div class="container-fluid">
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand d-inline-block py-lg-2 mb-lg-5 px-lg-6 me-0" href="../">
                    <img src="img/logo.png" style="width:121px;" alt="...">
                </a>
                <div class="navbar-user d-lg-none">
                    <div class="dropdown">
                        <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="avatar-parent-child">
                                <img alt="..." src="img/admin-icon.svg" class="avatar avatar- rounded-circle">
                                <span class="avatar-child avatar-badge bg-success"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                            <a href="#" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item"><a class="nav-link py-2 " href="questions.php"><i class="bi bi-people"></i>
                        Registered users</a></li> -->
                        <li class="nav-item"><a class="nav-link active py-2" href="dashboard.php"><i
                                    class="bi bi-boxes"></i> Products</a></li>
                        <li class="nav-item"><a class="nav-link py-2" href="orders.php"><i
                                    class="bi bi-cart"></i> Orders</a></li>
                        <li class="nav-item"><a class="nav-link py-2" href="contact.php"><i
                                    class="bi bi-people"></i> Contact</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="flex-lg-1 h-screen overflow-y-lg-auto">
            <nav class="navbar navbar-light position-lg-sticky top-lg-0 d-none d-lg-block overlap-10 flex-none bg-white border-bottom px-0 py-3"
                id="topbar">
                <div class="container-fluid">
                    <form class="form-inline ms-auto me-4 d-none d-md-flex"></form>
                    <div class="navbar-user d-none d-sm-block">
                        <div class="hstack gap-3 ms-4">
                            <div class="dropdown">
                                <a class="d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="false" aria-expanded="false">
                                    <div>
                                        <div class="avatar avatar-sm bg-warning rounded-circle text-white"><img
                                                alt="..." src="img/img-profile.png"></div>
                                    </div>
                                    <div class="d-none d-sm-block ms-3"><span
                                            class="h6"><?php print_r($_SESSION['admin']['email']) ?></span></div>
                                    <div class="d-none d-md-block ms-md-2"><i
                                            class="bi bi-chevron-down text-muted text-xs"></i></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="./logout.php"><i class="bi bi-box-arrow-right"></i>
                                        Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <header>
                <div class="container-fluid">
                    <div class="pt-6">
                        <div class="row align-items-center">
                            <div class="col-sm col-12">
                                <h1 class="h3 ls-tight"><span class="d-inline-block me-3">👋</span>Online Shopping Store
                                    | Admin</h1>
                            </div>
                            <div class="col-sm-auto col-12 mt-4 mt-sm-0 pb-4">

                            </div>
                        </div>
                    </div>
                </div>
            </header>