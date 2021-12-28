<?php 
    if(!isset($_SESSION['admin_name'])){
        header('location:'.BURLA."login.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css">
    <title>Dashboard | Home Page</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo BLA ?>"> <img src="<?php echo BL . 'assets/images/logo.png'; ?>" width="70" alt="LOGO"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php //echo BLA ?>">LOGO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cities
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BURLA . 'cities/add.php' ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BURLA . 'cities/index.php' ?>">View All</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BURLA . 'services/add.php' ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BURLA . 'services/index.php' ?>">View All</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Orders
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BURLA . 'orders/' ?>">View All</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admins
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BURLA . 'admins/add.php' ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BURLA . 'admins/' ?>">View All</a>
                    </div>
                </li>
                <!-- <li class="nav-item ">
                    <a class="nav-link" href="<?php echo BL; ?>" target="_blank">View Site</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BURLA . 'logout.php'; ?>">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid mt-5 mb-5">
        <div class="row">