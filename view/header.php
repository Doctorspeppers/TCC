<?php 
namespace view;
define(__DIR__,"","/var/www/html/TCC"); 
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <title><?php 
    print($nomeDaPagina); 
    ?></title>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="#">
                <img src="https://tinyurl.com/y55xtzl3" width="120" alt="Logo">
            </a>
        </ul>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ml-auto">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Info</a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
        <form class="navbar-nav">
            <div class="form-group my-auto">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ml-auto">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Cadastro</a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- NOTICIAS -->
</head>