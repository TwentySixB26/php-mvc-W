<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?php echo $data["judul"] ?></title>
    <link rel="stylesheet" href="<?php echo BOOTSRAP ; ?>css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="<?php echo BOOTSRAP ; ?>">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo BOOTSRAP ; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BOOTSRAP ; ?>/about">about</a>
            </li>
    </div>
    </div>
</nav>