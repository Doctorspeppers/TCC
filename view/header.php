<?php 
namespace view;
include __DIR__."/../model/class/user.php";
session_start();
if(isset($_COOKIE["PHPSESSID"])){
    
    
}
if(isset($_SESSION["usuario"])){
    
    if($user->permissionUser == 1){


        ?>
<!DOCTYPE html>
<html class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/mdb.css">
    <link rel="stylesheet" href="view/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <script src="view/js/jquery-3.4.0.min.js"></script>
    <script src="view/js/mdb.js"></script>
    <style type="text/css">
        
    </style>
    <title><?php 
    print($nomeDaPagina); 
    ?></title>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="index.php">
                <img src="view/img/logo.png" width="80" alt="Logo">
            </a>
        </ul>
        <form class="navbar-nav">
            <div class="form-group my-auto">
            <div class="input-group md-form form-sm form-2 pl-0">
                <input  class="form-control text-orange my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <span class="input-group-text orange lighten-3" id="basic-text1"><img class="" style="width:15px" src="https://cdn.iconscout.com/icon/free/png-256/magnifier-search-find-glass-magnify-30520.png"></span>
                </div>
            </div>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ml-auto">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="search.php">Busca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="controller/user.php?command=logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
        
    </nav>

    <!-- NOTICIAS -->
</head>
<body class="d-flex flex-column h-100" style="height: 100%;">
<main class="flex-shrink-0" role="main">
<div class="white">
<?php

    }else{
    
?>
<!DOCTYPE html>
<html class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/mdb.css">
    <link rel="stylesheet" href="view/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <script src="view/js/jquery-3.4.0.min.js"></script>
    <script src="view/js/mdb.js"></script>
    <title><?php 
    print($nomeDaPagina); 
    ?></title>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="index.php">
                <img src="view/img/logo.png" width="80" alt="Logo">
            </a>
        </ul>
        <form class="navbar-nav">
            <div class="form-group my-auto">
            <div class="input-group md-form form-sm form-2 pl-0">
                <input  class="form-control text-orange my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <span class="input-group-text orange lighten-3" id="basic-text1"><img class="" style="width:15px" src="https://cdn.iconscout.com/icon/free/png-256/magnifier-search-find-glass-magnify-30520.png"></span>
                </div>
            </div>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ml-auto">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="search.php">Busca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="favoritos.php">Favoritos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="controller/user.php?command=logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
        
    </nav>

    <!-- NOTICIAS -->
</head>
<body class="d-flex flex-column h-100" style="height: 100%;">
<main class="flex-shrink-0" role="main">
<div class="white">
<?php
    }
}else{
?>
<!DOCTYPE html>
<html class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/mdb.css">
    <link rel="stylesheet" href="view/css/mdb.min.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <script src="view/js/jquery-3.4.0.min.js"></script>
    <script src="view/js/mdb.js"></script>
    <title><?php 
    print($nomeDaPagina); 
    ?></title>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="index.php">
                <img src="view/img/logo.png" width="80" alt="Logo">
            </a>
        </ul>
        <form class="navbar-nav">
            <div class="form-group my-auto">
            <div class="input-group md-form form-sm form-2 pl-0">
                <input  class="form-control text-orange my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <span class="input-group-text orange lighten-3" id="basic-text1"><img class="" style="width:15px" src="https://cdn.iconscout.com/icon/free/png-256/magnifier-search-find-glass-magnify-30520.png"></span>
                </div>
            </div>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ml-auto">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="search.php">Busca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="cadastro.php">Cadastro</a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
        
    </nav>

    <!-- NOTICIAS -->
</head>
<body class="d-flex flex-column h-100" style="height: 100%;">
<main class="flex-shrink-0" role="main">
<div class="white">


<?php
}

 

if(isset($_SESSION["result"])){
          ?>  
    <div class="m-4 rounded-pill amber text-center lighten-1">
        <h5 class="m-3 grey-darken-4 pt-4 p-2"><?php echo $_SESSION["result"] ?></h5>
    </div>
    <?php
    unset($_SESSION["result"]);
}


?>