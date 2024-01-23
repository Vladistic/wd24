<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebEntwicklung</title>
    <link rel="icon" type="image/x-icon" href="logo.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.2/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="styles.css">
</head>
<body class="d-flex flex-column h-100 ">
<div class="bg-header-1 mb-1 bg-dark">
    <div class="container">
        <div class="d-sm-flex justify-content-between">
            <div class="ps-2 pt-2 pb-2 text-center text-sm-start">
                <a href="<?php echo base_url('') ?>"><img width="250px" class="mt-2 mb-2" src="<?php echo base_url('logo.svg'); ?>">
                </a>
            </div>
        </div>
    </div>
</div>
<header class="text-secondary">
    <nav class="navbar navbar-expand-sm bg-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?php echo base_url('tasks/tasks') ?>">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?php echo base_url('boards/table_main') ?>">Boards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="<?php echo base_url('spalten/spalten') ?>">Spalten</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
