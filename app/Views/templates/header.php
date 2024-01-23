<?php ?>

<!DOCTYPE html>
<head>
    <title>WebEntwicklung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="d-flex flex-column h-100">
<div class="bg-header-1 mb-1">
    <div class="container">
        <div class="d-sm-flex justify-content-between">
            <div class="ps-2 pt-2 pb-2 text-center text-sm-start">
                <a href="/"><img width="250px" class="mt-2 mb-2" src="https://uebung.wi1cm.uni-trier.de/public/assets/images/WE-Logo.svg">
                </a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-md navbar-dark bg-header-1 bg-header-2 px-0 py-0 pb-1" role="navigation">
    <div class="container justify-content-start">
        <button class="navbar-toggler ms-2 ms-md-0 d-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <a class="nav-link ps-0 pe-0" href="#">
                <i class="fas fa-bars"></i>
                <span class="text-white">Menü</span>
            </a>
        </button>

        <div id="navbarContent" class="collapse navbar-collapse ms-2 ms-md-0">
            <ul class="navbar-nav me-auto ms-2 ms-md-0">

                <li class="active">
                    <a class="nav-link d-none d-md-block py-0 mt-1" href="https://uebung.wi1cm.uni-trier.de/public/login/goto/1/0">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>

                <li class="active">
                    <a class="nav-link text-white py-0 mt-1" href="https://uebung.wi1cm.uni-trier.de/public/">
                        <i class="fas fas fa-solid fa-clipboard-check text-sx icon-main-menu"></i><span class="d-inline-flex d-md-none d-lg-none d-xl-inline-flex">Tasks</span>
                    </a>
                </li>

                <li class="active">
                    <a class="nav-link text-white py-0 mt-1" href="https://uebung.wi1cm.uni-trier.de/public/boards/listBoards">
                        <i class="fas fa-brands fa-trello text-sx icon-main-menu"></i><span class="d-inline-flex d-md-none d-lg-none d-xl-inline-flex">Boards</span>
                    </a>
                </li>

                <li class="active">
                    <a class="nav-link text-white py-0 mt-1" href="https://uebung.wi1cm.uni-trier.de/public/spalten/listSpalten">
                        <i class="fas fa-solid fa-table-columns text-sx icon-main-menu"></i><span class="d-inline-flex d-md-none d-lg-none d-xl-inline-flex">Spalten</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
