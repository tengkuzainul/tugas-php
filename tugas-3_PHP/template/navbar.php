<?php
include_once 'template/content.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kuliner Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary px-5 py-2 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://pbs.twimg.com/profile_images/420420853268889600/fwyT8EQ-_400x400.png" alt="Logo" width="50" height="45" class="d-inline-block rounded-circle shadow-lg">
                <span class="text-white text-custom">Kuliner Nusantara</span>
            </a>
            <div class="d-flex justify-content-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php foreach ($content_nav as $key => $value) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?hal=<?= $key ?>"><?= $value ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end -->