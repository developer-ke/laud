<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css?v=<?php echo time(); ?>"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css?v=<?php echo time(); ?>">
    <style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        padding: 0;
        margin: 0;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-secondary px-0 mx-0 w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index">
                <img src="./assets/logo.jpg" alt="laud suits" width="70px" class="image rounded-circle transparent">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse py-4 " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0  text-light mx-auto">
                    <li class="nav-item ">
                        <a class="nav-link  text-light mx-3" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light mx-3" href="">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light mx-3">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a href="tel:+25470756698" class="text-decoration-none">
                        <span class="bi bi-telephone-fill text-info h3" style="text-shadow: 2px 2px black;">
                            +254724921034
                        </span>
                    </a>

                </form>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start bg-secondary" tabindex="-1" id="offcanvas_nav"
        aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel">
                <img src="./assets/logo.jpg" class="rounded-circle" width="60px" alt="laud's logo">
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements
            here.
            <div class="d-flex">
                <a href="tel:+25470756698" class="text-decoration-none">
                    <span class="bi bi-telephone-fill text-info h3" style="text-shadow: 2px 2px black;">
                        +254724921034
                    </span>
                </a>
            </div>
        </div>
        <div class="offcanvas-footer">
            <div class="row justify-content-center mx-3">
                <div class="col-md-6 bg-dark rounded-3 mb-2">
                    <div class="row py-3 mx-auto">
                        <div class="col-2 ">
                            <a href="#" class="text-light " data-bs-toggle="tooltip" title="whatsapp">
                                <span class="bi bi-whatsapp text-success text-center my-3 h2"></span>
                            </a>
                        </div>
                        <div class="col-2 ">
                            <a href="#" class="text-light" data-bs-toggle="tooltip" title="instagram">
                                <span class="bi bi-instagram h2" style="color:blueviolet;"></span>
                            </a>
                        </div>
                        <div class="col-2 ">
                            <a href="#" class="text-light" data-bs-toggle="tooltip" title="facebook">
                                <span class="bi bi-facebook h2 text-primary"></span>
                            </a>
                        </div>
                        <div class="col-2 ">
                            <a href="#" class="text-light" data-bs-toggle="tooltip" title="email">
                                <span class="bi bi-envelope-fill h2 text-light"></span>
                            </a>
                        </div>
                        <div class="col-2 ">
                            <a href="#" class="text-light" data-bs-toggle="tooltip" title="tiktok">
                                <span class="bi bi-tiktok h2 text-light" style="text-shadow: 2px 2px red;"></span>
                            </a>
                        </div>
                        <div class="col-2 ">
                            <a href="#" class="text-light" data-bs-toggle="tooltip" title="call">
                                <span class="bi bi-telephone-fill h2 text-success"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>